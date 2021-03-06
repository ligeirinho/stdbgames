<div class="columns">
  <div class="column">
    <p class="subtitle is-5">Game</p>
    <p class="title is-3">Chart</p>
  </div>
</div>
<div class="columns is-multiline">
  <?php foreach($chart as $chart): ?>
    <div class="column is-12">
      <div class="media">
        <figure class="media-left">
            <img class="image is-64x64" src="<?= base_url() ?>/images/<?= $chart['game_image'] ?>-thumb.jpeg" title="<?= $chart['game_name'] ?>" alt="<?= $chart['game_name'] ?>">
        </figure>
        <div class="media-content">
          <p><a href="<?= base_url() ?>/game/<?= $chart['game_slug'] ?>"><?= character_limiter($chart['game_name'], 15, '...') ?></a></p>
          <p class="title is-7">Developer <?= $chart['developer_name'] ?> Publisher <?= $chart['publisher_name'] ?></p>
        </div>
        <div class="media-right">
          <figure class="image is-64x64 has-text-centered <?php if($chart['score'] > 9): ?>has-background-primary<?php elseif($chart['score'] > 5): ?>has-background-warning<?php elseif($chart['score'] > 3): ?>has-background-link has-text-color-white<?php else: ?>has-background-danger has-text-white<?php endif; ?>">
          <br><p class="title is-5"><strong><?= round($chart['score']) ?></strong></p>
          </figure>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
