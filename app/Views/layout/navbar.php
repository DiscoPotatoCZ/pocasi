<html>

<body>
  <?php
  $navbar = ["class" => "nav-link"];
  ?>
  <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Počasí</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
          <?= anchor("/", "Domů", $navbar); ?> 
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li>
            <?= anchor("carousel", "Carousel", $navbar); ?> 
          </li>
          <li class="nav-item">
            <?= anchor("tabulka", "Tabulka", $navbar); ?>
          </li>
          <li class="nav-item">
            <?= anchor("karty", "Karty", $navbar); ?>
          </li>
        </ul>
      </div>


    </div>

  </nav>


</body>

</html>