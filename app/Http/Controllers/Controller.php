<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    public function generate()
    {
        return Str::random(32);
    }


    public function test ($nama, $umur)
    {
        return 'Hello nama saya '. $nama . ', umur saya ' .$umur;
    }
}
