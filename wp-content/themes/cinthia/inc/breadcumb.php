

 <?php
                    while(have_posts()){
                        the_post();
                ?>
  <ul class="breadcrumb">
  	   <h2><?php the_title();?></h2>
                    <li><a href="<?php echo site_url();?>">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active"><?php the_title();?></li>
                </ul>
            <?php
                    }
                ?>