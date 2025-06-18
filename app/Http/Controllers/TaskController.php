<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
        try {
            $validated = $request->validate([
                'title' => 'required',
                'description' => 'nullable|string',
                'project_id' => 'required'
            ]);

            Task::create($validated);
            return redirect()->back()
                ->with('success', 'Task created successfully.');
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
        try {
            $validated = $request->validate([
                'title' => 'required',
                'description' => 'nullable|string',
            ]);
            Task::where('id', $id)->update($validated);
            return redirect()->back()
                ->with('success', 'Task updated successfully.');
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
            Task::where('id', $id)->update($validated);
            return redirect()->back()
                ->with('success', 'Task updated successfully.');
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
            Task::where('id', $id)->delete();
            return redirect()->back()
                ->with('success', 'Task deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error during the deletion! ' . $e->getMessage());
        }
    }
}
