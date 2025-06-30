<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require('partials/banner.php'); ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Notes content -->
      <ul>
         <?php foreach ($notes as $note)  : ?>
            <li>
                <a href="/websites/demo/note.php?id=<?php echo $note['id'] ?>" class="text-blue-500 hover:underline">
                    <?= $note['body'] ?>
                </a>
            </li>
       <?php endforeach; ?>
      </ul>
          <p class="mt-6 text-blue-500 hover:underline">
            <a href="/websites/demo/note-create.php">Create a Note</a>
          </p>
    </div>
  </main>

<?php require('partials/footer.php'); ?>