<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function contact($name = 'lucas'){
      $dataHeader = [
        'title' => 'Contact '.$name
      ];

      echo view('dashboard/templates/header', $dataHeader);
      echo view('welcome_message');
      echo view('dashboard/templates/footer');
    }
}
