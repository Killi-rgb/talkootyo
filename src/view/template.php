<!DOCTYPE html>
<html lang="fi">
  <head>
    <title>Talkootyö - <?=$this->e($title)?></title>
    <meta charset="UTF-8">
    <link href="<?=BASEURL?>/styles/styles.css" rel="stylesheet">  
  </head>
  <body>
    <header>
      <h1><a href="<?=BASEURL?>">Talkootyöt</a></h1>
          <header>
       
      <div class="profile">
        <?php
          if (isset($_SESSION['user'])) {
            echo "<div>$_SESSION[user]</div>";
            echo "<div><a href='logout'>Kirjaudu ulos</a></div>";
            if (isset($_SESSION['admin']) && $_SESSION['admin']) {
              echo "<div><a href='admin'>Ylläpitosivut</a></div>";  
            }
          } else {
            echo "<div><a href='kirjaudu'>Kirjaudu</a></div>";
          }
        ?>
      </div>
    </header>

    </header>
    <section>
      <?=$this->section('content')?>
    </section>
    <footer>
      <hr>
      <div>Talkootyöt by Killi</div>
    </footer>
  </body>
</html>
