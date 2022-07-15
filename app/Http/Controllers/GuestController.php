<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Guest;

use \Carbon\Carbon;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $guests = guest::where('is_active', true)->get();

        return view('guest.index', compact([
            'guests',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('guest.create');
        Route::get('/gueststore', 'store')->name('guest.store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = \Session::get('Auth');

        $data = [
            "user_id" => $user->id,
            "guest_full_name" => $request->guest_full_name,
            "guest_nik" => $request->guest_nik,
            "guest_gender" => $request->guest_gender,
            "guest_age" => $request->guest_age,
            "guest_come_at" => $request->guest_come_at,
            "guest_back_at" => $request->guest_back_at,
            "guest_relation" => $request->guest_relation,
            "guest_purpose" => $request->guest_purpose,
            "is_active" => true
        ];

        guest::create($data);

        echo "tamu terdaftar";
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
