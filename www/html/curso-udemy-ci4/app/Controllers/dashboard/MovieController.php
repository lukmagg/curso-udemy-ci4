<?php

namespace App\Controllers\dashboard;

use App\Controllers\BaseController;

/**
 * Class MovieController
 *
 */
class MovieController extends BaseController
{

  public function index(){
    $dataHeader = [
      'title' => 'List of movies'
    ];

    $data = [
      'movies' => array(0,1,2,3,4)
    ];

    echo view('dashboard/templates/header', $dataHeader);
    echo view('dashboard/movie/index', $data);
    echo view('dashboard/templates/footer');
  }


  public function test($name = 'lucas'){

    $dataHeader = [
      'title' => 'List of movies ' . $name
    ];

    $data = [
      'movies' => array(0,1,2,3,4)
    ];


    echo view('dashboard/templates/header', $dataHeader);
    echo view('dashboard/movie/index', $data);
    echo view('dashboard/templates/footer');

  }


}
