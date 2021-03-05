<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth', 'admin']);
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        // $users = User::all();
        $users = User::orderBy('id', 'desc')->paginate(25);

        return view('admin.users.index', ['users'=>$users]);
    }

        
    public function create()
    {
        return view('admin.users.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'business_name' => 'nullable',
            'type' => 'required|integer',
            'password' => 'required|string|min:8',
            'confirmed' => 'nullable',
        ]);
    
    

        $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'business_name' => $request->business_name,
            'type' => $request->type,
            'password' => bcrypt($request->password),
            'confirmed' => 1,
        ]);

        return redirect(route('users.index'))->with('success',  __('global.Data_created') );

    }

    public function show(User $user)
    {
        return view('admin.users.show', ['user'=>$user]);
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', ['user'=>$user]);
    }

    public function update(Request $request, User $user)
    {   
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,id,'.$user->id,
            'username' => 'required|string|max:255|unique:users,id,'.$user->id,
            'business_name' => 'nullable',
            'type' => 'required|integer',
            'password' => 'required|string|min:8',
            'confirmed' => 'nullable',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'business_name' => $request->business_name,
            'type' => $request->type,
            'password' => bcrypt($request->password),
        ]);

        return redirect(route('users.index'))->with('success',  __('global.Data_updated') );
        
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('users.index'))->with('success',  __('global.Data_deleted') );
    }

    public function confirm(User $user)
    {
        $user->confirmed = 1;
        $user->save();
        return redirect(route('users.show', $user->id))->with('success',  __('global.User_confirmed') );
    }

}