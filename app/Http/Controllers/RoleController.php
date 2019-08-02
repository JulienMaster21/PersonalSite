<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRole;
use App\Permission;
use App\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
        $this->authorizeResource(Role::class, "role");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $user = Auth::user();

        return view('pages/roles.index', [
            'roles' => $roles,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $models = Lang::get('models');

        return view('pages/roles.create', [
            'models' => $models,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRole $request)
    {
        $role = Role::create($request->validated());

        // Loop through all available permissions
        foreach (Permission::all() as $permission) {
            // Check if permission was selected
            if ($request->has($permission->slug)) {
                // Add permission to user
                $role->permissions()->attach($permission->id, [
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ]);

                $role->touch();
            }
        }

        $role->save();

        return redirect()->action('RoleController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $models = Lang::get('models');

        return view('pages/roles.show', [
            'role' => $role,
            'models' => $models,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $models = Lang::get('models');

        return view('pages/roles.edit', [
            'role' => $role,
            'models' => $models,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRole $request, Role $role)
    {
        $role->update($request->validated());

        // Reset all permissions so only the selected permissions are added
        $role->permissions()->detach();

        // Loop through all available permissions
        foreach (Permission::all() as $permission) {
            // Check if permission was selected
            if ($request->has($permission->slug)) {
                // Add permission to user
                $role->permissions()->attach($permission->id, [
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ]);

                $role->touch();
            }
        }

        $role->save();

        return redirect()->action('RoleController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->permissions()->detach();

        $role->delete();

        return redirect()->action('RoleController@index');
    }
}
