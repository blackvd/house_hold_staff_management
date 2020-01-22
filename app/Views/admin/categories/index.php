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
      <li class="is-active"><a href="#" aria-current="page">Categories</a></li>
    </ul>
  </nav>

  <div class="card">
    <div class="card-header">Cat&eacute;gories</div>
    <div class="card-body">
      <table class="table is-narrow is-hoverable is-fullwidth">
        <thead>
          <tr>
            <th>Libell&eacute;</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($categories as $categorie): ?>
            <tr>
              <td>
                <?= utf8_decode($categorie->libelle); ?>
              </td>
              <td>
                <a href="#" class="button is-info is-outlined"><i class="fas fa-eye"></i></a>
                <a href="?p=admin.categories.edit&id=<?= $categorie->id; ?>" class="button is-warning is-outlined"><i class="fas fa-edit"></i></a>
                <form action="?p=admin.categories.delete" method="post" style="display: inline;">
                  <input type="hidden" name="id" value="<?= $categorie->id; ?>">
                  <button type="submit" href="?p=admin.categories.delete&id=<?= $categorie->id; ?>" class="button is-danger is-outlined"><i class="fas fa-trash"></i></button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="card-footer">
      <a href="?p=admin.categories.create" class="button is-primary is-outlined" style="margin: auto"><i class="fas fa-plus"></i> Ajouter</a>
    </div>
  </div>
</section>