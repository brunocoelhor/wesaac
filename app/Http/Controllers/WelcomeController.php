<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Intro;
use App\About;
use App\Edition;

class WelcomeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $intro = Intro::whereId(1)->firstOrFail();
      $about = About::whereId(1)->firstOrFail();
      $editions = Edition::all()->sortByDesc("edition");
      return view('welcome', compact('intro', 'about','editions'));
  }
}
