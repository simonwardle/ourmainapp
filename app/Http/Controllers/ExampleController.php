<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homePage()
    {
        $ourName = 'Simon';
        $animals = ['Mia', 'Dolly', 'Lucy'];
        
        
        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catName' => 'Mia']);
    }

    public function aboutPage() {

        return view('single-post');
    }
}
