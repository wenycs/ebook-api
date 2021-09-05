<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() { 
        $data = [
              'status' => '200',
              'data' => [
                'nis' => 3103119193,
                'nama' => 'Weny C.S.',
                'nomer' => '085900296679',
                'kelas' => 'XII RPL 6'
                ]
            ];
        return response()->json($data);
    }
}
