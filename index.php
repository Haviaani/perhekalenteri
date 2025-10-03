<?php

  require_once("globals.php");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Perhekalenteri</title>
  </head>
  <body>
    <header>
      <h1>Perhekalenteri</h1>
    </header>
    <section>

      <form class="form" action="kalenteri.php" method="GET" target="_blank">

      <div class="form_grid">
        <div class="form_left">Vuosi:</div> 
        <div class="form_right"><input type="number" name="year" value="<?php echo date("Y"); ?>"></div>

        <div class="form_left">Kuukausi:</div>
        <div class="form_right"><select name="month">
        <?php
          foreach($months as $key => $value) {
            echo "<option value='$key'>$value</option>\n";
          }
        ?>
        </select></div>

        <div class="form_left">Otsikkofontti:</div>
        <div class="form_right"><select name="header">
        <?php
          foreach($headerfonts as $key => $value) {
            echo "<option value='$key'>$value[name]</option>\n";
          }
        ?>
        </select></div>

        <div class="form_left">Kuva:</div>
        <div class="form_right"><select name="bgimage">
        <?php
          foreach ($bgimages as $key => $value) {
            echo "<option value='$key'>$value[name]</option>\n";
          }
        ?>
        </select></div>

        <div class="form_left">Perheenjäsenet:</div>
        <div class="form_right"><textarea name="names" rows="5"><?= $defaultnames ?></textarea></div>
      </div>
      
        <div class="form_button"><input type="submit" value="Avaa kalenterisivu"></div>

      </form>
    </section>
    <footer>
      <hr>
      <div>perhekalenteri by Haviaani</div>
    </footer>
  </body>
</html>
