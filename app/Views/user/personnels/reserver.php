<section class="hero is-light is-fullheight">
  <div class="hero-body">
    <div class="container has-text-centered">
      <div class="column is-4 is-offset-4">
        <h3 class="title is-3 has-text-black">R&eacute;server</h3>
        <hr class="login-hr">
        <div class="box">
          <form method="post">
            <div class="columns">
              <div class="column">
                <?= $form->input('duree', 'Dur&eacute;e', ['type' => 'number']) ?>
              </div>
              <div class="column">
                <?= $form->select('tranche', 'En', ['Jours', 'Mois', 'Année']); ?>
              </div>
            </div>
            <hr>
            <div class="field">
              <label class="label">Client</label>
              <div class="control">
                <input type="text" name="client" class="input" value="<?= $client->nom.' '.$client->prenoms; ?>" disabled>
                <?= $form->inputSpe('id_client', '', $client->id, ['type' => 'hidden']) ?>
              </div>
            </div>
            <hr>
            <div class="field">
              <label class="label">Personnel</label>
              <div class="control">
                <input type="text" name="personnel" class="input" value="<?= $personnel->nom_complet; ?>" disabled>
                <?= $form->inputSpe('id_personnel', '', $personnel->id, ['type' => 'hidden']) ?>
              </div>
            </div>
            <?= utf8_decode($form->select1('id_categorie', 'Cat&eacute;gories', $categories)); ?>
            <div class="buttons">
              <button type="submit" class="button is-block is-success is-normal is-fullwidth"><i class="fas fa-check"></i> Valider</button>
            </div>
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