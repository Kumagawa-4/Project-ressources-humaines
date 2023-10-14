<?php

namespace App\Controllers;

class Generation_Controller extends BaseController
{
    public function indexAuto(): string
    {
        return view('generation_auto');
    }
    public function indexManuel(): string
    {
        return view('generation_manuelle');
    }
}


?>