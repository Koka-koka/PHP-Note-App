<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
  
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <a class="text-blue-500 hover:underline" href="./notes">Back to notes...</a>
        <article class="mt-4 mb-2">  
          <?= htmlspecialchars($note['body']) ?>
        </article>

        <form class="mt-4" method="post">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="id" value="<?=$note['id']?>">
          <button class="text-red-500 ">Delete note</button>
        </form> 
    </div>
  </main>

  <?php require base_path('views/partials/footer.php') ?>