<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yuri Cianci</title>
  <link rel="stylesheet" href="./styles.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
  <header>
    <nav>
      <div class="navbar left">
        <li>
          <a href="index.php?page=home">
            Yuri Fuzifaru Cianci
          </a>
        </li>
      </div>
      <div class="navbar right">
        <li>
          <a href="index.php?page=about">
            Sobre
          </a>
        </li>
        <li>
          <a href="index.php?page=hobbies">
            Hobbies
          </a>
        </li>
        <li>
          <a href="index.php?page=contact">
            Contato
          </a>
        </li>
        <li>
          <a href="index.php?page=curriculum">
            Currículo
          </a>
        </li>
      </div>
    </nav>
  </header>
  <main>
    <?php
    include "data.php";
    $page = $_GET["page"] ?? "home";
    $file = "pages/{$page}.php";
    if (file_exists($file)) {
      include($file);
    } else {
      include "pages/error.php";
    }
    ?>
  </main>
  <footer>
    <p>Development by
      <a href="https://www.instagram.com/yucianci/" target="_blank" rel="noreferrer">
        Yuri
      </a>
      🥶
    </p>
  </footer>
</body>

</html>