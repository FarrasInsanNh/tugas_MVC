<!DOCTYPE html>
<html>
<head>
	<title> <?= $data['judul'];?></title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>

	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="<?= BASEURL; ?>">Farras Insan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link " href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link " href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
      <a class="nav-item nav-link " href="<?= BASEURL; ?>/about">About</a>
    </div>
  </div>
  </div>
</nav>