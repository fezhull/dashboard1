<?php

use Phalcon\Mvc\Controller;

class HomeController extends Controller
{
   
    public function redirect()

    {
      $this->get('auth');
     

    }
    public function index()
    {
      return view('home');
    }
  }
      
  




  




