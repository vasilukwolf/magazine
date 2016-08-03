<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\Items;
//use App\Parameters;
//use App\Parameters_values;

class ItemsController extends Controller
{
    public function add()
    {
        return view('add');
    }

   /* public function save(Request $request)
    {
        $root = $_SERVER['DOCUMENT_ROOT'] . "/images/"; //определяем папку для сохранения картинок
        $url_img = []; // массив, который будет содержать ссылки на все картинки
        if (!empty($request->file('preview'))) {
            if (is_array($request->file('preview'))) {
                foreach ($request->file('preview') as $file) //обрабатываем массив с файлами
                {
                    if (empty($file)) continue; // если <input type="file"... есть, но туда ничего не загруженно, то пропускаем
                    $f_name = $file->getClientOriginalName(); //получаем имя файла
                    $url_img[] = '/images/' . $f_name; //добавляем url картинки в массив
                    $file->move($root, $f_name); //перемещаем файл в папку
                }
            } else {
                $file = $request->file('preview');
                if (empty($file)) continue;
                $f_name = $file->getClientOriginalName();
                $url_img[] = '/images/' . $f_name;
                $file->move($root, $f_name);
            }
        }
        if (!empty($url_img)) $preview = implode(';', $url_img); //массив с ссылками переводим в строку, что бы сохранить в базу.
        //Сохраняем каждый параметр
        $item = new Items;
        $item->title = $request->title; //название
        $item->description = $request->description;//описание
        $item->price = $request->price; // цена
       // if (!empty($preview)) $item->preview = $preview; //ссылки на картинки
        $item->save();
    }*/
}