<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Inscription Form</h1>
    <form action="/view_controller_result" method="POST" enctype="multipart/form-data">

        <label for="Title_Annoucement">Titre:</label>
        <input type="text" id="Title_Annoucement" name="Title_Annoucement" required><br>

        <label for="post_employe">Poste:</label>
        <input type="text" id="post_employe" name="post_employe" required><br>

        <label for="workname">Nom de la Societe:</label>
        <input type="text" id="workname" name="workname" required><br>

        <label for="descriptionSociete">Description du Societe:</label>
        <textarea id="descriptionSociete" name="descriptionSociete" rows="5" required></textarea><br>

        <label for="PublicationDate">Date de publication:</label>
        <input type="datetime-local" id="PublicationDate" name="PublicationDate" required><br>

        <label for="place">Lieu:</label>
        <input type="text" id="place" name="place" required><br>

        <label for="age">Âge:</label>
        <input type="number" id="age" name="age" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="5" required></textarea><br>

        <button>
            publier
        </button>
    </form>

</body>

</html>