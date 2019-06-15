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

            return response($result, 200)->header('Content-Type', 'text/plain');
        }

        return view('main');
    }
}
