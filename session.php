<?php include "menu.php"; ?>
<h2>Session</h2>
<p>
  Sessionin avulla voidaan luoda muttujia, joihin pääsee käsiksi kaikista php-tiedostoista
</p>
<p>
  Sessio luodaan kutsumalla funktiota sesion_start().
  Sessio tuhotaan kutsumalla funktiota session_destroy().
</p>
<p>
  Ennenkuin session_destroy funktiota voi kutsua, pitää kutsua funktiota session_start.
</p>
<p>
  Sessio-muuttujat luodaan taulukkoon nimeltä $_SESSION.
</p>
<?php
  sesion_start();
  if(isset($_SESSION['logged_in'])) {
    echo '<p>Tervetuloa '.$_SESSION['username'].'</p>';
  }
  else {
    echo '<p>Tervetuloa Vieras</p>';
  }
?>
<?php include "footer.php"; ?>
