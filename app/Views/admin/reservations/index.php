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
            <th>&Eacute;tat de la r&eacute;servation</th>
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
                <?= $reservation->etat; ?>
              </td>
              <td>
                <a href="#" class="button is-info is-outlined"><i class="fas fa-eye"></i></a>
                <form action="?p=admin.reservation.validate" method="post">
                  <div class="field">
                    <input id="etat" type="checkbox" name="etat" class="switch is-rounded is-success" checked="<?= $reservation->etat === true ? 'checked' : ''  ?>">
                    <label for="name">Confirmer la réservation</label></label>
                    <button type="submit" href="?p=admin.reservations.validate&id=<?= $reservation->id; ?>" class="button is-warning is-outlined"><i class="fas fa-send"></i></button>
                  </div>
                </form>
                <a href="#" class="button is-danger is-outlined"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>