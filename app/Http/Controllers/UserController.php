<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::with('department')->get();


        return view('users.index' , compact('users'));  //  ['users'=>$users]
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $departments=Department::all();

        return view('users.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {


        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'images'=>$request->file('images')->store('/images', 'public'),
            'department_id'=>$request->department_id

        ]);

        return redirect(route('users.index'));
    }
    public function search(Request $request){

     $name= $request->search;
      $users=User::where('name','LIKE','%'.$name.'%')->orWhere('email','LIKE','%'.$name.'%')->get();
      return view('users.search',compact('users'));



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show' , compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        // abort_unless($loggedUser->hasPermissionTo('edit users'), 403);
       $departments=Department::all();

        return view('users.edit' , compact('user','departments'));
        //
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
        $data=[ 'name' => $request->name,
        'email' => $request->email,
        'department_id'=>$request->department_id];
        if ($request->hasFile('images')) {
            $path = $request->file('images')->store('/images', 'public');
            $data['images'] = $path;
        }
        $user->update([$data]);



     return redirect(route('users.index'));
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
        return redirect()->back();

    }
}
