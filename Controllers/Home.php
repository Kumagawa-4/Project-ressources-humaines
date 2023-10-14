<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index(): string
    {
           // $db = db_connect();
            
            // Obtenez les noms de toutes les tables dans la base de données
            //$tables = $db->listTables();
    
            // Affichez les noms des tables
            //foreach ($tables as $table) {
            //    echo $table . '<br>';
           // }
        return view('welcome_message');
    }
}
