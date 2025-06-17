<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require('partials/banner.php'); ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Notes content -->
       <p class="mb-6"> 
        <a href="/websites/demo/notes.php" class="text-blue-500 underline">
            go back ...
            </a>
        </p>
            <?= $note['body'] ?>
    </div>
  </main>

<?php require('partials/footer.php'); ?>