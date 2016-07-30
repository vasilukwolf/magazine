<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Items;
use App\Parameters;

class ItemsController extends Controller
{
    public function add()
		{
			return view('add');
		}

		public function save(Request $request)
			{
                    $item = new Items;
                    $item->title="Хобби";
                    $item->description="В свободное время я люблю рисовать";
                    $item->preview = "root/777.jpg";
                    $item->price = "1000";
                    $item->save();
               }

}
