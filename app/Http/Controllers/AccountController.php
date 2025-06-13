<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    //
    public function index()
    {
        return view('account.index');
    }

    public function update(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required',
            ]);
            $user = User::find(Auth::user()->id);
            $user->name = $validated['name'];
            $user->save();
            return redirect()->back()
                ->with('success', 'Account updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error during the update! ' . $e->getMessage());
        }
    }

    public function changePassword(Request $request)
    {
        try {
            $validated = $request->validate([
                'old_password' => 'required',
                'password' => 'required|min:4',
                'password_confirmation' => 'required|same:password',
            ]);
            if (!Hash::check($validated['old_password'], Auth::user()->password)) {
                return redirect()->back()
                    ->with('error', 'The provided password was incorrect.');
            }
            $user = User::find(Auth::user()->id);
            $user->password = bcrypt($validated['password']);
            $user->save();
            return redirect()->back()
                ->with('success', 'Password updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error during the update! ' . $e->getMessage());
        }
    }
}
