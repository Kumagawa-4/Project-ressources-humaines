<!-- create.php -->

<h1>Ajouter une activité</h1>

<form action="store" method="post">
    <label for="employe_id">Employé :</label>
    <select name="employe_id" id="employe_id">
        <?php foreach ($employes as $employe) : ?>
            <option value="<?= $employe['id'] ?>"><?= $employe['nom'] ?></option>
        <?php endforeach; ?>
    </select>

    <label for="designation">Désignation :</label>
    <input type="text" name="designation" id="designation">

    <label for="montant">Montant :</label>
    <input type="number" step="0.01" name="montant" id="montant">
 
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="number" name="nombre" id="nombre" class="form-control">
    </div>

    <div class="form-group">
        <label for="taux">Taux:</label>
        <input type="number" name="taux" id="taux" class="form-control">
    </div>
    <button type="submit">Ajouter</button>
</form>