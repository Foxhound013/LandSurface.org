<!DOCTYPE html>
<html class="content-template">
  <?php include "resources/includes/head.php"; ?>
  <body>
    <header>
      <?php include "resources/includes/navigation.php" ?>
    </header>
    <div class="row">
      <div class="col span-3-of-4 content-page-text">
        <?php if ($_GET['pageid']=='about') {
            include "resources/includes/content-txt-files/about.txt";
          }
          elseif ($_GET['pageid']=='news-and-highlights') {
            include "resources/includes/content-txt-files/news-and-highlights.txt";
          }
        ?>
      </div>

      <div class="col span-1-of-4 extended-nav-container secondary-side-nav-container">
        <?php include "resources/includes/side-nav-container-items.php" ?>
      </div>

    </div>



    <?php include "resources/includes/footer.php" ?>
  </body>
</html>
