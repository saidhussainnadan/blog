<?php  include('header.php'); ?>

<form class="col-lg-6" action="<?= base_url('blog/udateart'); ?>" method="post">
    <div class="container">
    <legend>Edit Articals</legend>
    
   <div>
      <label for="title">Enter titel</label>
      <textarea class="form-control" id="exampleTextarea" rows="1" name="title"
      value="<?php set_value('Artical_title',$up->titel)?>"></textarea>
    </div>
    
    <div>
      <label for="exampleTextarea">Enter Artical</label>
      <textarea class="form-control" id="exampleTextarea" rows="6" name="Artical" 
      value="<?php set_value('Artical_title',$up->body)?>"></textarea>
    </div>
 
    <?=
              form_open('blog/udateart'),
              form_hidden('id',$up->id),
              form_submit(['name'=>'submit','value'=>'update Artical','class'=>'btn btn-primary']),
              form_close();
              ?> 
      
    </fieldset>
    <input type="submit" name="submit" value="save Artical" class="btn btn-primary">
    <!-- <button type="submit" class="btn btn-primary" style="margin-top:30px;">Submit</button> -->
  </fieldset>
  </div>
</form>


<?php  include('footer.php'); ?>