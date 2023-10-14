<!-- create_paie.php -->

<h1>Créer une fiche de paie</h1>

<form action="store2" method="post">
    <label for="employe_id">Employé :</label>
    <select name="employe_id" id="employe_id">
        <?php foreach ($employes as $employe) : ?>
            <option value="<?= $employe['id'] ?>"><?= $employe['nom'] ?></option>
        <?php endforeach; ?>
    </select>

    <button type="submit">Créer</button>
</form>