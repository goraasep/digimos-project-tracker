<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('user-management.index');
    }

    public function data(Request $request)
    {
        $query = User::whereDoesntHave('roles', function ($q) {
            $q->where('name', 'admin');
        });

        $total = $query->count();

        if ($search = $request->input('search.value')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $filtered = $query->count();

        $orderColumnIndex = $request->input('order.0.column', 1);
        $orderColumn = $request->input("columns.$orderColumnIndex.data");
        $orderDir = $request->input('order.0.dir', 'asc');
        $query->orderBy($orderColumn, $orderDir);

        $table = $query->skip($request->input('start'))
            ->take($request->input('length'))
            ->get();

        // dd($table);
        $data = array();
        if (!empty($table)) {
            foreach ($table as $row) {
                $nestedData = [];
                $nestedData['name'] = $row->name;
                $nestedData['email'] = $row->email;
                $nestedData['updated_at'] = $row->updated_at->format('d M Y H:i');
                $nestedData['created_at'] = $row->created_at->format('d M Y H:i');
                // $nestedData['actions'] = 'test';
                $nestedData['actions'] = view('user-management.components.actions', ['user' => $row])->render();
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
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
            $validated['password'] = bcrypt($validated['password']);
            $user = User::create($validated);
            $user->assignRole('user');
            return redirect()->back()
                ->with('success', 'User created successfully.');
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
        try {
            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required',
            ]);
            User::where('id', $id)->update($validated);
            return redirect()->back()
                ->with('success', 'User updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error during the update! ' . $e->getMessage());
        }
    }

    public function updatePassword(Request $request, string $id)
    {
        try {
            $validated = $request->validate([
                'password' => 'required',
                'password_confirmation' => 'required|same:password',
            ]);
            $encrypted_password = bcrypt($validated['password']);
            User::where('id', $id)->update([
                'password' => $encrypted_password
            ]);
            return redirect()->back()
                ->with('success', 'Password changed successfully.');
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
        //for later
        //might be deleted or changed into soft delete
        //or just ban the user
        try {
            $user = User::where('id', $id)->first();
            $user->roles()->detach();
            $user->delete();
            return redirect()->back()
                ->with('success', 'User deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error during the deletion! ' . $e->getMessage());
        }
    }
}
