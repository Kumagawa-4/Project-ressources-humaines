<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Recrutement des Candidats</title>
</head>
<body>
    <h1>Formulaire de Recrutement des Candidats</h1>
    
    <form action="submit_recruitment_form.php" method="POST" enctype="multipart/form-data">
        <h2>Informations Personnelles</h2>
        <label for="full-name">Nom complet :</label>
        <input type="text" id="full-name" name="full-name" required><br>
        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="phone">Numéro de téléphone :</label>
        <input type="tel" id="phone" name="phone" required><br>
        
        <label for="address">Adresse :</label>
        <input type="text" id="address" name="address" required><br>
        
        <label for="city">Ville :</label>
        <input type="text" id="city" name="city" required><br>
        
        <label for="state">État/Province :</label>
        <input type="text" id="state" name="state" required><br>
        
        <label for="zip">Code postal :</label>
        <input type="text" id="zip" name="zip" required><br>
        
        <label for="country">Pays :</label>
        <input type="text" id="country" name="country" required><br>
        
        <h2>Poste Demandé</h2>
        <label for="position-title">Intitulé du Poste :</label>
        <input type="text" id="position-title" name="position-title" required><br>
        
        <label for="department">Département :</label>
        <input type="text" id="department" name="department" required><br>
        
        <label for="application-date">Date de Candidature :</label>
        <input type="date" id="application-date" name="application-date" required><br>
        
        <h2>Éducation</h2>
         
        <label for="university">Université/École :</label>
        <input type="text" id="university" name="university" required><br>
        
        <label for="major">Majeure/Domaine d'Étude :</label>
        <input type="text" id="major" name="major" required><br>
        
        <label for="graduation-year">Année d'Obtention du Diplôme :</label>
        <input type="text" id="graduation-year" name="graduation-year" required><br>
        
        <h2>Expérience Professionnelle</h2>
        <label for="company-name">Nom de l'Entreprise :</label>
        <input type="text" id="company-name" name="company-name" required><br>
        
        <label for="job-title">Poste Occupé :</label>
        <input type="text" id="job-title" name="job-title" required><br>
        
        <label for="employment-start-date">Date de Début de l'Emploi :</label>
        <input type="date" id="employment-start-date" name="employment-start-date" required><br>
        
        <label for="employment-end-date">Date de Fin de l'Emploi :</label>
        <input type="date" id="employment-end-date" name="employment-end-date" required><br>
        
        <label for="responsibilities">Responsabilités :</label><br>
        <textarea id="responsibilities" name="responsibilities" rows="4" cols="50" required></textarea><br>
        
        <h2>Compétences et Qualifications</h2>
        <label for="skills">Listez vos compétences et qualifications pertinentes :</label><br>
        <textarea id="skills" name="skills" rows="4" cols="50" required></textarea><br>

        <label for="certification">Envoyez ici votre certificat de travail :</label>
        <input type="file" id="certification" name="certification" required><br>

        <label for="job-source">Comment avez-vous entendu parler de cette offre d'emploi ?</label>
        <input type="text" id="job-source" name="job-source" required><br>
        
        <label for="date">Date :</label>
        <input type="date" id="date" name="date" required><br>
        <button id="submit">
        Envoyer
        </button>
    </form>
</body>
</html>