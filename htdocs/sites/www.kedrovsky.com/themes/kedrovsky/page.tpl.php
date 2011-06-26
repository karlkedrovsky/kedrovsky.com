<div class="container_12">
  <div id="header" class="grid_12">
    <?php if ($site_name): ?>
      <a class="site-name" href="/"><?php print $site_name; ?></a>
    <?php endif; ?>
    <?php if ($main_menu || $secondary_menu): ?>
      <div id="navigation" class="grid_8 suffix_4">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="clear"></div>
  <div id="content" class="<?php print ($page['sidebar']) ? 'grid_8' : 'grid_12'; ?>">
    <?php print $messages; ?>
    <?php if (!$is_front): ?>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?><header><h1><?php print $title; ?></h1></header><?php endif; ?>
      <?php print render($title_suffix); ?>
    <?php endif; ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
    <?php if ($page['content_bottom']): print render($page['content_bottom']); endif; ?>
    <?php print $feed_icons; ?>
  </div>
  <?php if ($page['sidebar']): ?>
    <div id="sidebar" class="grid_3 prefix_1">
      <?php print render($page['sidebar']); ?>
    </div>
  <?php endif; ?>
  <div class="clear"></div>
  <div id="footer" class="grid_12">
    <?php print render($page['footer']); ?>
  </div>
  <div class="clear"></div>
</div>
