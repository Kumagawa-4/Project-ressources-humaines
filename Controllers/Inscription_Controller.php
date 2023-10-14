<?php

namespace App\Controllers;
use App\Controllers\Main_Controller ;
use App\Models\EntrepriseModel;
class Inscription_Controller extends BaseController {
        public function Inscription_views (): String {
            return view("Inscription");
        }
        public function Inscription_Result_views (): String {
            return view("Inscription_result");
        }
        public function Inscription_entreprise_views (): String {
            return view("Inscription_entreprise");
        }
        public function Inscription_client_views (): String {
            return view("Inscription_client");
        }
        public function Insert_entreprise_views (): String {
            return view("Insert_entreprise");
        }
        public function submit_entreprise()
        {
            // Récupérer les données soumises du formulaire
            $nomEntreprise = $this->request->getPost('nom_entreprise');
            $password = $this->request->getPost('password');
            $adresse = $this->request->getPost('adresse');
            $telephone = $this->request->getPost('telephone');
            $email = $this->request->getPost('email');
            $description = $this->request->getPost('description');
            $image = $this->request->getFile('image');
    
            // Valider le formulaire (ajoutez des règles de validation si nécessaire)
    
            // Déplacer le fichier image téléchargé vers un répertoire de destination
            $newName = $image->getRandomName();
            $image->move('./uploads', $newName);
    
            // Enregistrer les données dans la base de données
            $entrepriseModel = new EntrepriseModel();
            $data = [
                'nom_entreprise' => $nomEntreprise,
                'password' => $password,
                'adresse' => $adresse,
                'telephone' => $telephone,
                'email' => $email,
                'description' => $description,
                'logo' => $newName
            ];
            $entrepriseModel->insert($data);
    
            // Rediriger vers une autre page ou afficher un message de succès
            return view('vide');
        }
}