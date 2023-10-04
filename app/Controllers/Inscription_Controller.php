<?php

namespace App\Controllers;
use App\Controllers\Main_Controller ;
class Inscription_Controller extends BaseController {
        public function Inscription_views (): String {
            return view("Inscription");
        }
        public function Inscription_Result_views (): String {
            return view("Inscription_result");
        }
}