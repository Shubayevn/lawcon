<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\adm;

class AdmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Adm::all();

        return view('admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
            ]);

            Adm::create($request->all());

            return redirect()->route('admin.index')->with('success','Post created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Adm $admin)
    {
        return view('admin.show',compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Adm $admin)
    {
        return view('admin.edit',compact('admin'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adm $admin)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $admin->update($request->all());

        return redirect()->route('admin.index')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adm $admin)
    {
        $admin->delete();

        return redirect()->route('admin.index')
            ->with('success','post deleted successfully');
    }

    public function users(User $users)
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }
    public function destroyUser(User $users)
    {
        $users->delete();

        return redirect()->route('admin.users')
            ->with('success','post deleted successfully');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUsers()
    {
        return view('admin.createUsers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeUsers(Request $request)
    {
        {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
            ]);

            Adm::create($request->all());

            return redirect()->route('admin.index')->with('success','Post created successfully.');
        }
    }
}
