<div class="columns mt-2">
  <div class="column">
    <p class="subtitle is-5">Publisher</p>
    <p class="title is-3">
      <?= $publisher['name'] ?>
    </p>
    <div class="content">
      <?php if($publisher['url'] !== ''): ?>
        <p><span class="icon"><i class="fas fa-chevron-right"></i></span>&nbsp;<a href="<?= $publisher['url'] ?>" target="_blank">Visit Website</a></p>
      <?php endif; ?>
      <?php if(isset($publisher['about']) && $publisher['about'] !== ''): ?>
        <?= $publisher['about'] ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<?= view_cell('App\Controllers\Publishers::gamespublishedby', 'publisher_id='.$publisher['id']) ?>
