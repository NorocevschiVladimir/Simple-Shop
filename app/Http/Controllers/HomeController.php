<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
//    public static $products = [
//        [
//            'id'=>1,
//            'name'=>'Pidor',
//            'description'=>'Latentniy',
//            'price'=>1,
//            'image'=>'svg/404.svg',
//        ],
//        [
//            'id'=>2,
//            'name'=>'Aloo',
//            'description'=>'Votona',
//            'price'=>100,
//            'image'=>'svg/404.svg',
//        ],
//        [
//            'id'=>3,
//            'name'=>'Herrrr',
//            'description'=>'Asdadasd',
//            'price'=>300,
//            'image'=>'svg/404.svg',
//        ],
//
//    ];
//    public function index(Request $request)
    public function index()
    {
//            if(!Cookie::has('store'))
//                Cookie::queue('store', []);
//
//        $cookies = Cookie::get('store');

//        return view('index', ['cookies' => $cookies, 'products' => self::$products]);
        return view('index');
    }
//    public function addToStore(Request $request){
//        $cookie = Cookie::get('store');
//        $cookie[] = $request->product_id;
//        Cookie::queue('store',$cookie);
//        return response()->json(self::$products[$request->product_id-1]);
//    }
}
