<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
	$this->load->view('header');
?>
<div id="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8 offset-sm-2">
      <?php echo form_open(); ?>
        <?php if (!!validation_errors()): ?>
          <div class="alert alert-danger">
            <?php echo validation_errors(); ?>
          </div>
        <?php endif; ?>
        <?php if (isset($error)): ?>
          <div class="alert alert-danger">
            <?php echo $error; ?>
          </div>
        <?php endif; ?>
        <div class="text-center">
          <div class="form-group">
            <label>Email
              <input class="form-control" type="email" name="email" />
            </label>
          </div>
          <div class="form-group">
            <label>Password
              <input class="form-control" type="password" name="password" />
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Connexion</button>
          <a href="/authentication/subscribe">Inscription</a>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
	$this->load->view('footer');
?>
