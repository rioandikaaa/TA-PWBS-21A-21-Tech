<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kia extends Controller
{
    
    function __construct()
    {
        
        $this->model = new Mkia();

    }


    function getController()
   
{
   
   $result = $this->model->getData();

   
   return response(["kia" =>$result],http_response_code());
}

    //pencarian data
    function searchController($keyword)
    {
       $result = $this->model->searchData
       ($keyword);
       return response(["kia" =>$result],http_response_code());
    }
}


