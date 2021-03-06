<div class="container">
  <section class="section">
    <div class="content">
      <?php if(isset($error)): ?>
        <p><?= $error ?></p>
      <?php else: ?>
        <p class="subtitle is-5">Update</p>
        <p class="title is-3">Publisher:</p>
        <form action="<?= base_url() ?>/publishers/updatepublisherdb" method="post">
          <input type="hidden" name="id" value="<?= $publisher['id'] ?>">
          <input type="hidden" name="slug" value="<?= $publisher['slug'] ?>">
          <div class="field">
            <div class="control is-expanded">
              <input type="text" class="input" name="name" value="<?= $publisher['name'] ?>">
            </div>
          </div>
          <div class="field">
            <div class="control is-expanded">
              <input type="text" class="input" name="url" value="<?= $publisher['url'] ?>">
            </div>
          </div>
          <div class="field">
            <div class="control is-expanded">
              <textarea class="textarea" id="textarea" name="about"><?= $publisher['about'] ?></textarea>
            </div>
          </div>
          <div class="field is-grouped is-grouped-multiline">
            <div class="control">
              <button class="button is-small is-primary has-text-dark" value="submit">Update Publisher!</button>
            </div>
            <div class="control">
              <button class="button is-small is-danger has-text-white" value="reset">Clear All!</button>
            </div>
          </div>
        </form>
      <?php endif; ?>
    </div>
  </section>
</div>
