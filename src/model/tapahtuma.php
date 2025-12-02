<?php

  require_once HELPERS_DIR . 'DB.php';

    function haeTapahtumat() {
    return DB::run('SELECT * FROM talkootyo ORDER BY tap_alkaa;')->fetchAll();
  }
    function haeTapahtuma($id) {
    return DB::run('SELECT * FROM talkootyo WHERE idtapahtuma = ?;',[$id])->fetch();
  }
    function lisaaTapahtuma($nimi,$kuvaus,$tap_alkaa,$tap_loppuu) {
    DB::run('INSERT INTO talkootyo (nimi, kuvaus, osallistujia, tap_alkaa, tap_loppuu) 
                    VALUE  (?,?,null,?,?);',[$nimi,$kuvaus,$tap_alkaa,$tap_loppuu]);
    return DB::lastInsertId();
    }
?>
