<?php include('header.php');?>


  
  <div class="container" style="margin-top: 70px;">
    <h3 style="margin-bottom:30px;">BLOG.COM</h3>

    <div class="table">
      
      <table class="col-lg-12">
        <thead>
          <tr>
            <!-- <th>ID</th> -->
            <th>Title</th>
            <th>Artical</th>
            



          </tr>
        </thead>
         <tbody>
          <tr>
          <?php if(count($all)):  ?>
          <?php foreach($all as $a):     ?>
          
            <!-- <td><?php echo $art->id; ?></td> -->
            <td style="text-align:justify;"><?php echo $a->titel; ?></td>
            <td style="text-align:justify;"><?php echo $a->body; ?></td>
            
          

          </tr>
          <?php  endforeach;  ?>
          <?php else: ?>
            
              <td colspan="3">
                Articals not avilable yet 
              </td>
            
          <?php  endif;   ?>
        </tbody>

      </table>

    </div>

      <hr></hr>

  </div>




 
 

  
<?php include('footer.php');?>