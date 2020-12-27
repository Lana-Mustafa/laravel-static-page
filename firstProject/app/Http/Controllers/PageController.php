<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('/movie/index');
    
}
   public function contact_us()
{
    return view('/movie/contact_us');

}
}