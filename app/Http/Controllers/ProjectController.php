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
                $nestedData['budget'] = $row->budget;
                $nestedData['client'] = $row->client;
                $nestedData['start_date'] = $row->start_date;
                $nestedData['end_date'] = $row->end_date;
                $nestedData['created_at'] = $row->created_at->format('d M Y H:i');
                $nestedData['actions'] = '
                <div class="d-flex justify-content-around">
                <span class="badge badge-outline text-blue">Details</span>
                <span class="badge badge-outline text-yellow">Edit</span>
                <span class="badge badge-outline text-red">Delete</span>
                </div>';
                // $nestedData[] = view('modal.edit-parameter', ['parameters' => Parameters::all(), 'parameter' => $row, 'device_uuid' => $request->device_uuid])->render();
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
