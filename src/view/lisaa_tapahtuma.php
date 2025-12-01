<?php $this->layout('template', ['title' => 'Tapahtuman lisäys']) ?>

<h1>Tapahtuman lisäys</h1>

<form action="" method="POST">
  <div>
    <label for="nimi">Tapahtuman nimi:</label>
    <input id="nimi" type="text" name="nimi">
  </div>
  <div>
    <label for="kuvaus">Tapahtuman kuvaus:</label>
    <input type="text" name="kuvaus">
  </div>
  <div>
    <label for="alkaa">Alkamis päivä::</label>
    <input type="date" name="tap_alkaa">
   
  </div>
  <div>
    <label for="loppuu">Loppumis päivä::</label>
    <input type="date" name="tap_loppuu">
     
  </div>
  <div>
    <input type="submit" name="laheta" value="Tapahtuman lisäys">
  </div>
</form>