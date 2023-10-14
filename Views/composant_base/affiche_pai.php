<!DOCTYPE html>
<html>
<head>
    <title>Fiche de paie</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        h2 {
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
        }

        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Fiche de paie pour l'employé <?php echo $employe['nom']; ?></h1>
    <h2>Informations de l'employé :</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Poste</th>
            <th>Matricule</th>
            <th>Salaire net</th>
            <!-- ... autres en-têtes de colonnes pour les informations de l'employé -->
        </tr>
        <tr>
            <td><?php echo $employe['id']; ?></td>
            <td><?php echo $employe['nom']; ?></td>
            <td><?php echo $employe['poste']; ?></td>
            <td><?php echo $employe['matricule']; ?></td>
            <td><?php echo $employe['salaire_net']; ?></td>
            <!-- ... autres cellules pour les informations de l'employé -->
        </tr>
    </table>

    <h2>Liste des activités :</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Taux</th>
            <th>Nombre</th>
            <th>Montant</th>
            <th>Désignation</th>
        </tr>
        <?php foreach ($activites as $activite) : ?>
            <tr>
                <td><?php echo $activite['id']; ?></td>
                <td><?php echo $activite['date']; ?></td>
                <td><?php echo $activite['taux']; ?></td>
                <td><?php echo $activite['nombre']; ?></td>
                <td><?php echo $activite['montant']; ?></td>
                <td><?php echo $activite['designation']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Liste des congés :</h2>
<ul>
    <?php foreach ($conges2 as $conge) : ?>
        <li><?php echo $conge['date_debut']; ?> - <?php echo $conge['date_fin']; ?></li>
    <?php endforeach; ?>
</ul>
    <h2>Mois et année :</h2>
    <p>Mois : <?php echo $mois; ?></p>
    <p>Année : <?php echo $annee; ?></p>
    
    <h2>Montant des congés payés :</h2>
    <p><?php echo $montantCongesPayes; ?></p>
</body>
</html>