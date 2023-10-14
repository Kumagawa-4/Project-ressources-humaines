
    <!-- Main content -->
    <section class="content">
    <div class="row">

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

        
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Demande de congée</h3>
            
              </div>
           
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-9">
            <div class="card card-primary card-outline">
            <div class="card-header">
            <h3 class="card-title">Quand ?__</h3>
            <p>Solde de congé : <?php echo $congee_cumul; ?></p>
          </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="congee_insert" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                Debut <input class="form-control" placeholder="To:" type="date" name="dateDebut" id="dateDebut">
                Fin <input class="form-control" placeholder="To:" type="date" name="dateFin"id="dateFin">
              </div>
            </div>
                <div class="card card-primary card-outline">
                <div class="card-header">
                <h3 class="card-title">Types ?</h3>
              </div>
              <div class="form-group">
        <label for="type-conge"></label>
        <select class="form-control" id="type-conge" name="type_conge_id">
            <option value="">Sélectionnez un type de congé</option>
            <?php foreach ($typesConges as $typeConge) : ?>
                <option value="<?= $typeConge['id'] ?>"><?= $typeConge['nom'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
             
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                <button type="reset" class="btn btn-default"><i class="fas fa-pencil-alt"></i>Ok</button>

                </div>
                <button type="button" class="btn btn-default"><i class="fas fa-times"></i>Annuler </button>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
    </section>
    <!-- /.content -->
  </div>

  

  <script>
  // Récupérer les éléments input pour les dates de début et de fin
  var dateDebutInput = document.getElementById("dateDebut");
  var dateFinInput = document.getElementById("dateFin");
  var congeeCumul = <?php echo $congee_cumul; ?>; // Récupérer la valeur du solde de congé

  // Écouter l'événement de changement pour la date de début
  dateDebutInput.addEventListener("change", function() {
    var dateDebut = new Date(dateDebutInput.value);
    var dateMin = new Date();
    dateMin.setDate(dateMin.getDate() + 15); // Ajouter 15 jours à la date d'aujourd'hui

    // Vérifier si la date de début est inférieure à la date minimale
    if (dateDebut < dateMin) {
      alert("La date de début de congé doit être supérieure de 15 jours à la date d'aujourd'hui.");
      dateDebutInput.value = ""; // Effacer la valeur de la date de début
    }
  });

  // Écouter l'événement de changement pour la date de fin
  dateFinInput.addEventListener("change", function() {
    var dateDebut = new Date(dateDebutInput.value);
    var dateFin = new Date(dateFinInput.value);
    var dureeConge = (dateFin - dateDebut) / (1000 * 60 * 60 * 24); // Calculer la durée du congé en jours

    // Vérifier si la durée du congé dépasse le solde de congé
    if (dureeConge > <?php echo $congee_cumul; ?>) {
      alert("La durée du congé ne peut pas dépasser le solde de congé.");
      dateFinInput.value = ""; // Effacer la valeur de la date de fin
    }
  });
</script>