<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
  public function index ()
  {
    return view('dashboard');
  }
}