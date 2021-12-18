<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $websiteLink = "SVCooler.com";
      $creatorName = "Aidan";
      echo "<h1>$websiteLink</h1>";
      echo "<hr>";
      echo "<p>This is the main SVCooler site. Consider donating today!</p>";
      echo "<p>This site was created by $creatorName</p>";
    ?>
    <?php include "GoFundMe.html" ?>
    <?php include "AboutMe.html" ?>
  </body>
</html>
