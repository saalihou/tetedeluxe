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
              <input class="form-control" type="email" name="email" value="<?=set_value('email')?>" />
            </label>
          </div>
          <div class="form-group">
            <label>Password
              <input class="form-control" type="password" name="password" />
            </label>
          </div>
          <div class="form-group">
            <label>Password Confirmation
              <input class="form-control" type="password" name="passwordConfirmation" />
            </label>
          </div>
          <div class="form-group">
            <label>Phone number
              <input class="form-control" type="number" name="phoneNumber" value="<?=set_value('phoneNumber')?>" />
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Inscription</button>
          <a href="<?=site_url('/authentication/subscribe')?>">Connexion</a>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
	$this->load->view('footer');
?>
