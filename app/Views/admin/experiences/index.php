<nav class="navbar is-light" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="?p=admin.dashboard.index">Gestion de placement</a>
    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary" href="index.php?p=administrateurs.signout">
            <strong>D&eacute;connexion</strong>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

<section>
  <nav class="breadcrumb is-centered" aria-label="breadcrumbs">
    <ul>
      <li><a href="?p=admin.dashboard.index">Dashboard</a></li>
      <li class="is-active"><a href="#" aria-current="page">Exp&eacute;riences</a></li>
    </ul>
  </nav>

  <div class="card">
    <div class="card-header"><h5 class="title is-5">Exp&eacute;riences</h5></div>
    <div class="card-body">
      <table class="table is-narrow is-hoverable is-fullwidth">
        <thead>
          <tr>
            <th>Nombre d'ann&eacute;e experience</th>
            <th>Nom et Pr&eacute;nom</th>
            <th>Cat&eacute;gorie</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($experiences as $experience): ?>
            <tr>
              <td><?= $experience->nbre_annee_exp . " ans"; ?></td>
              <td><?= $experience->nom . " " . $experience->prenoms; ?></td>
              <td><?= $experience->libelle; ?></td>
              <td>
                <a href="#" class="button is-info is-outlined"><i class="fas fa-eye"></i></a>
                <a href="?p=admin.experiences.edit&id=<?= $experience->id; ?>" class="button is-warning is-outlined"><i class="fas fa-edit"></i></a>
                <a href="#" class="button is-danger is-outlined"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="card-footer">
      <a href="?p=admin.experiences.create" class="button is-primary is-outlined" style="margin: auto"><i class="fas fa-plus"></i> Ajouter</a>
    </div>
  </div>
</section>