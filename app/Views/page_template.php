<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Ardes</title>

    <!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" ></script>
  </head>
  <body class="text-center">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-12 p-0">
        <div class="container-fluid p-0">
            <nav class="navbar navbar-dark bg-dark text-white justify-content-between px-5">
                <a class="navbar-brand" href="<?=site_url('/');?>">Ardes</a>
                    <div>
                    <?php if(isset($user)){?>
                        <span><a class="btn text-white my-2 my-sm-0" href="<?=site_url('auth/edit_user/'.$user->id);?>"><?php echo $user->first_name." ".$user->last_name;?></span></a>
                        <a class="btn btn-outline-success my-2 my-sm-0 ml-2" href="<?=site_url('auth/logout');?>">Log Out</a>
                    <?php } else {?>
                        <span><a class="btn text-white my-2 my-sm-0" href="<?=site_url('auth/create_user/');?>">Sign up</span></a>
                        <a class="btn btn-outline-success my-2 my-sm-0 ml-2" href="<?=site_url('auth/login');?>">Log In</a>
                   <?php } ?>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Data -->
        <div class="content mt-5">
            <?= $this->renderSection('content') ?>
        </div>
        <!-- end data-->
        </div></div></div>
    </body>
</html>
