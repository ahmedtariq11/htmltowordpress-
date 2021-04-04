

<?php /* Template Name:Gallery*/?>

<?php get_header();?> 
<div class="container-fluid">
<div class="row">	
	<div class="col-md-12">
<?php 
$images = get_field('gallery');
if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo esc_url($image['url']); ?>">
                     <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
               
                <p><?php //echo esc_html($image['title']); ?></p>
                   <p><?php //echo esc_html($image['description']); ?></p>
                      <p><?php //echo esc_html($image['link']); ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</div>
</div>
</div>

<?php get_footer();?> 