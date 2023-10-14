<?php

namespace App\Controllers;

use App\Models\ActiviteeModel;
use App\Models\EmployeModel;

class ActiviteeController extends BaseController
{
    public function create()
    {
        $employeModel = new EmployeModel();
        $employes = $employeModel->findAll();

        return view('create', ['employes' => $employes]);
    }

    public function store()
    {
        // Récupérer les données du formulaire
        $employeId = $this->request->getPost('employe_id');
        $designation = $this->request->getPost('designation');
        $montant = $this->request->getPost('montant');
        $taux = $this->request->getPost('taux');
        $nombre = $this->request->getPost('nombre');

        // Insérer l'activité dans la table
        $activiteeModel = new ActiviteeModel();
        $activiteeModel->insert([
            'employe_id' => $employeId,
            'designation' => $designation,
            'nombre' => $nombre, // Ajouter d'autres champs si nécessaire
            'taux' => $taux,
            'montant' => $montant,
            'date' => date('Y-m-d')
        ]);
        // Rediriger vers la page de création des activités ou afficher un message de succès
        return view('create')->with('success', 'L\'activité a été ajoutée avec succès.');
    }
}