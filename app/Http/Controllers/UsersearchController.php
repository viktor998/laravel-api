<?php

namespace App\Http\Controllers;

use App\Usersearch;
use Illuminate\Http\Request;

class UsersearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Usersearch::all();

        return response()->json([
            'response'=> $users,
            'success'=> true
        ]);
    }

}
