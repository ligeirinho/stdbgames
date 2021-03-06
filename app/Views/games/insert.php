<div class="container">
  <section class="section">
    <div class="content">
      <?php if(isset($error)): ?>
        <p><?= $error ?></p>
      <?php else: ?>
      <p class="subtitle is-5">Insert new</p>
      <p class="title is-3">Game:</p>
      <form method="post" action="<?= base_url() ?>/games/creategamedb" enctype="multipart/form-data">
        <div class="field">
          <div class="control">
            <label class="checkbox"><input type="checkbox" name="rumor">&nbsp;It's a Rumor?</label>
          </div>
        </div>
        <div class="field is-grouped is-grouped-multiline">
          <div class="control is-expanded">
            <input type="input" class="input" name="name" placeholder="Game's name">
          </div>
          <div class="control is-expanded">
            <input type="date" class="input" name="release" placeholder="Release Date: YYYY-MM-DD">
          </div>
          <div class="control is-expanded">
            <input type="text" class="input" name="price" placeholder="Release Price: €€.€€">
          </div>
        </div>
        <div class="field is-grouped is-grouped-multiline">
          <div class="control">
            <label class="label">Is First on Stadia?</label>
            <div class="select">
              <select name="first_on_stadia">
                <option value="0" selected>No</option>
                <option value="1">Yes</option>
              </select>
            </div>
          </div>
          <div class="control">
            <label class="label">Is Stadia Exclusive?</label>
            <div class="select">
              <select name="stadia_exclusive">
                <option value="0" selected>No</option>
                <option value="1">Yes</option>
              </select>
            </div>
          </div>
          <div class="control">
            <label class="label">Is Early Access?</label>
            <div class="select">
              <select name="early_access">
                <option value="0" selected>No</option>
                <option value="1">Yes</option>
              </select>
            </div>
          </div>
          <div class="control">
            <label class="label">Is Pro?</label>
            <div class="select">
              <select name="pro">
                <option value="0" selected>No</option>
                <option value="1">Yes</option>
              </select>
            </div>
          </div>
          <div class="control is-expanded">
            <label class="label">Is Pro From date</label>
            <input type="date" name="pro_from" class="input" placeholder="Is Free From: YYYY-MM-DD">
          </div>
          <div class="control is-expanded">
            <label class="label">Is Pro Till date</label>
            <input type="date" class="input" name="pro_till" placeholder="Is Free Till: YYYY-MM-DD">
          </div>
        </div>
        <div class="field is-grouped is-grouped-multiline">
          <div class="control is-expanded">
            <label class="label">Has CrossPlay</label>
            <div class="select">
              <select name="cross_play">
                <option value="0">No</option>
                <option value="1">Yes</option>
              </select>
            </div>
          </div>
          <div class="control is-expanded">
            <label class="label">Has CrossProgression</label>
            <div class="select">
              <select name="cross_progression">
                <option value="0">No</option>
                <option value="1">Yes</option>
              </select>
            </div>
          </div>
          <div class="control is-expanded">
            <label class="label">Has CrossSave</label>
            <div class="select">
              <select name="cross_save">
                <option value="0">No</option>
                <option value="1">Yes</option>
              </select>
            </div>
          </div>
          <div class="control is-expanded">
            <label class="label">Has StreamConnect</label>
            <div class="select">
              <select name="stream_connect">
                <option value="0">No</option>
                <option value="1">Yes</option>
              </select>
            </div>
          </div>
          <div class="control is-expanded">
            <label class="label">Has CrowdChoice</label>
            <div class="select">
              <select name="crowd_choice">
                <option value="0">No</option>
                <option value="1">Yes</option>
              </select>
            </div>
          </div>
          <div class="control is-expanded">
            <label class="label">Has CrowdPlay</label>
            <div class="select">
              <select name="crowd_play">
                <option value="0">No</option>
                <option value="1">Yes</option>
              </select>
            </div>
          </div>
          <div class="control is-expanded">
            <label class="label">Has StateShare</label>
            <div class="select">
              <select name="state_share">
                <option value="0">No</option>
                <option value="1">Yes</option>
              </select>
            </div>
          </div>
        </div>
        <div class="field is-grouped is-grouped-multiline">
          <div class="control">
            <label class="label">Is Pixel Count?</label>
            <div class="select">
              <select name="is_pxc">
                <option value="0" selected>No</option>
                <option value="1">Yes</option>
              </select>
            </div>
          </div>
          <div class="control">
            <label class="label">Max. Resolution</label>
            <div class="select">
              <select name="max_resolution">
                <option disabled selected>Choose Resolution:</option>
                <option value="3840x2160 (4K)">3840x2160 (4K)</option>
                <option value="3200x1800 (3.5K)">3200x1800 (3.5K)</option>
                <option value="2880x1620 (3K)">2880x1620 (3K)</option>
                <option value="2560x1440 (2K)">2560x1440 (2K)</option>
                <option value="1920x1080 (FHD)">1920x1080 (FHD)</option>
                <option value="1280x720 (HD)">1280x720 (HD)</option>
              </select>
            </div>
          </div>
          <div class="control">
            <label class="label">FPS</label>
            <div class="select">
              <select name="fps">
                <option disabled selected>Choose FPS</option>
                <option value="120">120</option>
                <option value="60">60</option>
                <option value="30">30</option>
              </select>
            </div>
          </div>
          <div class="control">
            <label class="label">Is HDR or SDR?</label>
            <div class="select">
              <select name="hdr_sdr">
                <option disabled selected>Choose:</option>
                <option value="sdr">SDR</option>
                <option value="hdr">HDR</option>
              </select>
            </div>
          </div>
        </div>
        <div class="field is-grouped is-grouped-multiline">
          <div class="control is-expanded">
            <input type="text" class="input" name="appid" placeholder="Google's Game AppId">
          </div>
          <div class="control is-expanded">
            <input type="text" class="input" name="sku" placeholder="Google's Game Sku">
          </div>
          <?= view_cell('App\Controllers\Developers::alldevs') ?>
          <?= view_cell('App\Controllers\Publishers::allpubs') ?>
        </div>
        <div class="field">
          <div class="control is-expanded">
            <textarea class="textarea" id="textarea" name="about" placeholder="All About the Game"></textarea>
          </div>
        </div>
        <div class="field is-grouped is-grouped-multiline">
          <div class="control is-expanded">
            <input type="file" name="image" class="input">
          </div>
          <div class="control">
            <div class="buttons">
              <button class="button is-primary has-text-dark" value="submit">Add Game!</button>
              <button class="button is-danger has-text-white" value="reset">Start Over</button>
            </div>
          </div>
        </div>
      </form>
      <?php if(session('error') !== null): ?>
        <div class="content mt-2">
          <?php foreach(session('error') as $session): ?>
            <p><?= $session ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    <?php endif; ?>
  </section>
</div>
