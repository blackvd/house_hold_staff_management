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
      <li class="is-active"><a href="#" aria-current="page">Appatenir</a></li>
    </ul>
  </nav>

  <div class="card">
    <div class="card-header">Appartenir</div>
    <div class="card-body">
      <table class="table is-narrow is-hoverable is-fullwidth">
        <thead>
          <tr>
            <th>No identifieur</th>
            <th>Nom & Pr&eacute;noms</th>
            <th>Cat&eacute;gorie</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($appartenir as $appartient): ?>
            <tr>
              <td><?= $appartient->no_appartenir ?></td>
              <td><?= $appartient->nom . " " . $appartient->prenoms; ?></td>
              <td><?= $appartient->libelle; ?></td>
              <td>
                <a href="#" class="button is-info is-outlined"><i class="fas fa-eye"></i></a>
                <a href="?p=admin.appartenir.edit&id=<?= $appartient->id; ?>" class="button is-warning is-outlined"><i class="fas fa-edit"></i></a>
                <form action="?p=admin.appartenir.delete" method="post" style="display: inline;">
                  <input type="hidden" name="id" value="<?= $appartient->id; ?>">
                  <button type="submit" href="?p=admin.appartenir.delete&id=<?= $appartient->id; ?>" class="button is-danger is-outlined"><i class="fas fa-trash"></i></button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="card-footer">
      <a href="?p=admin.appartenir.create" class="button is-primary is-outlined" style="margin: auto"><i class="fas fa-plus"></i> Ajouter</a>
    </div>
  </div>
</section>