    <HTML>
    <head>
        <style>
          .navbar-brand
          {
            color: #FFF !important;
          }
          .navbar-brand span *
          {
            text-decoration: none !important;
            color: #e9e9e9 !important;
            transition: 0.2s ease all !important;
          }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php?P=home">Kérdőív</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a <?php if($_GET['P'] == "home"): echo "class='nav-link active'"; else: echo "class='nav-link'"; endif; ?> href="index.php?P=home">Kezdőlap</a>
      </li>
    <?php //if($_SESSION == NULL): ?>
      <li class="nav-item">
        <a <?php if($_GET['P'] == "login"): echo "class='nav-link active'"; else: echo "class='nav-link'"; endif; ?> href="index.php?P=login">Bejelentkezés</a>
      </li>
      <li class="nav-item">
        <a <?php if($_GET['P'] == "register"): echo "class='nav-link active'"; else: echo "class='nav-link'"; endif; ?> href="index.php?P=register">Regisztráció</a>
      </li>
      <?php //else: ?>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Témakörök
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a <?php if($_GET['P'] == "topics"): echo "class='dropdown-item active'"; else: echo "class='dropdown-item'"; endif; ?> href="#">Témakörök megtekintése</a>
          <a <?php if($_GET['P'] == "answerSurvey"): echo "class='dropdown-item active'"; else: echo "class='dropdown-item'"; endif; ?> href="#">Új témakör megválaszolása</a>
          <a <?php if($_GET['P'] == "completedSurveys"): echo "class='dropdown-item active'"; else: echo "class='dropdown-item'"; endif; ?> href="#">Kitöltött kérdőívek megjelenítése</a>
          <a <?php if($_GET['P'] == "averages"): echo "class='dropdown-item active'"; else: echo "class='dropdown-item'"; endif; ?> href="#">Átlagok</a>
        </div>
      </li>
      
      <?php
        if($_SESSION["permission"] == 1): ?>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          
          <a <?php if($_GET['P'] == "newSurveyUpload"): echo "class='dropdown-item active'"; else: echo "class='dropdown-item'"; endif; ?> href="#">Új kérdőív feltöltése</a>
          <a <?php if($_GET['P'] == "listUser"): echo "class='dropdown-item active'"; else: echo "class='dropdown-item'"; endif; ?> href="#">Felhasználók szerkesztése</a>
        </div>
      </li>
      <?php endif; ?>
      <li class="nav-item">
        <a <?php if($_GET['P'] == "editUser"): echo "class='nav-link active'"; else: echo "class='nav-link'"; endif; ?>  href="index.php?P=edit_user">Adataim</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?P=logout">Kijelentkezés</a>
      </li>
      <?php //endif; ?>
    </ul>
  </div>
</nav>
  
    </body>
</html>
        
    