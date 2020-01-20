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
            <?= $form->select('sexe', 'Sexe', ['CNI', 'Attestion d\'identité', 'Passeport', 'Autre']); ?>
            <?= $form->input('', 'Contact', ['type' => 'tel']) ?>
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