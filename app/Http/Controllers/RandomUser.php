<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class RandomUser extends Controller
{
  public function getIndex()
  {
    return view('pages.usergen');
  }


  public function postGen(Request $request) {


              $Numberofusers = $request->input('numberofchars');
              $faker = \Faker\Factory::create();

              for( $i = 0; $i < $Numberofusers; $i++ ){

                  $allusers[$i]['name'] = $faker->name;
                  $allusers[$i]['bday'] = $faker->dateTimeThisCentury->format( 'Y-m-d' );
                  $allusers[$i]['company'] = $faker->company;
                  $allusers[$i]['address'] = $faker->address;
                  $allusers[$i]['description'] = $faker->text( 150 );
              }
              return view('pages.usergen')->with("allusers", $allusers);
          }



}
