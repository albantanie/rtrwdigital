<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use \Carbon\Carbon;

use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        return view('user.login');
    }

    public function logout() {
        \Session::flush();

        return redirect()->route('user.login');
    }

    public function Login(Request $request)
    {
        if (\Session::has('Auth')) {
           if(\Session::get('Auth')->role === 2) {
            return redirect()->route('home.rt');
           } else  if(\Session::get('Auth')->role === 3) {
            return redirect()->route('home.index');
           }
        }

        $user = user::where('nik', $request->nik)->firstOrFail();

        if (!Hash::check($request->password, $user->password)) {
            die();
        }

        \Session::put('Auth', $user);

             if(\Session::get('Auth')->role === 2) {
            return redirect()->route('home.rt');
           } else  if(\Session::get('Auth')->role === 3) {
            return redirect()->route('home.index');
           }
    }

    public function store(Request $request)
    {

        $data = [
            "nik" => $request->nik,
            "addr_rt" => $request->addr_rt,
            "addr_rw" => $request->addr_rw,
            "addr_urban" => $request->addr_urban,
            "addr_distric" => $request->addr_distric,
            "addr_city" => $request->addr_city,
            "addr_state" => $request->addr_state,
            "addr_full" => $request->addr_full,
            "postal_code" => $request->postal_code,
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "birth" => $request->birth,
            "gender_id" => $request->gender_id,
            "email" => $request->email,
            "phone" => $request->phone,
            "password" => Hash::make($request->password),
        ];

        // $dummy = [
        //     "nik" => "38473847384",
        //     "addr_rt" => "001",
        //     "addr_rw" => "005",
        //     "addr_urban" => "pamulang",
        //     "addr_distric" => "pamulang timur",
        //     "addr_city" => "tangerang selatan",
        //     "addr_state" => "Banten",
        //     "addr_full" => "komplek bukit pamulang indah, blok E5/2",
        //     "postal_code" => 15417,
        //     "first_name" => "syahrul",
        //     "last_name" => "faiz",
        //     "birth" => Carbon::now(),
        //     "gender_id" => 1,
        //     "email" => "kdfjkdfj@dkf.com",
        //     "phone" => "8473847384",
        //     "password" => Hash::make("asdfasdf"),
        //     "role" => 2
        // ];

      $user =   user::create($data);

       return redirect()->route('user.login');
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
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
