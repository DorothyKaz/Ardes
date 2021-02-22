<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Sign in</title>

    <!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  </head>
  <body class="text-center">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-12 p-0">
        <div class="container-fluid p-0">
            <nav class="navbar navbar-dark bg-dark text-white justify-content-between px-5">
                <a class="navbar-brand" href="<?php echo site_url('/');?>">Ardes</a>
            </nav>
        </div>
		<div class="container mt-5">
<!-- Form -->
<h1><?php echo lang('Auth.edit_user_heading');?></h1>
<p><?php echo lang('Auth.edit_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(uri_string());?>

      <p>
            <?php echo form_label(lang('Auth.edit_user_fname_label'), 'first_name');?> <br />
            <?php $first_name['class'] = 'form-control';
            echo form_input($first_name);?>
      </p>

      <p>
            <?php echo form_label(lang('Auth.edit_user_lname_label'), 'last_name');?> <br />
            <?php $last_name['class'] = 'form-control';
            echo form_input($last_name);?>
      </p>

      <!-- <p>
      <?php // echo form_label(lang('Auth.edit_user_company_label'), 'company');?> <br />
            <?php // echo form_input($company);?>
      </p> -->

      <!-- <p>
            <?php //echo form_label(lang('Auth.edit_user_phone_label'), 'phone');?> <br />
            <?php //echo form_input($phone);?>
      </p> -->

      <p>
            <?php echo form_label(lang('Auth.edit_user_password_label'), 'password');?> <br />
            <?php $password['class'] = 'form-control';
            echo form_input($password);?>
      </p>

      <p>
            <?php echo form_label(lang('Auth.edit_user_password_confirm_label'), 'password_confirm');?><br />
            <?php $password_confirm['class'] = 'form-control';
            echo form_input($password_confirm);?>
      </p>

      <?php if ($ionAuth->isAdmin()): ?>

          <h3><?php echo lang('Auth.edit_user_groups_heading');?></h3>
          <?php foreach ($groups as $group):?>
              <label class="checkbox pl-2">
              <?php
                  $gID = $group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked = ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input class="form-check-input" type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8');?>
              </label>
          <?php endforeach?>

      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>

      <p><?php echo form_submit('submit', lang('Auth.edit_user_submit_btn'), 'class="btn btn-primary"');?></p>

<?php echo form_close();?>
<!-- Form end -->
</div></div></div></div>
</body>
</html>