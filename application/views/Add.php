<?php  include('header.php'); ?>

<form class="col-lg-6" action="<?= base_url('addpost/adbolog'); ?>" method="post">
  	<div class="container">
    <legend>Add Articals</legend>
    
   <div>
      <label for="title">Enter titel</label>
      <textarea class="form-control" id="exampleTextarea" rows="1" name="title"></textarea>
    </div>
    
    <div>
      <label for="exampleTextarea">Enter Artical</label>
      <textarea class="form-control" id="exampleTextarea" rows="6" name="Artical"></textarea>
    </div>

      
    </fieldset>
    <input type="submit" name="submit" value="save Artical" class="btn btn-primary">
    <!-- <button type="submit" class="btn btn-primary" style="margin-top:30px;">Submit</button> -->
  </fieldset>
  </div>
</form>



<?php  include('footer.php'); ?>