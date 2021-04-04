<?php if (cs_get_option('consult') != ''): ?>

<div class="Free_Consultation" style="background-color: <?php echo cs_get_option('fields_4'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="Free_Consultation_text uppc">
                   <?php if (cs_get_option('fields_1')): ?>
                    <h2 style="color: <?php echo cs_get_option('fields_5'); ?>"><?php echo cs_get_option('fields_1'); ?></h2>

                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <div class="Free_Consultation_text">
                    <a class="Free_Consultation_btn" href="<?php get_permalink(); ?>">Free Consultation</a>
                </div>
            </div>
        </div>
        <!-- row End -->
    </div>
    <!-- container End -->
</div>
<!-- Free_Consultation End -->
<?php endif; ?>
