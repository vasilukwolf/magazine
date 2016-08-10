<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Items;
use File;
use Input;
use Validator;
use Redirect;
use Session;
use Image;
//use App\Parameters;
//use App\Parameters_values;

class ItemsController extends Controller
{
    public function add()
    {
        return view('add');
    }

    public function save(Request $request)
    {
        // read image from temporary file
        Image::make(Input::file('image'))->resize(300, 200)->save('images/foo.jpg');
        $item = new Items;
        $item->title = $request->title; //название
        $item->description = $request->description;//описание
        $item->price = $request->price; // цена
        $item->preview = 'test'; //ссылки на картинки
        $item->save();
    }
}