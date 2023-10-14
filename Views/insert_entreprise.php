<?php
// Connexion à la base de données
$host = "localhost";
$dbname = "inscription";
$user = "postgres";
$password = "root";

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Récupération des données du formulaire
$nomEntreprise = $_POST['nom_entreprise'];
$password = $_POST['Password'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$description = $_POST['description'];

// Vérification si un fichier a été soumis
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    // Récupération des informations sur le fichier importé
    $imagePath = $_FILES['image']['tmp_name'];

    // Lecture du fichier image et conversion en données binaires
    $imageData = file_get_contents($imagePath);

    // Vérification si la lecture du fichier a réussi
    if ($imageData === false) {
        die("Échec de lecture de l'image.");
    }

    // Insertion des données dans la base de données
    $query = "INSERT INTO entreprises (nom_entreprise, password, adresse, telephone, email, description, logo) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$nomEntreprise, $password, $adresse, $telephone, $email, $description, $imageData]);

    // Affichage d'un message de succès
    echo "Le projet a été créé avec succès.";
} else {
    // Aucun fichier importé ou une erreur s'est produite lors de l'import
    echo "Veuillez sélectionner un fichier valide.";
}

// Fermeture de la connexion à la base de données
$pdo = null;
?>