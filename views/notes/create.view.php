<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
  
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    
      <form method="post" action="<?= ROOT_URL .'notes'?>">
        <div class="space-y-12">

              <div class="col-span-full">
                <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                <div class="mt-2">
                  <textarea id="body" name="body" rows="5" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" ><?=$_POST['body'] ??'';?></textarea>

                  <?php
                    if (isset($errors['body'])) {
                      echo "<p class=\"text-red-600 mt-2 \">{$errors['body']}</p>";
                    }
                  ?>

                </div>
                <p class="mt-3 text-sm leading-6 text-gray-600">Write a note text.</p>
              </div>

              <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="submit" class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </form>


    </div>
  </main>

  <?php require base_path('views/partials/footer.php') ?>
