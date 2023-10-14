<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EmployeModel; // Importez correctement le modèle

class EmployesController extends Controller
{
    public function augmenterConge()
    {

            // Charger le modèle EmployeModel
            $employeModel = new EmployeModel();
        
            // Exécuter la requête SQL pour augmenter le congé cumulé
            $employeModel->query("UPDATE employes SET congee_cumul = congee_cumul + 3");
        
            // Envoyer une réponse JSON pour indiquer le succès de l'opération
            return view('index0');

        }

        public function listeEmployes()
        {
            // Récupérer l'ID de l'entreprise à partir de la session
            $entreprise_id = $_SESSION['entreprise_id'];
            
            // Instancier le modèle EmployeModel
            $employeModel = new EmployeModel();
            
            // Récupérer tous les employés de la base de données
            $employes = $employeModel->findAll();
            
            // Instancier le modèle EntrepriseModel
            $entrepriseModel = new EntrepriseModel();
            
            // Récupérer les informations de l'entreprise
            $entreprise = $entrepriseModel->find($entreprise_id); // Remplacez 1 par l'ID de l'entreprise souhaitée
            
            // Passer les données des employés et de l'entreprise à la vue
            $data = [
                'employes' => $employes,
                'entreprise' => $entreprise
            ];
            
            // Charger la vue pour afficher la liste des employés
            return view('Liste_emp', $data);
        }
}