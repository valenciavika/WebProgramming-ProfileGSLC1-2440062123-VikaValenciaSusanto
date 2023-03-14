<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;


class namecontroller extends Controller
{
    public function name($id){
        $user = [
            [
               'name' => 'Vika',
               'num' => '+62 821 7834 8389',
               'key' => 1
            ],
            [
                'name' => 'Matt',
                'num' => '+62 747 7774 4057',
                'key' => 2
            ],
            [
                'name' => 'Vieren',
                'num' => '+62 816 880 516',
                'key' => 3
            ],
            [
                'name' => 'Jeje',
                'num' => '+62 818 0123 4567',
                'key' => 4
            ]
        ];
        return view('friend', ['id' => $id, 'user' => $user]);
    }
}