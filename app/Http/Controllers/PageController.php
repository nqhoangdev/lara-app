<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    //
    public function about(){
        $name ='Hoang Nguyen';
        
//        return view('pages/about')->with([
//            'name' => 'hoang',
//            'job' => 'freelancer'
//        ]);
        $userdata = [];
        $userdata['name'] = 'hoang';
        $userdata['job'] = 'freelancer';
        
        return view('pages/about', $userdata);
    }
}
