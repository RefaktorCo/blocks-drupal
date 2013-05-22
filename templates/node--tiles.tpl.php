<?php if (render($content['field_color'])): ?>

<div class="tile three columns" style="background: <?php print render($content['field_color']); ?>; color: <?php print render($content['field_text_color']); ?>;">
 <div class="tile-title"> <a href="#" data-reveal-id="tile_modal_<?php print $node->nid; ?>"><?php print $title;?></a></div>
	<i class="<?php print render($content['field_icon']); ?>"></i>
</div>
<?php endif; ?>

<?php if (render($content['field_image'])): ?>

<div class="tile-photo three columns">
  <?php print render($content['field_image']); ?>
</div>


<?php endif; ?>

<div id="tile_modal_<?php print $node->nid; ?>" class="reveal-modal large tile-modal">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
<a class="close-reveal-modal">&#215;</a>
</div>