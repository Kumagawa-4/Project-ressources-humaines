<?php
namespace App\Controllers;

use App\Models\EntrepriseModel;
use App\Models\EmployeModel;

use App\Models\CvModel;

class AuthController extends BaseController
{public function login()
    {
        // Récupérer les données du formulaire
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
   

        // Vérifier les informations de connexion pour l'entreprise
        $entrepriseModel = new EntrepriseModel();
        $entreprise = $entrepriseModel->where('email', $email)
            ->first();
             
        // Vérifier les informations de connexion pour le CV
        $cvModel = new CvModel();
        $cv = $cvModel->where('email', $email)
                    ->first();
        session_start();

      
        if ($email == $entreprise['email']) {
            // Connexion réussie pour l'entreprise
            // Vous pouvez effectuer les actions nécessaires ici
            // Exemple : rediriger vers une page spécifique pour l'entreprise connectée
            $_SESSION['entreprise_id'] = $entreprise['identreprise']; // Stocker l'ID de l'entreprise dans la session
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
        } else {
        }
   
        
        if ($cv !== null && $cv['password'] == $password) {
            // Connexion réussie pour le CV
            // Vous pouvez effectuer les actions nécessaires ici
            // Exemple : rediriger vers une page spécifique pour le CV connecté
            $_SESSION['cv_id'] = $cv['idcv']; // Stocker l'ID du CV dans la session
            return view('vide');
        } else {
        }

        // Si les informations de connexion sont incorrectes
        // Vous pouvez rediriger vers une page d'erreur ou afficher un message d'erreur

    }
    public function index()
    {
        return view('log');
    }
}
?>