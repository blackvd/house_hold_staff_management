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
      <li class="is-active"><a href="#" aria-current="page">Reservations</a></li>
    </ul>
  </nav>

  <div class="card">
    <div class="card-header">Reservations</div>
    <div class="card-body">
      <table class="table is-narrow is-hoverable is-fullwidth">
        <thead>
          <tr>
            <th>No r&eacute;servation</th>
            <th>Co&ucirc;t</th>
            <th>Dur&eacute;e r&eacute;servation</th>
            <th>Nom client</th>
            <th>Cat&eacute;gorie</th>
            <th>Nom et Pr&eacute;nom du personnel</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($reservations as $reservation): ?>
            <tr>
              <td>
                <?= $reservation->no_reservation; ?>
              </td>
              <td>
                <?= $reservation->cout_reservation ." FCFA"; ?>
              </td>
              <td>
                <?= $reservation->duree; ?>
              </td>
              <td>
                <?= $reservation->nom_client; ?>
              </td>
              <td>
                <?= $reservation->categorie; ?>
              </td>
              <td>
                <?= $reservation->nom_personnel ." ". $reservation->prenoms_personnel; ?>
              </td>
              <td>
                <a href="#" class="button is-info is-outlined"><i class="fas fa-eye"></i></a>
                <a href="#" class="button is-warning is-outlined"><i class="fas fa-edit"></i></a>
                <a href="#" class="button is-danger is-outlined"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="card-footer">
      <a href="#" class="button is-primary is-outlined" style="margin: auto"><i class="fas fa-plus"></i> Ajouter</a>
    </div>
  </div>
</section>