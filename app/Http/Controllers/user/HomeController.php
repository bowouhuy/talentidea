<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = array(
            'title'=> 'Dashboard'
        );
        // $data = 'Dashbaord';
        // print_r($data);exit;
        return view('user.home.index', $data);
    }
}
