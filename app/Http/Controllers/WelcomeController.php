<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    public function hello()
    {
    	 return 'hello from WelcomeController';
    }
    public function page($id,$title=null)
    {
        return 'welcome Page id :'.$id.' Title :'.$title;
    }

}
