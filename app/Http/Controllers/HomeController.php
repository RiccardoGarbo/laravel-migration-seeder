<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Train;

class HomeController extends Controller
{
    public function __invoke(){

        $trains = Train::all();
        foreach($trains as $train){
            $train->on_time = ($train->on_time == 0 ) ? 'No' : 'Si';
            $train->deleted = ($train->deleted == 0 ) ? 'No' : 'Si';
        };
       


        return view('home', compact('trains'));

    }
}
