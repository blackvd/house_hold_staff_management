<h1>Liste du personnel</h1>

<div class="columns">
  <?php foreach ($personnels as $personnel): ?>
    <div class="column">
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
      </div>
    </div>
  <?php endforeach; ?>
</div>