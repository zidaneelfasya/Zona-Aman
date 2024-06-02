<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
       
        $users = User::get(); 
        return view('admin/admin/showuser', ['users' => $users]);
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user) {
            // Delete the user
            $user->delete();
            return redirect('/admin/users')->with('success', 'User deleted successfully.');
        } else {
            return redirect('/admin/users')->with('error', 'User not found.');
        }
        
    }
}
