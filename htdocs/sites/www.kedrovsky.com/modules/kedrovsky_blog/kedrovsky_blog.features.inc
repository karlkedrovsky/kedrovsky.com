<?php
/**
 * @file
 * kedrovsky_blog.features.inc
 */

/**
 * Implementation of hook_views_api().
 */
function kedrovsky_blog_views_api() {
  list($module, $api) = func_get_args();
  if ($module == "views" && $api == "views_default") {
    return array("version" => "3.0");
  }
}

/**
 * Implementation of hook_node_info().
 */
function kedrovsky_blog_node_info() {
  $items = array(
    'blog_post' => array(
      'name' => t('Blog Post'),
      'base' => 'node_content',
      'description' => t('Creates a blog post.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
