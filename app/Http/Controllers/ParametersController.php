<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ParametersController extends Controller
{
    public function get(){
    	$parameters=Parameters::all();
		return view('parameters',['parameters'=>$parameters]);
    }
	public function save(Request $request)
	{

		$param=Parameters::create($request->all());
		return [$param->id,$param->title];
}
}
