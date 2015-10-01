<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = [
            ['id' => '01','titulo' =>  'Meu Post 01','descricao' =>  'descricao do Post 01 xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx01010101010101010101'],
            ['id' => '02','titulo' =>  'Meu Post 02','descricao' =>  'descricao do Post 02 xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx02020202020202020202'],
            ['id' => '03','titulo' =>  'Meu Post 03','descricao' =>  'descricao do Post 03 xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx03030303030303030303'],
            ['id' => '04','titulo' =>  'Meu Post 04','descricao' =>  'descricao do Post 04 xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx04040404040404040404']
        ];
        return view('home', compact('posts'));

    }

}
