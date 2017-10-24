<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo e(config('app.name', 'Laravel')); ?></title>

  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('/font-awesome/css/font-awesome.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('/css/bootstrap.css')); ?>">
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/admin.css')); ?>" rel="stylesheet">

</head>
<body>
  <div id="app">
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <?php echo e(config('app.name', 'Zen@home')); ?>

          </a>
          <a class="navbar-brand" href="<?php echo e(route('articles.index')); ?>">Gestion des articles</a>
          <a class="navbar-brand" href="<?php echo e(route('date.index')); ?>">Gestion des dates</a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
            &nbsp;
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            <?php if(auth()->guard()->guest()): ?>
              <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
            <?php else: ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                  </a>

                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                  </form>
                </li>
              </ul>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
</div>