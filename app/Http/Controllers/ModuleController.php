<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function addModule(){
        return view ('Admin.addModule');
    }
}
