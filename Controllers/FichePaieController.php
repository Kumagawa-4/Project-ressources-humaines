<?php

namespace App\Controllers;

use App\Models\ActiviteeModel;
use App\Models\EmployeModel;
use App\Models\CongeModel;
use App\Models\FichePaieModel;

class FichePaieController extends BaseController
{
    public function create2()
    {
        $employeModel = new EmployeModel();
        $employes = $employeModel->findAll();

        return view('create_paie', ['employes' => $employes]);
    }

    public function store2()
    {
        // Récupérer l'ID de l'employé sélectionné
        $employeId = $this->request->getPost('employe_id');
    
        // Obtenir les activités de l'employé pour le mois en cours
        $activiteeModel = new ActiviteeModel();
        $activites = $activiteeModel->where('employe_id', $employeId)
        ->where('date >=', date('Y-m-01'))
        ->where('date <=', date('Y-m-t'))
        ->findAll();
    
        // Obtenir les informations de l'employé
        $employeModel = new EmployeModel();
        $employe = $employeModel->find($employeId);
    
        // Obtenir les congés de l'employé pour le mois en cours
        $congesModel = new CongeModel();
        $conges = $congesModel->where('employe_id', $employeId)
        ->where('EXTRACT(MONTH FROM date_debut)', date('m'))
        ->findAll();
    
        // Créer la fiche de paie avec les activités et les congés de l'employé
        $fichePaie = [
            'employe' => json_encode($employe),
            'activites' => json_encode($activites),
            'conges' => json_encode($conges),
            'mois' => date('m'),
            'annee' => date('Y')
        ];
        
        // Enregistrer la fiche de paie dans la base de données
        $fichePaieModel = new FichePaieModel();
        $fichePaieModel->insert($fichePaie);
    
        // Rediriger vers la liste des fiches de paie ou afficher un message de succès
        return redirect()->to('')->with('success', 'La fiche de paie a été créée avec succès.');
    }
}