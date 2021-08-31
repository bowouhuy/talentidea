<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $data = array(
            'title'=> 'Dashboard',
        );

        return view('admin.dashboard.index', $data);
    }
}
