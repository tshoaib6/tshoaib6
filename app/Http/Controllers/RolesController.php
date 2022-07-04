<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;




class RolesController extends Controller
{
    public function index()
    {

        $roles = Role::all();
        return view('usermanagement.user_control', compact('roles'));
    }

    public function create()
    {

        $all_permissions  = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('usermanagement.createuser', compact('all_permissions', 'permission_groups'));
    }

    public function store(Request $request)
    {
        // if (is_null($this->user) || !$this->user->can('role.create')) {
        //     abort(403, 'Sorry !! You are Unauthorized to create any role !');
        // }


        // Validation Data
        $request->validate([
            'name' => 'required|max:100|unique:roles'
        ], [
            'name.requried' => 'Please give a role name'
        ]);

        // Process Data
        $role = Role::create(['name' => $request->name, 'guard_name' => 'admin']);

        // $role = DB::table('roles')->where('name', $request->name)->first();
        $permissions = $request->input('permissions');

        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        session()->flash('success', 'Role has been created !!');
        return back();
    }

    public function edit($id)
    {


        // if (is_null($this->user) || !$this->user->can('role.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized to edit any role !');
        // }

        $role = Role::findById($id, 'admin');

        $all_permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('usermanagement.editrole', compact('role', 'all_permissions', 'permission_groups'));
    }

    public function update(Request $request, $id)
    {

        // if (is_null($this->user) || !$this->user->can('role.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized to edit any role !');
        // }

        // Validation Data
        $request->validate([
            'name' => 'required|max:100|unique:roles,name,' . $id
        ], [
            'name.requried' => 'Please give a role name'
        ]);

        $role = Role::findById($id, 'admin');
        $permissions = $request->input('permissions');

        if (!empty($permissions)) {
            $role->name = $request->name;
            $role->save();
            $role->syncPermissions($permissions);
        }

        session()->flash('success', 'Role has been updated !!');
        return redirect('/userManagement');
    }

    public function destroy($id)
    {
        // if (is_null($this->user) || !$this->user->can('role.delete')) {
        //     abort(403, 'Sorry !! You are Unauthorized to delete any role !');
        // }
        $role = Role::findById($id, 'admin');
        if (!is_null($role)) {
            $role->delete();
        }

        session()->flash('success', 'Role has been deleted !!');
        return back();
    }
}
