<section class="hero is-light is-fullheight">
  <nav class="breadcrumb is-centered" aria-label="breadcrumbs">
    <ul>
      <li><a href="?p=admin.dashboard.index">Dashboard</a></li>
      <li><a href="?p=admin.categories.index">Categories</a></li>
      <li class="is-active"><a href="#" aria-current="page">Ajouter</a></li>
    </ul>
  </nav>

  <div class="hero-body">
    <div class="container has-text-centered">
      <div class="column is-4 is-offset-4">
        <h3 class="title is-3 has-text-black">Modifier une cat&eacute;gorie</h3>
        <hr class="login-hr">
        <div class="box">
          <form method="post">
            <?= $form->input('libelle', 'Titre'); ?>
            <div class="buttons">
              <button type="submit" class="button is-block is-warning is-normal is-fullwidth"><i class="fas fa-edit"></i> Modifier</button>
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