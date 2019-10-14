<?php

namespace App\Controllers;
use App\Models\User;
use Phplite\Http\Response;
use Phplite\Url\Url;
use Phplite\View\View;
use Phplite\Database\Database;

class DashboardController
{
  public function index()
  {

    return view('home');
  }
}
