<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Parser;

class Controller extends BaseController
{
    public function index(Request $request) {
        if ($request->isMethod('post')) {
            $baitoan = $request->post('problem');
            $loaibaitoan = $request->post('type');


            $parser = new Parser($baitoan, $loaibaitoan);
            $result = $parser->execute();

//            var_dump($baitoan);
//            var_dump($loaibaitoan);
//
//            dd(1);
            return response($result, 200)->header('Content-Type', 'text/plain');
        }

//        $parser = new Parser("Matran([[3,0,5],[-2,7,4]]);Matran([[-1,5,14],[6,13,-8]])", "Phép cộng ma trận");
//        $parser->parse();

//        $parser->parse("Matran([[3,0,5],[-2,7,4]]);Matran([[-1,5,14],[6,13,-8]])");
//        $parser->parse("Hephuongtrinh([x1+x2+x3=25, 5.x1+3.x2+2.x3= 0, x1+x2-x3=6],{x1,x2,x3}])");
//        $parser->parse("Matran([[3,0,5],[-2,7,4]])");

        return view('welcome');
    }
}
