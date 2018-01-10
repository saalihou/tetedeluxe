<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>	
	<title>Tete De Luxe</title>

</head>
<body>
  <nav class="navbar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('/')?>">Accueil</a>
      </li>
      <?php if (!$this->session->loggedIn): ?>
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('/authentication')?>">Connexion</a>
      </li>
      <?php endif; ?>
      <li class="nav-item">
        <a class="nav-link" href="#">Catalogue</a>
      </li>
    </ul>
    <?php if ($this->session->loggedIn): ?>
      <span class="navbar-text">
        <?php echo $this->session->email; ?>
        <a href="<?=site_url('authentication/logout')?>" class="btn btn-primary">
          Déconnexion
        </a>
      </span>
    <?php endif; ?>
  </nav>
  