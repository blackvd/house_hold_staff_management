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
      <li class="is-active"><a href="#" aria-current="page">Client</a></li>
    </ul>
  </nav>

  <div class="card">
    <div class="card-header"><i class="fas fa-database"></i> Client</div>
    <div class="card-body">
      <table class="table is-narrow is-hoverable is-fullwidth">
        <thead>
          <tr>
            <th>No client</th>
            <th>Nom</th>
            <th>Pr&eacute;noms</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Lieu d'habitation</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($clients as $client): ?>
            <tr>
              <td><?= $client->no_client; ?></td>
              <td><?= $client->nom; ?></td>
              <td><?= $client->prenoms; ?></td>
              <td><?= $client->contact; ?></td>
              <td><?= $client->email; ?></td>
              <td><?= utf8_decode($client->lieu_habitation); ?></td>
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