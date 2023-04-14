<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function __construct(){
        $this->returnUrl = "/users";
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('backend.users.index', ["users" => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.users.insert_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $req)
    {
        // @2. Yol
        // $name = $req->get("name");
        // $email = $req->get("email");
        // $password = $req->get("password");
        // $is_admin = $req->get("is_admin", default: 0);
        // $is_active = $req->get("is_active", default: 0);
        // $user = new User();
        // $user->name = $name;
        // $user->email = $email;
        // $user->password = Hash::make($password);
        // $user->is_admin = $is_admin;
        // $user->is_active = $is_active;
        // $user->save();

        $user = new User();
        $data = $this->prepare($req, $user->getFillable());
        $user->fill($data);
        $user->save();
        return Redirect::to($this->returnUrl);
    }

    /**
     * Display the specified resource.
     */

    public function edit(User $user)
    {

        return view('backend.users.update_form', ["user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $req, User $user)
    {

        // @2. yol
        // $name = $req->get("name");
        // $email = $req->get("email");
        // $is_admin = $req->get("is_admin", default: 0);
        // $is_active = $req->get("is_active", default: 0);

        // $user-> name = $name;
        // $user-> email = $email;
        // $user-> is_admin = $is_admin;
        // $user-> is_active = $is_active;
        // $user -> save();
        // return Redirect::to($this->returnUrl);

        $data = $this->prepare($req, $user->getFillable());
        $user->fill($data);
        $user -> save();
        return Redirect::to($this->returnUrl);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {

        $user -> delete();
        return response('Kullanıcı başarıyla silindi.');

    }
    public function passwordForm(User $user){
        return view('backend.users.password_form', ["user" => $user]);


    }
    public function changePassword(User $user, UserRequest $req){

        $data = $this->prepare($req, $user->getFillable());
        $user->fill($data);
        $user->save();
        return Redirect::to($this->returnUrl);

        // @2. YOL
        // $password = $req->get("password");
        // $user->password = Hash::make($password);
        // $user->save();
        // return Redirect::to($this->returnUrl);
    }
}
