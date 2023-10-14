<!-- liste.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Liste des employés</title>
</head>
<body>
    <h1>Liste des employés</h1>
    <h2>Entreprise : <?php echo $entreprise['nom_entreprise']; ?></h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Date de naissance</th>
                <th>Poste</th>
                <th>Numéro CNAPS</th>
                <th>Date d'embauche</th>
                <th>Salaire brut</th>
                <th>Salaire net</th>
                <th>Matricule</th>
                <th>Premier congé</th>
                <th>Congés cumulés</th>
                <th>Supérieur hiérarchique</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employes as $employe) : ?>
                <tr>
                    <td><?php echo $employe['nom']; ?></td>
                    <td><?php echo $employe['date_naissance']; ?></td>
                    <td><?php echo $employe['poste']; ?></td>
                    <td><?php echo $employe['numero_cnaps']; ?></td>
                    <td><?php echo $employe['date_embauche']; ?></td>
                    <td><?php echo $employe['salaire_brut']; ?></td>
                    <td><?php echo $employe['salaire_net']; ?></td>
                    <td><?php echo $employe['matricule']; ?></td>
                    <td><?php echo $employe['premier_conge']; ?></td>
                    <td><?php echo $employe['congee_cumul']; ?></td>
                    <td><?php echo $employe['superieur_hierarchique']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>