<section class="hero is-light is-fullheight">
  <div class="hero-body">
    <div class="container has-text-centered">
      <div class="column is-4 is-offset-4">
        <h3 class="title has-text-black">Se connecter</h3>
        <hr class="login-hr">
        <div class="box">
          <figure class="avatar">
              <img src="https://placehold.it/128x128">
          </figure>
          <form method="post">
            <?= $form->input('no_client', 'Numero indentifiant client'); ?>
            <?= $form->input('nom', 'Nom'); ?>
            <div class="buttons">
              <button type="submit" class="button is-block is-primary is-normal is-fullwidth">Connexion</button>
            </div>
            <div>
              <a href="index.php?p=clients.signup" class="is-link">Pas encore de compte ?</a>
            </div>
            <a href="index.php" class="is-link">Retour</a>
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
  .box{
    margin-top: 5rem;
  }
  .avatar{
    margin-top: -70px;
    padding-bottom: 20px;
  }
  .avatar img {
    padding: 5px;
    background: #fff;
    border-radius: 50%;
    -webkit-box-shadow: 0 2px 3px rgba(10,10,10,.1), 0 0 0 1px rgba(10,10,10,.1);
    box-shadow: 0 2px 3px rgba(10,10,10,.1), 0 0 0 1px rgba(10,10,10,.1);
  }
</style>