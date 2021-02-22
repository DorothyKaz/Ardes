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
    <h1><?php echo lang('Auth.login_heading');?></h1>
      <p><?php echo lang('Auth.login_subheading');?></p>

      <div id="infoMessage"><?php echo $message;?></div>

      <?php echo form_open('auth/login');?>

        <p>
          <?php echo form_label(lang('Auth.login_identity_label'), 'identity');?>
          <?php $identity['class'] = 'form-control'; 
            echo form_input($identity);?>
        </p>

        <p>
          <?php echo form_label(lang('Auth.login_password_label'), 'password');?>
          <?php $password['class'] = 'form-control';
            echo form_input($password);?>
        </p>

        <p>
          <?php echo form_label(lang('Auth.login_remember_label'), 'remember');?>
          <?php echo form_checkbox('remember', '1', false, 'id="remember" class="form-check-input"');?>
        </p>


        <p><?php echo form_submit('submit', lang('Auth.login_submit_btn'), 'class="btn btn-primary"');?></p>

      <?php echo form_close();?>

      <p><a href="forgot_password"><?php echo lang('Auth.login_forgot_password');?></a></p>
      <!-- Form end -->
</div></div></div></div>
</body>
</html>
