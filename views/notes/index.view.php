<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
  
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
     
      <ul>
        <?php foreach ($notes as $note) : ?>
          <li>
            <a href=<?= ROOT_URL . "note?id=$note[id]"?> class="text-blue-500 hover:underline">
              <?=htmlspecialchars($note['body'])?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>

      <p class="mt-4">
        <a href="<?= ROOT_URL .'note/create'?>" class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Note</a>
      </p>

    </div>
  </main>

  <?php require base_path('views/partials/footer.php') ?>