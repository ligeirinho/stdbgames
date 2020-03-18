<section class="section">
  <div class="container">
    <div class="columns">
      <div class="column">
        <p class="title is-4"><span class="icon has-text-primary"><i class="fas fa-gamepad"></i></span> The Free Ones</p>
      </div>
    </div>
    <?php if (!isset ($founders)): ?>
    <div class="columns">
      <div class="column has-text-centered">
        <p class=" button is-size-5 is-light"><?= $founders ?></p>
      </div>
    </div>
    <?php endif; ?>

    <div class="columns is-multiline">
    <?php foreach ($founders as $founders): ?>
      <div class="column is-one-quarter">
        <div class="media">
          <figure class="media-left">
            <p class="image is-64x64">
              <img src="<?= base_url() ?>/images/<?= $founders['gImage'] ?>-thumb">
            </p>
          </figure>
          <div class="media-content">
            <p class="title is-5"><a href="<?= base_url() ?>/games/game/<?= $founders['gSlug'] ?>"><?= character_limiter($founders['gName'], 15, '...') ?></a></p>
            <p class="subtitle is-7"><?= $founders['dName'] ?> / <?= $founders['pName'] ?>
            <br>
            <?= $founders['gRelease'] ?>
            </p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
</section>
