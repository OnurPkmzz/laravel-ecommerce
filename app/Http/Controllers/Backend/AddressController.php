<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Models\Adress;
use App\Http\Requests\AddressRequest;
use App\Models\User;



class AddressController extends Controller
{
    public function __construct(){
        $this->returnUrl = "/users/{}/addresses ";
    }
    public function index(User $user)
    {
        $addrs = $user->addrs;
        return view("Backend.addresses,index",  ["addrs" => $addrs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        return view('backend.addresses.insert_form', ["user" => $user]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(User $user, AddressRequest $req)
    {
        $addr = new Adress();
        $data = $this->prepare($req, $addr->getFillable());
        $addr->fill($data);
        $addr->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user, AddressRequest $address)
    {
        return view('backend.users.update_form', ["user" => $user , "addr" => $address ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddressRequest $request,User $user, Adress $adress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
