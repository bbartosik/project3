<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class Loremipsum extends Controller
{

  public function getIndex()
  {
    return view('pages.loremipsum');
  }


public function postIpsum(Request $request)
{
          $generator = new \Badcow\LoremIpsum\Generator();
          $result = $generator->getParagraphs($request->input('numberofp'));
          return view('pages.loremipsum')->with("result", $result);
 }

}
