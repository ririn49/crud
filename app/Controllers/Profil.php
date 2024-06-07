<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Profil extends BaseController
{
    public function index()
    {
        return view('profil');
    }
}
