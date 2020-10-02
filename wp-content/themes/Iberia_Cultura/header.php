<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Iberia Cultura</title>
  <?php wp_head() ?>
</head>

<body>
  <header class="header_iberia">
    <a href="<?php echo get_option('home'); ?>">
      <div class="head-iberia d-flex justify-content-start align-items-center">
        <img class="logo_iberia" src="<?= get_template_directory_uri() ?>/assets/images/Logo_Iberia.png" alt="logo-iberia">
        <h1 class="title-iberia">Iberia Cultura</h1>
      </div>
    </a>
    <nav class="nav-iberia navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php wp_nav_menu([
          'theme_location' => 'header',
          'container' => false,
          'menu_class' => 'navbar-nav mr-auto'
        ])
        ?>
        <?= get_search_form() ?>
      </div>
    </nav>
  </header>