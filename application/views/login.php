
<?php include_once('header.php'); ?>

<div class="container" class="col-lg-6">

	<h1>Login</h1>
  <?php if($er=$this->session->flashdata('Login_faild')):?>
    <div class="row">
      <div class="col-lg-6">
        <div class="alert alert-danger"><?php echo $er; ?></div>
      </div>
    </div>

  <?php endif;?> 

<form class="col-sm-6" action="<?= base_url('blog/login');?>"  method="post" >
  <fieldset>
    
    
    <div class="form-group">
      <label >User name</label>
      <input class="form-control"  placeholder="Enter user name" name="uname" >
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">password</label>
      <input type="password" class="form-control"  placeholder="Enter your password" type="Description"
      name="pass" 
      >
    
    
    </br></br>
   
    
        <input type="submit" name="submit" value="Login" class="btn btn-primary">
        <a href="<?= base_url('addpost/newuser');?>" class="btn btn-primary">Register Now</a>
  </fieldset>
</form>

</div>



<?php include_once('footer.php'); ?>
