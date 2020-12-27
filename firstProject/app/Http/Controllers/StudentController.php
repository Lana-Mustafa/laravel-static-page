<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function about_us()
    {
        return view('/movie/about_us');
    
}
   public function services()
{
    return view('/movie/services');

}
}
