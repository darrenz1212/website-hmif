<?php

namespace App\Http\Controllers;

use App\Models\Aspiration;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function showAspiration()
    {
        $aspiration = Aspiration::all();

        return view('admin.showAspiration',[
            'aspiration' => $aspiration
        ]);
    }
}
