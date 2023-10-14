<?php

namespace App\Controllers;

use App\Models\CvModel;
use CodeIgniter\Controller;

class CvController extends Controller
{
    public function submit_cv()
    {
        // Récupérer les données soumises du formulaire
        $nom = $this->request->getPost('nom');
        $prenom = $this->request->getPost('prenom');
        $dateNaissance = $this->request->getPost('date_naissance');
        $adresse = $this->request->getPost('adresse');
        $telephone = $this->request->getPost('telephone');
        $email = $this->request->getPost('email');
        $description = $this->request->getPost('description');
        $diplome = $this->request->getPost('diplome');
        $password = $this->request->getPost('password');

    

        // Gestion de l'image
        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('./uploads', $imageName);

        // Valider le formulaire (ajoutez des règles de validation si nécessaire)

        // Enregistrer les données dans la base de données
        $cvModel = new CvModel();
        $data = [
            'nom' => $nom,
            'prenom' => $prenom,
            'date_naissance' => $dateNaissance,
            'adresse' => $adresse,
            'telephone' => $telephone,
            'email' => $email,
            'description' => $description,
            'diplome' => $diplome,
            'image' => $imageName,
            'password' => $password
        ];
        $cvModel->insert($data);

        // Rediriger vers une autre page ou afficher un message de succès
        return view('index0', $data);
    }

}