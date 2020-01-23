<section class="hero is-light is-fullheight">
  <nav class="breadcrumb is-centered" aria-label="breadcrumbs">
    <ul>
      <li><a href="?p=admin.dashboard.index">Dashboard</a></li>
      <li><a href="?p=admin.personnels.index">Exp&eacute;riences</a></li>
      <li class="is-active"><a href="#" aria-current="page">Modifier</a></li>
    </ul>
  </nav>

  <div class="hero-body">
    <div class="container has-text-centered">
      <div class="column is-4 is-offset-4">
        <h3 class="title is-3 has-text-black">Modifier</h3>
        <hr class="login-hr">
        <div class="box">
          <form method="post">
            <?= utf8_decode($form->input('nbre_annee_exp', 'Nombre d\'année d\'expérience', ['type' => 'number'])); ?>
            <?= utf8_decode($form->select1('id_appartenir', 'Expérience liée à', $appartenir)); ?>
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