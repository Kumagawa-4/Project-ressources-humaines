<?php

namespace App\Controllers;

use App\Models\TypesCongesModel;
use App\Models\EmployeModel;
use App\Models\CongeModel;

use CodeIgniter\Controller;

class CongeControlleur extends Controller
{
    public function Congee_view()
    {
        $typesCongesModel = new TypesCongesModel();
        $employeModel = new EmployeModel();
    
        try {
            $employeId = 1; // ID de l'employé que vous souhaitez afficher
            $employe = $employeModel->find($employeId);
    
            if ($employe) {
                $data['congee_cumul'] = $employe['congee_cumul'];
            } else {
                $data['congee_cumul'] = null;
            }
        } catch (\Exception $e) {
            // Gérez l'exception, par exemple en affichant ou en enregistrant l'erreur
        }
    
        try {
            $typesConges = $typesCongesModel->findAll();
            $data['typesConges'] = $typesConges;
        } catch (\Exception $e) {
            $error = $typesCongesModel->errorInfo();
            $errorMessage = $error[2];
            // Faites quelque chose avec l'erreur, par exemple, affichez-la ou enregistrez-la dans un fichier de log
            // $errorMessage contient le message d'erreur spécifique à afficher ou enregistrer
        }
    
        return view('Congee', $data);
    }
    public function congee_insert()
{
    $typesCongesModel = new TypesCongesModel();
    $employeModel = new EmployeModel();

    $employeId = 1; // ID de l'employé que vous souhaitez afficher

    // Récupérer les données du formulaire
    $dateDebut = $this->request->getPost('dateDebut');
    $dateFin = $this->request->getPost('dateFin');
    $typeCongeId = $this->request->getPost('type_conge_id');


    // Créer un modèle CongeModel pour insérer la demande de congé
    $congeModel = new CongeModel();

    // Construire les données à insérer
    $data = [
        'date_debut' => $dateDebut,
        'date_fin' => $dateFin,
        'type_conge_id' => $typeCongeId,
        'employe_id' => $employeId 
        // Autres données du congé si nécessaire
    ];

    // Insérer la demande de congé dans la base de données
    $congeModel->insert($data);
    return view('index0');

    // Rediriger vers une page de confirmation ou de suc
}
}