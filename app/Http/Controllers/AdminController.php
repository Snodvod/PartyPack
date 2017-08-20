<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Party;
use App\Type;


class AdminController extends Controller
{
    public function index() {
        $users = User::all();
        $parties = Party::all();

        return view('admin.index', ['users' => $users, 'parties' => $parties]);
    }

    public function changeRoleForm() 
    {
        $users = User::all();
        $parties = Party::all();
        $roles = Type::all();

        return view('admin.rolechange', ['users' => $users, 'parties' => $parties, 'types' => $roles]);
    }

    public function changeRole(Request $request, $id)
    {
        $user = User::find($id);
        $userName = $user->name;
        $role = $request->type;
        $roleId = Type::where('name', '=', $role)->get();

        $user->type_id = $roleId[0]->id;
        $user->save();

        return redirect('/admin')->with('status', "Role of $userName successfully updated!");
    }
}
