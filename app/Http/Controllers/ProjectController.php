<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('projects.index');
    }

    public function data(Request $request)
    {
        $query = Project::with('createdBy') // for view usage
            ->leftJoin('users', 'projects.created_by', '=', 'users.id') // for filtering
            ->select('projects.*'); // avoid column name conflict

        $total = $query->count();

        if ($search = $request->input('search.value')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhere('client', 'like', "%{$search}%")
                    ->orWhere('users.email', 'like', "%{$search}%");
            });
        }

        $filtered = $query->count();

        $orderColumnIndex = $request->input('order.0.column', 6);
        $orderColumn = $request->input("columns.$orderColumnIndex.data");
        $orderDir = $request->input('order.0.dir', 'desc');
        if ($orderColumn == 'created_by') {
            $query->orderBy('users.email', $orderDir);
        } else {
            $query->orderBy($orderColumn, $orderDir);
        }

        $table = $query->skip($request->input('start'))
            ->take($request->input('length'))
            ->get();

        $statusColors = [
            'TODO' => 'gray',
            'IN_PROGRESS' => 'blue',
            'ON_HOLD' => 'yellow',
            'COMPLETED' => 'green',
        ];
        $data = array();
        if (!empty($table)) {
            foreach ($table as $row) {
                $color = $statusColors[$row->status] ?? 'gray';
                $nestedData = [];
                $nestedData['title'] = $row->title;
                $nestedData['client'] = $row->client;
                $nestedData['start_date'] = \Carbon\Carbon::parse($row->start_date)->format('d M Y');
                $nestedData['end_date'] = \Carbon\Carbon::parse($row->end_date)->format('d M Y');
                $nestedData['created_at'] = $row->created_at->format('d M Y H:i');
                $nestedData['created_by'] = $row->createdBy ? $row->createdBy->email : "Deleted user";
                $nestedData['status'] = '<span class="status status-' . $color . '">' . str_replace('_', ' ', $row->status) . '</span>';
                $nestedData['actions'] = view('projects.components.actions', ['project' => $row])->render();
                $data[] = $nestedData;
            }
        }

        return response()->json([
            'draw' => intval($request->input('draw')),
            'recordsTotal' => $total,
            'recordsFiltered' => $filtered,
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'required',
                'client' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'description' => 'nullable|string',
            ]);
            $validated['created_by'] = Auth::user()->id;
            Project::create($validated);
            return redirect()->back()
                ->with('success', 'Project created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error during the creation! ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('tasks.index', ['project' => Project::with('tasks')->findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validated = $request->validate([
                'title' => 'required',
                'client' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'description' => 'nullable|string',
            ]);
            Project::where('id', $id)->update($validated);
            return redirect()->back()
                ->with('success', 'Project updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error during the update! ' . $e->getMessage());
        }
    }

    public function updateStatus(Request $request, string $id)
    {
        try {
            $validated = $request->validate([
                'status' => 'required',
            ]);
            Project::where('id', $id)->update($validated);
            return redirect()->back()
                ->with('success', 'Project status updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error during the update! ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Project::where('id', $id)->delete();
            return redirect()->back()
                ->with('success', 'Project deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error during the deletion! ' . $e->getMessage());
        }
    }
}
