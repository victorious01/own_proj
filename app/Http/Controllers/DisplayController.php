<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DisplayController;
use Illuminate\Routing\Controller as BaseController;

class DisplayController extends BaseController
{
    public function displaymeth()
    {
        $name = request('name'); // Retrieve 'name' input from the request
        return view('display'); // Pass 'name' to the view
    }
}
