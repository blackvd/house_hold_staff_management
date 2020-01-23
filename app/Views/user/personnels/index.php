<nav class="navbar is-light" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="index.php">Gestion de placement</a>
    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="index.php">
        Accueil
      </a>
      <a class="navbar-item" href="?p=personnels.index">
        Personnels
      </a>
    </div>
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary" href="index.php?p=clients.login">
            <strong>D&eacute;connexion</strong>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

<section class="section">
  <div class="container-fluid">

    <h1 class="title is-1">Liste du personnel</h1>

    <div class="columns">
      <div class="column is-2">
        <h1 class="title is-4">Cat&eacute;gories</h1>
        <div class="list is-hoverable">
          <a href="index.php?p=personnels.index" class="list-item">Toutes les cat&eacute;gories</a>
          <?php

use App\Controller\AppController;

foreach($categories as $categorie): ?>
            <a href="<?= $categorie->url; ?>" class="list-item"><?= $categorie->libelle; ?></a>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="column is-10">
      <div class="container">
        <div class="columns">
          <?php foreach ($personnels as $personnel): ?>
            <div class="column is-3">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-left">
                      <figure class="image is-48x48">
                        <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                      </figure>
                    </div>
                    <div class="media-content">
                      <p class="title is-4"><?= strtoupper($personnel->nom); ?></p>
                      <p class="subtitle is-6"><?= $personnel->prenoms ?></p>
                    </div>
                  </div>

                  <div class="content">
                    <?= $personnel->description; ?>
                  </div>
                </div>
                <footer class="card-footer">
                  <a href="#" id="modalLink" class="card-footer-item" data-toggle="modal" aria-haspopup="true" onclick="activeModal()">En savoir plus...</a>
                  
                  <div id="modal" class="modal">
                    <div class="modal-background"></div>
                    <div class="modal-card">
                      <header class="modal-card-head">
                        <p class="modal-card-title">En savoir plus</p>
                        <button class="delete" aria-label="close" onclick="deactivateModal()">
                          ::before
                          ::after
                        </button>
                      </header>
                      <section class="modal-card-body">
                        <div class="container has-text-centered">
                          <figure class="avatar">
                            <img src="https://placehold.it/128x128">
                          </figure>
                          <hr>
                          <h2 class="title is-2">Infos personnels</h2>
                          <div class="columns">
                            <div class="column"><p><strong>Nom : </strong></p></div>
                            <div class="column"><p><?= strtoupper($personnel->nom); ?></p></div>
                            <div class="column"><p><strong>Prenoms : </strong></p></div>
                            <div class="column"><p><?= $personnel->prenoms; ?></p></div>
                          </div>
                          <div class="columns">
                            <div class="column"><p><strong>Sexe : </strong></p></div>
                            <div class="column"><p><?= $personnel->sexe; ?></p></div>
                          </div>
                          <div class="columns">
                            <div class="column"><p><strong>Date de naissance : </strong></p></div>
                            <div class="column"><p><?= $personnel->date_naiss; ?></p></div>
                          </div>
                          <div class="columns">
                            <div class="column"><p><strong>Contact : </strong></p></div>
                            <div class="column"><?= $personnel->contact; ?></p></strong></div>
                          </div>
                          <div class="columns">
                            <div class="column"><p><strong>Type de pi&egrave;ce : </strong></p></div>
                            <div class="column"><p><?= $personnel->type_piece; ?></p></div>
                            <div class="column"><p><strong>Numero de pi&egrave;ce : </strong></p></div>
                            <div class="column"><p><?= $personnel->piece_identite; ?></p></div>
                          </div>
                          <hr>
                          <h2 class="title is-2">Infos professionnels</h2>
                          <?php foreach($experiences as $experience): ?>
                            <?php if(($experience->nom === $personnel->nom) AND ($experience->prenoms === $personnel->prenoms)):?>
                              <p>
                                <div class="columns">
                                <div class="column"><p><strong>Cat&eacute;gorie : </strong></p></div>
                                <div class="column"><p><?= $experience->libelle; ?></p></div>
                                <div class="column"><p><strong>Exp&eacute;rience : </strong></p></div>
                                <div class="column"><p><?= $experience->nbre_annee_exp; ?> ans</p></div>
                                </div>
                              </p>
                            <?php endif; ?>
                          <?php endforeach; ?>
                          <hr>
                          <h2 class="title is-2">Description</h2>
                          <p>
                            XXXXXXXXXXXXXXXXXX
                          </p>
                        </div>
                      </section>
                      <footer class="modal-card-foot">
                        <a href="index.php?p=user.personnels.reserver&id=<?= $personnel->id ?>" class="button is-success">R&eacute;server</a>
                        <button class="button" onclick="deactivateModal()">Annuler</button>
                      </footer>
                    </div>
                  </div>
                </footer>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        </div>
      </div>
      </div>
    </div>
</section>
<script>
  function activeModal(){
    var modal = document.getElementById('modal');
    modal.className += " is-active";
  }

  function deactivateModal(){
    var modal = document.getElementById('modal');
    modal.className = "modal";
  }
</script>