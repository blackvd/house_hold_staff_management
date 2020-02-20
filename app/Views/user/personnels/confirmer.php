<section class="hero is-light is-fullheight">
  <div class="hero-body">
    <div class="container has-text-centered">
      <div class="column is-4 is-offset-4">
        <h3 class="title is-3 has-text-black">Confirmer</h3>
        <hr class="login-hr">
        <div class="box">
          <form method="post">
            <p>Vous aurez a payer la somme si apr&egrave;</p>
            <hr>
            <div class="field">
              <label class="label">Co&ucirc;t de la r&eacute;servation</label>
              <div class="control">
                <input type="text" name="cout_reservation" class="input" value="" disabled>
              </div>
            </div>
            <div class="buttons">
              <button type="submit" class="button is-block is-success is-normal is-fullwidth"><i class="fas fa-check"></i> Valider</button>
            </div>
          </form>
            <div class="buttons">
              <button type="submit" class="button is-block is-danger is-normal is-fullwidth"><i class="fas fa-times"></i> Annuler</button>
            </div>
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