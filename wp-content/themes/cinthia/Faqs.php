<?php  if(cs_get_option('faqshide')!= ''):?>
<div class="frequently_question_area" style="background-color: <?php echo cs_get_option('faqs_color_bg'); ?>">
   <div class="frequently_question_bg" ></div>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6 col-md-offset-6">
            <div class="frequently_question_accordion">
               <div class="acordion_Frequently_title">
                  <h3>Frequently Question</h3>
               </div>
               <!--
                  <div aria-multiselectable="true" class="panel-group" id="accordion" role="tablist">
                      <div class="panel panel-default">
                          <div class="panel-heading" id="headingOne" role="tab">
                              <h4 class="panel-title"><a aria-controls="collapseOne" aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseOne" role="button"><span>01</span> Unique and bold application design</a></h4>
                          </div>
                          <div aria-expanded="false" aria-labelledby="headingOne" class="panel-collapse collapse in" id="collapseOne" role="tabpanel">
                              <div class="panel-body">
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem Ipsum is simply dummy text industry.
                              </div>
                          </div>
                      </div>
                      <!-->
               <?php 
                  $i=1;
                  
                                                       $posts = new WP_Query( array( 'post_type' => 'faqs' , 'order' => 'ASC','post_per_page' =>'-1') );
                  while($posts->have_posts()) : $posts->the_post();?>
               <div class="panel panel-default">
                  <div class="panel-heading" id="headingTwo" role="tab">
                     <h4 style="color: <?php echo cs_get_option('faqs_color_text'); ?>"class="panel-title"><a aria-controls="<?php echo $i;?>"   aria-expanded="true" class="<?php the_ID(); ?> <?php if($i == 1) {echo 'collapsed';}?> " data-parent="#accordion" data-toggle="collapse" href="#<?php echo $i;?>" role="button"><span>02</span><?php the_title();?></a></h4>
                  </div>
                  <div aria-expanded="false" aria-labelledby="<?php echo $i;?>" class="panel-collapse collapse" id="<?php echo $i;?>" role="tabpanel">
                     <div      style="color: <?php echo cs_get_option('faqs_color_desc'); ?>"class="panel-body">
                        <?php the_content();?>
                     </div>
                  </div>
               </div>
               <?php $i++; endwhile; ?>
               <?php wp_reset_postdata();?>
            </div>
         </div>
      </div>
      <!-- Column End -->
   </div>
   <!-- row -->
</div>
<!--.container-fluid-->
</div><!--.frequently_question_area-->
<?php endif;?>