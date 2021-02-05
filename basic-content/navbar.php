<?php
$content = (isset($_GET['content']) ? $_GET['content'] : false); 
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="./img/pixelart.jpg" alt="" width="30" height="24">
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link active <?php if ($content == 'home') echo 'active' ?>" aria-current="page" href="index.php?content=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($content == 'home') echo 'active' ?>" href="index.php?content=boeken">Boeken</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?content=lenen">lenen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?content=administratie">administratie</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            adminpage
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">boeken toevoegen</a></li>
            <li><a class="dropdown-item" href="#">boeken verwijderen</a></li>
            <li><a class="dropdown-item" href="#">mijn info</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active <?php if ($content == 'login') echo 'active' ?>" aria-current="page" href="index.php?content=login">login</a>
          <li class="nav-item">
          <a class="nav-link active <?php if ($content == 'register') echo 'active' ?>" aria-current="page" href="index.php?content=register">register</a>
        </li>
        </li>
      </ul>
      
    </div>
  </div>
</nav>