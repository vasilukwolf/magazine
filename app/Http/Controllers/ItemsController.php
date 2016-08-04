<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Items;
use Input;
use Validator;
use Redirect;
use Session;
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
    $file = $_FILES['image'];
    $fileName = $request->get('file_name');
    $fileName = $fileName ?: $file['name'];
    $path = str_finish($request->get('folder'), '/') . $fileName;
    $content = File::get($file['tmp_name']);

    $result = $this->manager->saveFile($path, $content);

    if ($result === true) {
      return redirect()
          ->back()
          ->withSuccess("File '$fileName' uploaded.");
    }

    $error = $result ? : "An error occurred uploading file.";
    return redirect()
        ->back()
        ->withErrors([$error]);
        $item = new Items;
        $item->title = $request->title; //название
        $item->description = $request->description;//описание
        $item->price = $request->price; // цена
        $item->preview = $request->basketimage; //ссылки на картинки
        $item->save();
    }
}