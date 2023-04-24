<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\addrs;
use App\Http\Requests\AddressRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;

class AddressController extends Controller
{
    public function __construct()
    {
        $this->returnUrl = "/users/{}/addresses";
    }

    public function index(User $user): View
    {
        $addrs = $user->addrs;

        return view("backend.addresses.index", ["addrs" => $addrs, "user" => $user]);
    }

    public function create(User $user)
    {
        return view('backend.addresses.insert_form', ["user" => $user]);
    }
    public function store(User $user, AddressRequest $req)
    {
        $addr = new addrs();
        $data = $this->prepare($req, $addr->getFillable());
        $addr->fill($data);
        $addr->save();
        $this -> editReturnUrl($user -> user_id);


        return response('Kullanıcı başarıyla eklendi');



        //return Redirect::to($this->returnUrl);
    }

    public function edit(User $user, Addrs $address)
    {
        return view('backend.addresses.update_form', ["user" => $user, "addr" => $address]);
    }

    public function update( User $user, AddressRequest $request,Addrs $addr)
    {
        $data = $this->prepare($request, $addr->getFillable());
        $addr->fill($data);
        $addr->save();
        $this->editReturnUrl($user->user_id);

        return response('Adres başarıyla güncellendi.');
    }

    public function destroy(User $user, addrs $address)
    {
        $address->delete();
        return response('Adres başarıyla silindi.');
    }

    private function editReturnUrl($id)
    {
        $this->returnUrl = "/users/$id/addresses";
    }
}
