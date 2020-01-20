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
  <div class="columns" style="padding-top: 15px;">
    <div class="column is-3 side">
      <div class="columns">
        <div class="column is-4">
          <figure class="image is-128x128">
            <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png" alt="Placeholder image">
          </figure>
        </div>
        <div class="column is-8" style="margin: auto;">
          <h5 class="title is-5">ADMIN NAME</h5>
          <small>log date</small>
        </div>
      </div>
      <hr>
      <h3 class="title is-3">MENU</h3>
      <hr>
      <h4 class="subtitle">TABLES</h4>
      <div class="list is-hoverable">
        <a href="?p=admin.personnels.index" class="list-item">Personnels</a>
        <a href="?p=admin.categories.index" class="list-item">Cat&eacute;gories</a>
        <a href="?p=admin.appartenir.index" class="list-item">Appartenir</a>
        <a href="?p=admin.experiences.index" class="list-item">Exp&eacute;riences</a>
        <a href="?p=admin.clients.index" class="list-item">Clients</a>
        <a href="?p=admin.reservations.index" class="list-item">R&eacute;servations</a>
      </div>
      <hr>
      <h4 class="subtitle">MESSAGES</h4>
      <div class="list is-hoverable">
        <a href="#" class="list-item">Nouvelle r&eacute;servation <span class="tag is-info">5</span></a>
      </div>
    </div>
    <div class="column is-9 main">
      <nav class="level">
        <div class="level-item has-text-centered">
          <div>
            <p class="heading">Personnels</p>
            <p class="title">3,456</p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <p class="heading">Clients</p>
            <p class="title">123</p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <p class="heading">R&eacute;servations</p>
            <p class="title">456K</p>
          </div>
        </div>
      </nav>

      <div class="notification is-info">
        <button class="delete"></button>
        Vous avez #nombreder&eacute;servation &agrave; confirmer veuillez <a href="#">cliquez ici</a> pour les confirmer.
      </div>

      <div class="columns">
        <div class="column is-6">
          <div class="card">
            <div class="card-header"><h5 class="title is-5">Personnels</h5></div>
            <div class="card-body">
              <table class="table is-narrow is-hoverable is-fullwidth">
                <thead>
                  <tr>
                    <th>Nom</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($personnels as $personnel): ?>
                    <tr>
                      <td><?= $personnel->nom; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="card-footer"><a href="?p=admin.personnels.index">Voir plus</a></div>
          </div>
        </div>
        
        <div class="column is-6">
          <div class="card">
            <div class="card-header"><h5 class="title is-5">Clients</h5></div>
            <div class="card-body">
              <table class="table is-narrow is-hoverable is-fullwidth">
              <thead>
                  <tr>
                    <th>Nom</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($clients as $client): ?>
                    <tr>
                      <td><?= $client->nom; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>


              </table>
            </div>
            <div class="card-footer"><a href="?p=admin.clients.index">Voir plus</a></div>
          </div>
        </div>
      </div>
      
      <div class="columns">
        <div class="column is-6">
          <div class="card">

            <div class="card-header"><h5 class="title is-5">Cat&eacute;gories</h5></div>
            <table class="table is-narrow is-hoverable is-fullwidth">
              <thead>
                  <tr>
                    <th>Libell&eacute;</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($categories as $categorie): ?>
                    <tr>
                      <td><?= $categorie->libelle; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>


              </table>
            <div class="card-footer"><a href="?p=admin.categories.index">Voir plus</a></div>
          </div>

        </div>
        
        <div class="column is-6">
          <div class="card">
            <div class="card-header"><h5 class="title is-5">R&eacute;servations</h5></div>
            <table class="table is-narrow is-hoverable is-fullwidth">
              <thead>
                  <tr>
                    <th>Co&ucirc;t</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($reservations as $reservation): ?>
                    <tr>
                      <td><?= $reservation->cout_reservation; ?> FCFA </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>


              </table>
            <div class="card-footer"><a href="?p=admin.reservations.index">Voir plus</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
