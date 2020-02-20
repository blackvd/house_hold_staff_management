<section class="hero is-light is-fullheight">
  <nav class="breadcrumb is-centered" aria-label="breadcrumbs">
    <ul>
      <li><a href="?p=admin.dashboard.index">Dashboard</a></li>
      <li><a href="?p=admin.personnels.index">Personnels</a></li>
      <li class="is-active"><a href="#" aria-current="page">Modifier</a></li>
    </ul>
  </nav>

  <div class="hero-body">
    <div class="container has-text-centered">
      <div class="column is-4 is-offset-4">
        <h3 class="title is-3 has-text-black">Modifier personnel</h3>
        <hr class="login-hr">
        <div class="box">
          <form method="post">
            <?= $form->input('nom', 'Nom'); ?>
            <?= $form->input('prenoms', 'Prenoms'); ?>
            <?= $form->select('sexe', 'Sexe', ['Feminin', 'Masculin']); ?>
            <?= $form->input('date_naiss', 'Date de naissance', ['type' => 'date']) ?>
            <?= $form->input('contact', 'Contact', ['type' => 'tel']) ?>
            <?= $form->select('type_piece', 'Type de pi&egrave;ce', ['CNI', 'Attestion d\'identit&eacute;', 'Passeport', 'Autre']); ?>
            <?= $form->input('piece_identite', 'Num&eacute;ro de la pi&egrave;ce'); ?>
            <?= utf8_decode($form->input('description', 'Description', ['type' => 'textarea'])); ?>
            <div class="buttons">
              <button type="submit" class="button is-block is-warning is-normal is-fullwidth"><i class="fas fa-edit"></i> Modifier</button>
            </div>
          </form>
          <hr>
          <a href="?p=admin.personnels.index" class="button is-block is-light is-normal is-fullwidth">Annuler</a>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
.login-hr{
  border: 1px solid black;
}
</style>