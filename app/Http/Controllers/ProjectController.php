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
        return view('projects.index', ['user' => Auth::user()->name]);
    }

    public function data(Request $request)
    {
        $query = Project::query();

        $total = $query->count();

        if ($search = $request->input('search.value')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhere('project_number', 'like', "%{$search}%")
                    ->orWhere('client', 'like', "%{$search}%");
            });
        }

        $filtered = $query->count();

        $orderColumnIndex = $request->input('order.0.column', 6);
        $orderColumn = $request->input("columns.$orderColumnIndex.data");
        $orderDir = $request->input('order.0.dir', 'desc');
        $query->orderBy($orderColumn, $orderDir);

        $table = $query->skip($request->input('start'))
            ->take($request->input('length'))
            ->get();

        $data = array();
        if (!empty($table)) {
            foreach ($table as $row) {
                $nestedData = [];
                // $alert = '<span class="badge badge-sm border border-success text-success bg-success">' . $row->alert . '</span>';
                $nestedData['title'] = $row->title;
                $nestedData['project_number'] = $row->project_number;
                $nestedData['budget'] = 'Rp ' . number_format($row->budget, 0, '.', ',');
                $nestedData['client'] = $row->client;
                $nestedData['start_date'] = \Carbon\Carbon::parse($row->start_date)->format('d M Y');
                $nestedData['end_date'] = \Carbon\Carbon::parse($row->end_date)->format('d M Y');
                $nestedData['created_at'] = $row->created_at->format('d M Y H:i');
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
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'title' => 'required',
            'project_number' => 'nullable|string',
            'budget' => 'required | numeric',
            'client' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'nullable|string',
        ]);

        try {
            Project::create($validated);
            return redirect()->back()
                ->with('success', 'Project created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('success', 'Error during the creation!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
        $validated = $request->validate([
            'title' => 'required',
            'project_number' => 'nullable|string',
            'budget' => 'required | numeric',
            'client' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'nullable|string',
        ]);

        try {
            Project::where('id', $id)->update($validated);
            return redirect()->back()
                ->with('success', 'Project updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('success', 'Error during the update!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
            Project::where('id', $id)->delete();
            return redirect()->back()
                ->with('success', 'Project deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('success', 'Error during the deletion!');
        }
    }
}
