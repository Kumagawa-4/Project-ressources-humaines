<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class TestController extends Controller
{
    public function index()
    {
        $db = \Config\Database::connect();

        if ($db->connect()) {
            echo 'Connected to the database successfully.';
        } else {
            echo 'Unable to connect to the database.';
        }
    }
}