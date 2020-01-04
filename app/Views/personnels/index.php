<h1 class="title is-1">Liste du personnel</h1>

<div class="tabs is-centered">
  <ul>
    <li class="is-active"><a>Toutes les catégories</a></li>
    <?php foreach ($categories as $categorie): ?>
      <li><a href="<?= $categorie->url; ?>"><?= $categorie->libelle; ?></a></li>
    <?php endforeach; ?>
  </ul>
</div>

<div class="columns">
  <?php foreach ($personnels as $personnel): ?>
    <div class="column is-2">
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
              <p class="title is-4"><?= $personnel->nom ?></p>
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
                <p class="modal-card-title">Avertissement</p>
                <button class="delete" aria-label="close" onclick="deactivateModal()">
                  ::before
                  ::after
                </button>
              </header>
              <section class="modal-card-body">Veuillez-vous connecter !!!</section>
              <footer class="modal-card-foot">
                <a href="#" class="button is-success">Se connecter</a>
                <button class="button" onclick="deactivateModal()">Annuler</button>
              </footer>
            </div>
          </div>
        </footer>
      </div>
    </div>
  <?php endforeach; ?>
</div>
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