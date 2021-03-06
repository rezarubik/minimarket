<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserManagementRequest;
use Illuminate\Http\Request;
use App\User;
use App\UserRole;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        // dd($users);
        return view('user_management.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userRoles = UserRole::all();
        // dd($userRoles);
        return view('user_management.create', compact('userRoles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserManagementRequest $request)
    {
        $data = [
            'id_user_role' => $request->id_user_role,
            'name' => $request->nama_user,
            'email' => $request->email_user,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ];
        User::create($data);
        return redirect()->route('master.user.management')->with('status', 'Data user berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = UserRole::all();
        return view('user_management.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate(
            [
                'nama_user' => 'required',
                'password' => 'required',
                'role' => 'required'
            ],
            [
                'nama_user.required' => 'Nama User wajib diisi!',
                'password.required' => 'Password wajib diisi!',
                'role.required' => 'Role wajib dipilih!',
            ]
        );
        $data = [
            'id_user_role' => $request->id_user_role,
            'name' => $request->nama_user,
            'email' => $request->email_user,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ];
        $user->update($data);
        return redirect()->route('master.user.management')->with('status', 'Data user berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('master.user.management')->with('status', 'Data user berhasil dihapus');
    }
}
