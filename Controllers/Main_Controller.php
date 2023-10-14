<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\NewInscription_Model;

class Main_Controller extends Controller {
    public function FormSubmit() {
        $data = $_POST;
        return $data;
    }
    
    public function inscription_submit_view() {
        $data['formvalues'] = $this->FormSubmit();
        $newInscriptionModel = new NewInscription_Model();
        $newInscriptionModel->insert($data['formvalues']);
        return view("Inscription_result", $data);
    }
    public function CandidateNumber ($number){
       
    }
}