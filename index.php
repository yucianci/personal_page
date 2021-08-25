<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yuri F. Cianci</title>
  <link rel="stylesheet" href="./styles.css">
  <link rel="shortcut icon" href="./assets/favicon.jpg" type="image/x-icon">
</head>

<body>
  <header>
    <nav>
      <ul>
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
      </ul>
    </nav>
  </header>
  <main>
    <?php
    include "data.php";
    $page = $_GET["page"] ?? "about";
    $file = "pages/{$page}.php";
    if (file_exists($file)) {
      include($file);
    } else {
      include "pages/error.php";
    }
    ?>
  </main>
  <footer>
    <p>Desenvolvido por
      <a href="https://www.instagram.com/yucianci/" target="_blank" rel="noreferrer">
        Yuri Cianci
      </a>
      🥶
    </p>
  </footer>
</body>

</html>