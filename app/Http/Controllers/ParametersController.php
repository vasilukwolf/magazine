<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ParametersController extends Controller
{
    public function get()
		{
		return view('parameters');
		}
}
