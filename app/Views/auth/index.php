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
<!-- Table -->
<h1><?php echo lang('Auth.index_heading');?></h1>
<p><?php echo lang('Auth.index_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<table class="table" cellpadding=0 cellspacing=10>
	<tr>
		<th><?php echo lang('Auth.index_fname_th');?></th>
		<th><?php echo lang('Auth.index_lname_th');?></th>
		<th><?php echo lang('Auth.index_email_th');?></th>
		<th><?php echo lang('Auth.index_groups_th');?></th>
		<th><?php echo lang('Auth.index_status_th');?></th>
		<th><?php echo lang('Auth.index_action_th');?></th>
	</tr>
	<?php foreach ($users as $user):?>
		<tr>
            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo anchor('auth/edit_group/' . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?><br />
                <?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor('auth/deactivate/' . $user->id, lang('Auth.index_active_link'), 'class="btn btn-primary"') : anchor("auth/activate/". $user->id, lang('Auth.index_inactive_link'), 'class="btn btn-primary"');?></td>
			<td><?php echo anchor('auth/edit_user/' . $user->id, lang('Auth.index_edit_link'), 'class="btn btn-primary"') ;?></td>
		</tr>
	<?php endforeach;?>
</table>

<p><?php echo anchor('auth/create_user', lang('Auth.index_create_user_link'), 'class="btn btn-primary"')?> | <?php echo anchor('auth/create_group', lang('Auth.index_create_group_link'), 'class="btn btn-primary"')?></p>
<!-- Table end -->
</div></div></div></div>
    </body>
</html>