<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slide;

class AboutController extends Controller
{
    public function getAbout(){
        $about = Slide::get();
        return view('guest.about.about')->with([
            'about' => $about,
        ]);
    }
}
