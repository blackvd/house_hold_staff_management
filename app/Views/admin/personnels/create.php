<section class="hero is-light is-fullheight">
  <div class="hero-body">
    <div class="container has-text-centered">
      <div class="column is-4 is-offset-4">
        <h3 class="title is-3 has-text-black">Ajouter personnel</h3>
        <hr class="login-hr">
        <div class="box">
          <form method="post">
            <?= $form->input('nom', 'Nom'); ?>
            <?= $form->input('prenoms', 'Prenoms'); ?>
            <?= $form->select('sexe', 'Sexe', ['Feminin', 'Masculin']); ?>
            <?= $form->input('date_naiss', 'Date de naissance', ['type' => 'date']) ?>
            <?= $form->input('contact', 'Contact', ['type' => 'tel']) ?>
            <?= $form->select('type_piece', 'Type de pi&egrave;ce', ['CNI', 'Attestion d\'identité', 'Passeport', 'Autre']); ?>
            <?= $form->input('piece_identite', 'Num&eacute;ro de la pi&egrave;ce'); ?>
            <?= $form->input('description', 'Description', ['type' => 'textarea']); ?>
          </form>
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