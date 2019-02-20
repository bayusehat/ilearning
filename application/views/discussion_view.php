

	
</div>
<!--main-content-->


<!-- Popular courses -->
<div class="event" id="events">
	<div class="container">
		<div class="nav nav-justified navbar-nav">
 
            <form class="navbar-form navbar-search" id="formcourses" method="get" action="<?php echo base_url() ?>discussion" role="search">
                <div class="input-group">
                                                                                                
                    <input type="text" id="title" name="title" class="form-control" value="<?php if(!empty($title)) { echo $title; } ?>" placeholder="search discussion">
                
                    <div class="input-group-btn">
                        <input type="submit"  class="btn btn-search btn-danger" value="Search" id="searchcourses">
                        
                        <select class="form-control" name="subject">
                            <option value="">All</option>
                                <?php 

                                foreach ($list_subject as $sbj) {
                                 if ($sbj->text == $subject) {
                                    
                                 ?>
                                 <option value="<?php echo $sbj->text ?>" selected="selected"><?php echo $sbj->text ?></option>
                                 <?php }
                                 else { ?>
                                    <option value="<?php echo $sbj->text ?>"><?php echo $sbj->text ?></option>
                                <?php 
                            }
                            } ?>
                                </select>
                     
                    </div>
                </div>  
            </form>   
        </div>

        <br>
        <br>

		<h3 style="text-align: left;text-transform: uppercase;margin-left: 15px;">Discussion</h3>
		<?php
		if (!empty($list_discuss)) {
		 foreach ($list_discuss as $discuss) { ?>
		<div class="col-md-4 eve-agile e1">
			<div class="eve-sub1">
				<!-- <a href="#" data-toggle="modal" data-target="#myModal5"><img src="images/e2.jpg" alt="image"></a> -->
			<h6 style="margin-bottom: 3px">Discuss Title :</h6>
			<h4 style="margin-top: 0"><a href="<?php echo base_url().'discuss/'.$discuss->random_code ?>" data-toggle="" data-target="" title="<?php echo $discuss->subject; ?>">
				<?php 
                        if (strlen($discuss->subject) < 24) {
                          echo $discuss->subject;
                        }
                        else{
                        echo  substr($discuss->subject, 0,23).'..';
                        } ?>
			</a></h4>
				<table width="100%">
					<tr>
						<td>By an </td>
						<td>:</td>
						<td><a href="#"><?php echo $discuss->username ?></a></td>
					</tr>
					<tr>
						<td>Created in</td>
						<td>:</td>
						<td><?php echo $discuss->comment_created ?></td>
					</tr>
					<tr>
						<td>Course</td>
						<td>:</td>
						<td><a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="<?php echo $discuss->random_code ?>" style="color:#d9534f;"><?php echo $discuss->title ?></a></td>
					</tr>
				</table>
				<!-- <h6>By an 
				<br> <a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="<?php echo $discuss->random_code ?>" style="color:#d9534f;"><?php echo $discuss->title ?></a></h6>
				<p class="breaks"><?php 
                        if (strlen($discuss->text_comment) < 37) {
                          echo $discuss->text_comment;
                        }
                        else{
                        echo  substr($discuss->text_comment, 0,38).'..';
                        } ?></p> -->
			</div>
			<div class="eve-sub2">
				<div class="eve-w3lleft">

					<?php 
					if(array_key_exists($discuss->id_comment, $comment_amount)) {
					$comments =  $comment_amount[$discuss->id_comment];
					}
					 ?>
					<h6><i class="fa fa-comment-o" aria-hidden="true"></i><?php echo $comments; ?></h6>
					
				</div>	
				<div class="eve-w3lright e1">
					<a href="<?php echo base_url().'discuss/'.$discuss->random_code ?>" data-toggle="" data-target="" title="<?php echo $discuss->subject; ?>"><h5>More</h5></a>
				</div>
				<div class="clearfix"></div>	
			</div>
		</div>
		<?php 
    }
    } else{ ?>
		  <div id="about" class="about">
    <div class="container">
            <h1> <span>Sorry!</span></h1>
            <h2>Not Found. Try Again</h2>
    </div>
</div>
        <?php } ?>
	
	</div>
</div>

						<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>Educational</h4>
											<img src="images/e2.jpg" alt="blog-image" />
											<span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium.</span>
									</div>
								</div>
						
							</div>
				       </div>
					   
