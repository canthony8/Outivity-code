<div class="couleur-deux">
    <?php
    /* Template Name: PageCompte */ 
    get_header(); ?> 
<br>
<br>
<div class="titrecompte">
<h1>Mon compte</h1>
</div>

<form method="post" name="myForm" class="d-flex flex-column justify-content-center align-items-center vh-100">
<div class="mb-3">
    <label for="lastName" class="form-label">Nom</label>
    <input type="text" class="form-control" id="lastName" name="lastName">
  </div>

  <div class="mb-3">
    <label for="firstName" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="firstName" name="firstName">
  </div>

  <div class="mb-3">
    <label for="dob" class="form-label">Date de naissance</label>
    <input type="date" class="form-control" id="dob" name="dob">
  </div>

  <div class="mb-3">
    <label class="form-label">Sexe</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="male" value="male">
      <label class="form-check-label" for="male">
        Homme
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="female" value="female">
      <label class="form-check-label" for="female">
        Femme
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="other" value="other">
      <label class="form-check-label" for="other">
        Autres
      </label>
    </div>
  </div>
  
  <div class="mb-3">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>

  
  <div class="mb-3">
    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>

  <button type="button" class="btn btn-dark-six">Enregistrer</button>

</form>

</div>
<?php get_footer();?>
</div>