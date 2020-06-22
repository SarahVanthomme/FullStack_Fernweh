<?php

namespace App\Http\Controllers;

use App\Address;
use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\UsersRequest;
//use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $users = User::withTrashed()->paginate(100);
        $users = User::all();
        return view('admin.users.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles=Role::pluck('name','id')->all();
        return view('admin.users.create', compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //
        $input = $request->all();
//        $user = new User();
//        $user->name = $request->name;
//        $user->is_active = $request->is_active;
//        $user->email = $request->email;
//        $user->address = $request->address;
//        $user->country = $request->country;
//
//       /* if($file = $request->file('photo_id')){
//            $name = time() . $file->getClientOriginalName();
//            $file->move('images', $name);
//            //$photo = Photo::create(['file'=>$name]);
//            //$user->photo_id = $photo->id;
//            // $input['photo_id'] = $photo->id;
//        }*/

        //$user->password = Hash::make($request['password']);
        $input['password'] = Hash::make($request['password']);

       /* if($address=$request->string('address_id')){

            $address = Address::create(['address']);
            $input['address_id']=$address->id;
        }*/


       // $user->save();
        User::create($input);
        //$user->roles()->sync($request->roles, false);
        return redirect('/admin/users');
    }


/*        User::create([
            'name'=>$request['name'] ,
            'email'=>$request['email'] ,
            'address'=>['address'],
            'country'=>['country'],
            'password'=>Hash::make($request['password']),
            'role_id'=>$request['role_id'] ,
            'is_active'=>$request['is_active']]);
        return redirect('/admin/users');*/
    //}

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
    public function edit($id)
    {
        //
        $user = User::findOrFail($id);
        $roles = Role::pluck('name','id')->all();
        return view ('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $user = User::findOrFail($id);
        if(trim($request->password)==''){
            $input = $request->except('password');
        }else{
            $input = $request->all();
            $input['password'] = Hash::make($request['password']);
        }

//        if($file = $request->file('photo_id')){
  //          $name = time() . $file->getClientOriginalName();
    //        $file->move('images', $name);
//            $photo = Photo::create(['file'=>$name]);
//            $input['photo_id'] = $photo->id;
  //      }
        //$input['password'] = Hash::make($request['password']);
        $user->update($input);
        return redirect('admin/users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //HARD DELETE
        /* korte manier */
        //   User::findOrFail($id)->delete();

        /* lange manier */
        $user = User::findOrFail($id);
        //$user->delete();
       /* if ($user->photo !== null) {
            unlink(public_path() . $user->photo->file);
            $user->photo->delete();
        }*/
        $user->delete();
        Session::flash('deleted_user', 'The user is deleted');
        //flash is weergave message, deleted user is de message naam en the user deleted is wat er getoond wordt aan de gebruiker.
        return redirect('admin/users');
    }


   /* public function roleRestore($id)
    {
        Role:onlyTrashed()->where('id',$id)->restore();
        return redirect('admin/roles');
    }*/


}
