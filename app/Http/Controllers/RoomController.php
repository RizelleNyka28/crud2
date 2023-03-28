<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    //
    public function index()
    {
        //return 'Rooms';

        $data = Room::all();
        return view('room.hotelrooms',['rooms'=>$data]);

    }


}
