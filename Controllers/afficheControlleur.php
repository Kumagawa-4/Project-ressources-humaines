<?php 
namespace App\Controllers;

use App\Models\ActiviteeModel;
use App\Models\EmployeModel;
use App\Models\TypesCongesModel;
use App\Models\CongeModel;

use App\Models\FichePaieModel;

class afficheControlleur extends BaseController
{
    public function affiche()
    {
        // Récupérer l'ID de l'employé sélectionné
        $employeId = 1;
    
        // Obtenir les informations de l'employé
        $employeModel = new EmployeModel();
        $employe = $employeModel->find($employeId);
    
        // Obtenir les activités de l'employé pour le mois en cours
        $activiteeModel = new ActiviteeModel();
        $activites = $activiteeModel->where('employe_id', $employeId)
                                    ->where('EXTRACT(MONTH FROM date)', date('m'))
                                    ->findAll();
    
        // Obtenir les congés de l'employé pour le mois en cours
        $congesModel = new CongeModel();
        $conges = $congesModel->select('type_conge_id, COUNT(*) as nombre_conges')
                              ->where('employe_id', $employeId)
                              ->where('EXTRACT(MONTH FROM date_debut)', date('m'))
                              ->groupBy('type_conge_id')
                              ->findAll();
       var_dump($conges);
        // Obtenir les informations sur les types de congé
        $typeCongeModel = new TypesCongesModel();
        $typesConges = $typeCongeModel->findAll();
    
        // Calculer le montant des congés payés
        $montantCongesPayes = 0;
        // Déduction pour les congés déductibles (par exemple, 10% du salaire brut)
        $pourcentageDeduction = 0.1;
        foreach ($conges as $conge) {

            $typeConge = $typeCongeModel->find($conge['type_conge_id']);
            if ($typeConge['nom'] === 'Congé payé') {
                // Calculer le montant des congés payés (salaire brut * nombre de congés)
                $montantCongesPayes += $employe['salaire_brut'] * $conge['nombre_conges'];
            } elseif ($typeConge['deductibilité']) {
                // Calculer la déduction pour les congés déductibles
                $deductionConge = $employe['salaire_brut'] * $pourcentageDeduction * $conge['nombre_conges'];
                // Soustraire la déduction du montant total de la fiche de paie
                $montantCongesPayes -= $deductionConge;
            }
        }
        // Obtenez les informations sur les congés
$congesModel2 = new CongeModel();
$conges2 = $congesModel2->select('date_debut, date_fin')
    ->where('employe_id', $employeId)
    ->where("EXTRACT(MONTH FROM date_debut) = '" . date('m') . "'")
    ->findAll();
var_dump(date('m'));

    
        // Données à passer à la vue
        $data = [
            'employe' => $employe,
            'activites' => $activites,
            'conges' => $conges,
            'conges2' => $conges2,
            'typesConges' => $typesConges,
            'montantCongesPayes' => $montantCongesPayes,
            'mois' => date('m'),
            'annee' => date('Y')
        ];
    
        // Charger la vue avec les données
        echo view('fiche_paie', $data);
    }
}
?>