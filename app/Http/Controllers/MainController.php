<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MainController extends Controller
{
    public function index(Request $request) {
        return response()->view('web/index');
    }

    public function philosophy(Request $request) {
        return response()->view('web/philosophy');
    }
    public function product(Request $request) {
        return response()->view('web/product');
    }
    public function products(Request $request) {
        return response()->view('web/products');
    }
    public function services(Request $request) {
        return response()->view('web/services');
    }
    public function service(Request $request) {
        return response()->view('web/service');
    }
}
