<?php

// コンテンツの最大幅
if (!isset($content_width)) {
  $content_width = 747;
}

// サムネイル画像
function mythumb( $size ) {
  global $post;
  if (has_post_thumbnail() ) {
    $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), '$size');
    $url = $postthumb[0];
    // 小かっこは、パターンにマッチした部分文字列を取得したい場合に使います。https://goo.gl/nqdwvE
  } elseif(preg_match('/wp-image-(\d+)/s', $post->post_content, $thumbid)) {
    $postthumb = wp_get_attachment_image_src( $thumbid[1], $size);
    $url = $postthumb[0];
  } else {
    $url = get_template_directory_uri() . '/picnic.jpg';
  }
  return $url;
}

// ウイジェットエリア
register_sidebar( array(
  'id' => 'submenu',
  'name' => 'サブメニュー',
  'description' => 'サイドバーに表示するウイジェットを指定',
  'before_widget' => '<aside id="%1$s" class="mymenu widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h2 class="widgettitle">',
  'after_title' => '</h2>'
));

register_sidebar( array(
  'id' => 'ad',
  'name' => '広告',
  'description' => 'サイドバーに表示する広告を指定',
  'before_widget' => '<aside id="%1$s" class="myad widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h2 class="widgettitle">',
  'after_title' => '</h2>'
));

// 検索フォーム
 add_theme_support ('html5', array('search-form'));

// ヘッダー画像
add_theme_support( 'custom-header', array(
  'width' => 1000,
  'height' => 300,
  'header-text' => false
));
