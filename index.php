<?php
include "header.php";
 $randomString = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$@!:;,&'-_())='"), 0, 1) .
 substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQ RSTUVWXYZ$@!:;,&'-_())='"), 0, 25);
 ?>

<div id="container">
<div class="col">
  <div class="col-md">
    <h2>GENERATED RANDOM PASSWORD:</h2>
  </div>
  <div class="col-md">
    <?php
    if (isset($_POST['generator'])) {
    echo $randomString;
  }
    ?>

  </div>
  <div class="col-md">
    <form class="" action="" method="post">
    <button type="submit" name="generator" class="btn">GENERATE!</button>
    </form>
  </div>
</div>
</div>
<?php
include "footer.php"
 ?>
