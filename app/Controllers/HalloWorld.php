<?php

namespace App\Controllers;

class HalloWorld extends BaseController
{
    public function index()
    {
        return view('halloWorld');
    }
}