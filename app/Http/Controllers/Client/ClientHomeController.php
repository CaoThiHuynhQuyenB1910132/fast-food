<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ClientHomeController extends Controller
{
    public function index(): View
    {
        return view('client.layouts.app');
    }
}

