<!-- check if flash message exists -->
<?php if(Yii::app()->user->hasFlash('data-saved')): ?>

    <!-- <span> element to display the message -->
    <span class="data-saved"><i class="icon-ok-sign"></i> <?php echo Yii::app()->user->getFlash('data-saved'); ?></span>

    <script type="text/javascript">

        /* animate the flash message */
        $('.data-saved').hide();
        $('.data-saved').fadeIn('slow', function() {
            $('.data-saved').delay(1000).fadeOut('slow');
        });

    </script>

<?php endif; ?>





