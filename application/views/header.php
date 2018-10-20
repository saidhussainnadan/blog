<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?= base_url('Assets/bootstrap.min.css'); ?>">
  <meta property="og:url"           content="http://localhost/blog" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="BloG" />
  <meta property="og:description"   content="This is blig websit" />
  <meta property="og:image"         content="http://localhost/blog/blog/dashboard" />
</head>

<body>
	
      <nav>	
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?= base_url('blog'); ?>">My BloG</a>
  
  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('blog'); ?>">Home <span class="sr-only">(current)</span></a>
      </li>

    </ul>
      </div>
  
      <?php  if($this->session->userdata('id')): ?>
        
        <a class="btn btn-primary" href="<?= base_url('blog/logout');?>">Log out</a>
      
       <?php endif; ?>

      <?php if(!$this->session->userdata('id')):
      
        ?>
        
        <a class="btn btn-primary" href="<?= base_url('blog/login');?>">Login</a>
     
     
      
      
    <?php endif; ?>


</nav>
    
