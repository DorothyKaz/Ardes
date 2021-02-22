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
<h1><?php echo lang('Auth.change_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open('auth/change_password');?>

      <p>
            <?php echo form_label(lang('Auth.change_password_old_password_label'), 'old_password');?> <br />
            <?php $old_password['class'] = 'form-control';
                  echo form_input($old_password);?>
      </p>

      <p>
            <label for="new_password"><?php echo sprintf(lang('Auth.change_password_new_password_label'), $minPasswordLength);?></label> <br />
            <?php $new_password['class'] = 'form-control';
            echo form_input($new_password);?>
      </p>

      <p>
            <?php echo form_label(lang('Auth.change_password_new_password_confirm_label'), 'new_password_confirm');?> <br />
            <?php $new_password_confirm['class'] = 'form-control';
             echo form_input($new_password_confirm);?>
      </p>

      <?php echo form_input($user_id);?>
      <p><?php echo form_submit('submit', lang('Auth.change_password_submit_btn'), 'class="btn btn-primary"');?></p>

<?php echo form_close();?>
<!-- Form end -->
</div></div></div></div>
</body>
</html>