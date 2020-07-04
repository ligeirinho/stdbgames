<div class="columns">
  <div class="column">
    <p class="subtitle is-5">Games</p>
    <p class="title is-3">
      <?php if($type == 'soon'): ?>
        Coming Soon:
      <?php elseif($type === 'launched'): ?>
        Launched:
      <?php elseif($type === 'firstonstadia'): ?>
        First On Stadia:
      <?php elseif($type === 'stadiaexclusive'): ?>
        Stadia Exclusive:
      <?php else: ?>
        All Games:
      <?php endif; ?>
    </p>
  </div>
</div>
<div class="columns">
  <div class="column is-fullwidth">
    <nav class="breadcrumb has-dot-separator is-centered">
      <ul>
        <li <?php if($type === 'all'): ?>class="is-active"<?php endif; ?>><a href="<?= base_url() ?>/list/all">All</a></li>
        <li <?php if($type === 'launched'): ?>class="is-active"<?php endif; ?>><a href="<?= base_url() ?>/list/launched">Launched</a></li>
        <li <?php if($type === 'soon'): ?>class="is-active"<?php endif; ?>><a href="<?= base_url() ?>/list/soon">Soon</a></li>
        <li <?php if($type === 'firstonstadia'): ?>class="is-active"<?php endif; ?>><a href="<?= base_url() ?>/list/firstonstadia">First On Stadia</a></li>
        <li <?php if($type === 'stadiaexclusive'): ?>class="is-active"<?php endif; ?>><a href="<?= base_url() ?>/list/stadiaexclusive">Stadia Exclusives</a></li>
      </ul>
    </nav>
    <hr>
  </div>
</div>
<div class="columns is-multiline">
  <?php foreach($list as $list): ?>
    <div class="column is-one-quarter">
      <div class="media">
        <figure class="media-left">
          <p class="image is-64x64">
            <img title="<?= $list['name'] ?>" src="<?= base_url() ?>/images/<?= $list['image'] ?>-thumb.jpeg">
          </p>
        </figure>
        <div class="media-content">
          <p class="title is-5"><a href="<?= base_url() ?>/game/<?= $list['slug'] ?>"><?= character_limiter($list['name'], 15, '...') ?></a></p>
          <p class="subtitle is-7">Developer <?= $list['developer_name'] ?> / Publisher <?= $list['publisher_name'] ?><br>
            <?= $list['release'] ?></p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
