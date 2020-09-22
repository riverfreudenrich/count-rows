<?php if( have_rows('phases') ): $i = 0; ?>
<div id="phases">
<?php while ( have_rows('phases') ) : the_row(); $i++; ?>
<div class="phase">
  <span class="main-number"><?php echo $i; ?></span>
</div>
<?php endwhile; ?>
</div>
<?php endif; ?>
