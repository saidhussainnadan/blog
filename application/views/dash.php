 

<?php include('header.php');?>
	
	
	<div class="container" style="margin-top: 70px;">
		<h3>Dashboard</h3>
<a href="<?= base_url('addpost/addblog'); ?>" class="btn btn-info" style="margin-bottom:30px;">Add Articals</a>
		<div class="table">
			
			<table class="col-lg-8">


				
				
				<thead>
					<tr>
						<!-- <th>ID</th> -->
						<th>Title</th>
						<th>Know More</th>
						



					</tr>
				</thead>
				<tbody>

					<?php if(count($artical)):  ?>
					<?php foreach($artical as $art):     ?>

					<tr>
						<!-- <td><?php echo $art->id; ?></td> -->
						<td><?php echo $art->titel; ?></td>
						<td><!-- <a href="<?=base_url('blog/edit'); echo $art->id;?>" class="btn btn-info">Edit</a></td> -->

						<?=
							form_open('blog/edit'),
							form_hidden('id',$art->id),
							form_submit(['name'=>'submit','value'=>'Edit','class'=>'btn btn-primary']),
							form_close();
							?>	




						<td>
							<?=
							form_open('blog/delet'),
							form_hidden('id',$art->id),
							form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
							form_close();
							?>
						</td>
						<td>
							<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your share button code -->
  <div class="fb-share-button" 
    data-href="https://www.your-domain.com/your-page.html" 
    data-layout="button_count">
  </div>
							<iframe src="https://www.facebook.com/plugins/share_button.php?href=http://localhost/blog/&layout=button_count&size=small&mobile_iframe=true&appId=487806334960054&width=75&height=20" width="75" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

						</td>
					</tr>

					<?php  endforeach;  ?>
					<?php else: ?>
						<tr>
							<td colspan="3">
								Articals not avilable yet 
							</td>
						</tr>
					<?php  endif;   ?>
				</tbody>

				

			</table>

		</div>



	</div>





<?php include('footer.php');?>
