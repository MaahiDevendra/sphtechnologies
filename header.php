<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="discription"
      content="<?php echo $discription; ?>"
    />
    <meta
      name="keyword"
      content="<?php echo $keywords; ?>"
    />
    <meta name="author" content="MaahiDevendra">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo($title);?></title>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito&family=Raleway&family=Russo+One&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style/css/style.css" />
    <link rel="icon" href="assets/logo.svg" type="image/gif" sizes="16x16" />
  </head>
  <body>
    <div id="preloder">
      <div class="loader">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <?php if ($currentPage != 'services') {
      echo '<div class="wrapper">';
    } else {
      echo '<div class="services-wrapper">';
    }?>
      <header class="header animate__animated animate__fadeInDown">
        <div class="nav-bar">
          <a href="index.html"
            ><picture>
              <source
                media="(max-width: 934px)"
                srcset="assets/logo-text.png"
              />
              <source
                media="(min-width: 935px)"
                srcset="assets/logo-text.svg"
              />
              <img src="assets/logo-text.svg" alt="logo:sph technologies" />
            </picture>
          </a>
          <a href="javascript:void(0);" class="bar-icon" onclick="myFunction()">
            <img src="assets/menu.svg" alt="Menu icon" id="menu-icon" />
          </a>
        </div>
        <nav>
          <ul class="navigation-links" id="myLinks">
            <a href="<?php if ($currentPage == 'index') echo '#'; else echo 'index.php' ?>"
              <?php if ($currentPage != 'index') echo 'class="nav-links"'; ?>
            >
            <li
                <?php
                if ($currentPage == 'index') echo 'class="active"';
                ?>
              >Home
            </li>
            </a>

            <a href="<?php if ($currentPage == 'services') echo '#'; else echo 'services.php' ?>"
              <?php if ($currentPage != 'services') echo 'class="nav-links"'; ?>
            >
            <li 
                <?php
                if ($currentPage == 'services') { echo 'class="active"';}
                ?>
              >Services
            </li>
            </a>

            <a href="<?php if ($currentPage == 'whychooseus') echo '#'; else echo 'whychooseus.php' ?>"
              <?php if ($currentPage != 'whychooseus') echo 'class="nav-links"'; ?>
            >
            <li
                <?php
                if ($currentPage == 'whychooseus') { echo 'class="active"';}
                ?>
              >Why Choose Us
            </li>
            </a>
            
            <a href="<?php if ($currentPage == 'aboutus') echo '#'; else echo 'aboutus.php' ?>"
              <?php if ($currentPage != 'aboutus') echo 'class="nav-links"'; ?>
            >
            <li
                <?php
                if ($currentPage == 'aboutus') { echo 'class="active"';}
                ?>
              >About Us
            </li>
            </a>

            <a href="<?php if ($currentPage == 'contactus') echo '#'; else echo 'contactus.php' ?>"
              <?php if ($currentPage != 'contactus') echo 'class="nav-links"'; ?>
            >
            <li
                <?php
                if ($currentPage == 'contactus') { echo 'class="active"';}
                ?>
              >Contact Us
            </li>
            </a>
          </ul>
        </nav>
      </header>