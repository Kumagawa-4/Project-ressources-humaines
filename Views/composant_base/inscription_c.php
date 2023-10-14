
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inscription</h1>
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
    <form action="./submit" method="POST" enctype="multipart/form-data">      <div class="row">
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
                <label for="nom_entreprise">Entreprise name</label>
                <input type="text" id="nom_entreprise" name="nom_entreprise" class="form-control">              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
              </div>
              <div class="form-group">
                <label for="adresse">Adresse de l'entreprise</label>
                <input id="adresse" name="adresse" class="form-control" rows="4"></input>
              </div>
              <div class="form-group">
                <label for="telephone">Tel</label>
                <input type="text" id="telephone" name="telephone" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">

              <label for="image">Logo :</label>
              <input type="file" name="image" id="image" accept="image/*" required>
              </div>

              <input type="submit" value="Inscription" class="btn btn-success float-right">

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    
          <!-- /.card -->
        </div>
      </div>
    </section>
    </form>>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
