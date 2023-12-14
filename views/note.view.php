  <?php require_once("partials/head.php"); ?>
  <?php require_once("partials/nav.php"); ?>
  <?php require_once("partials/banner.php"); ?>
  
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <a class="text-blue-500 hover:underline" href="./notes">Back to notes...</a>
        <article class="mt-4">  
          <?=$note['body']?>
        </article>
      
    </div>
  </main>

  <?php require_once("partials/footer.php"); ?>