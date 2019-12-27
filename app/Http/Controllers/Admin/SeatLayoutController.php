<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeatLayoutController extends Controller
{
    public function index()
    {
        return view('admin.seat-layout.index');
    }
}
