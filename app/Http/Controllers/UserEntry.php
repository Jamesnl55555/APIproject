<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserEntry extends Controller
{
    public function userEntering(Request $request)
    {
        $userName = $request->input('name');

        $user = User::create([
            'name' => $userName
        ]);

        return response()->json([
            'message' => 'True',
            'name' => $user->name,
        ]);
    }
}
