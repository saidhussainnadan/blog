
<?php include_once('header.php'); ?>

<div class="container" class="col-lg-6">

	<h1>Registraion form</h1>

<form class="col-sm-6" action="<?= base_url('addpost/reg');?>"  method="post" >
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
      <div class="form-group">
      <label >Email</label>
      <input class="form-control"  placeholder="Email" name="email" >
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">City</label>
      <input class="form-control" class="form-control"  placeholder="City" type="Description"
      name="city" 
      >
      <div class="form-group">
      <label for="exampleInputPassword1">phone</label>
      <input class="form-control" class="form-control"  placeholder="phone" type="Description"
      name="phone" 
      >
    
    </br></br>
   
    
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        
  </fieldset>
</form>

</div>



<?php include_once('footer.php'); ?>
