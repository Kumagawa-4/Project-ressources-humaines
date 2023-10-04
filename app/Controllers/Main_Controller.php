<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main_Controller extends Controller{
    protected function  FormSubmit(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                foreach ($_POST as $key => $value) {
                $$key = $value;
            }
        }
    }
}
