
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Demande d'emploier</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Entreprise</a></li>
              <li class="breadcrumb-item active">Besoin Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="/demande" method="POST" id="insert_demande">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputNam">Entreprise name</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescriptio">Description du poste</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatu">Niveau chercher</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>License</option>
                  <option>Master</option>
                  <option>Doctorat</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Nombre d'emploie actuelle</label>
                <input type="text" id="nb_empoier" name="nb_empoier" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Volume de travail actuelle</label>
                <input type="text" id="vl_actuelle" class="form-control" name="vl_actuelle">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Volume de travail rechercher</label>
                <input type="text" id="vl_rechercher" class="form-control" name="vl_rechercher">

              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Budget</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Salaire minimum</label>
                <input type="number" id="saliare_mi" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Salaire maximal</label>
                <input type="number" id="salaire_ma" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Durée de l'annonce</label>
                <input type="number" id="durrée_annonce" class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="index0.php" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new Project" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    </form>
    <script src="../RB/js/insert_demande.js"></script>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
