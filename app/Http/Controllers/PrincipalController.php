<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//CONTROLLER

class PrincipalController extends Controller
{
   //MÉTODO ACTIONS
   // public function principal(){

    // echo 'AULA DE PW3 NO LABORATÓRIO';

    //SLIDE 38
    //RENDERIZANDO AS VIEWS
    public function principal(){
    return view('site.principal');

    }
}
