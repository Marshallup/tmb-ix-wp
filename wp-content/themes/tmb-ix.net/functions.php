<?php

// Подключение файла для чтения Exel прайса

require_once(__DIR__ . '/inc/exel-price.php');

require_once(__DIR__ . '/inc/widget-phone.php');
require_once(__DIR__ . '/inc/widget-contacts.php');

add_action('after_setup_theme', 'tx_setup');
add_action('init', 'tx_register_types');
add_action('wp_enqueue_scripts', 'tx_scripts');
add_action('widgets_init', 'tx_register');
add_action( 'add_meta_boxes', 'tx_meta_boxes' );
add_action('save_post', 'tx_bg_color_save_meta');
add_filter( 'nav_menu_item_id', 'filter_nav_menu_item_id', 10, 4 );
add_filter('nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4);
add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4);
add_filter('acf/format_value/type=textarea', 'root_acf_format_value', 10, 3);
add_filter( 'script_loader_tag', 'add_id_to_script', 10, 3 );
add_filter('clean_url', 'add_async_or_preload', 11, 1);
// Удаление ненужных скриптов
remove_action('wp_head','feed_links_extra', 3); // убирает ссылки на rss категорий
remove_action('wp_head','feed_links', 2); // минус ссылки на основной rss и комментарии
remove_action('wp_head','rsd_link');  // сервис Really Simple Discovery
remove_action('wp_head','wlwmanifest_link'); // Windows Live Writer
remove_action('wp_head','wp_generator');  // скрыть версию wordpress
remove_action('wp_head','qtranxf_wp_head_meta_generator');
remove_action('wp_head','start_post_rel_link',10,0);
remove_action('wp_head','index_rel_link');
remove_action('wp_head','adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head','wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'wp_head', 'rest_output_link_wp_head');
remove_action( 'wp_head', 'wp_oembed_add_discovery_links');
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );

function add_id_to_script( $tag, $handle, $source ) {
    if ( 'pace' === $handle ) {
        $tag = '<script type="text/javascript" src="' . $source . '" id="pace-js" data-pace-options=\'{ "ajax": false }\'></script>';
    }

    return $tag;
}

//* Поддержка меню
function tx_setup()
{
  register_nav_menu('menu-header', 'Меню в шапке');
  register_nav_menu('menu-footer', 'Меню в подвале');
  // add_theme_support('custom-logo');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('widgets');
  // add_theme_support('menus');
}

function filter_nav_menu_item_id($menu_id, $item, $args, $depth) {
  return $args->theme_location === 'menu-header' || $args->theme_location === 'menu-footer' ? '' : $menu_id;
}

function filter_nav_menu_css_classes($classes, $item, $args, $depth) {
  if ($args->theme_location === 'menu-header') {
    $classes = [
      'menu-header__list'
    ];
  }
  if ($args->theme_location === 'menu-footer') {
    $classes = [
      'section-footer-menu__item'
    ];
  }
  return $classes;
}
function filter_nav_menu_link_attributes($atts, $item, $args, $depth) {
  if ($args->theme_location === 'menu-header') {
    $atts['class'] = 'menu-header__link';
  }
  if ($args->theme_location === 'menu-footer') {
    $atts['class'] = 'section-footer-menu__link';
  }
  return $atts;
}

function tx_meta_boxes()
{
  add_meta_box( 
    'tariff-bg-color', 
    'Код для цвета карточки тарифа',
    'tx_meta_tariff_bg_color_cb',
    'tariffs'
  );
}

function tx_meta_tariff_bg_color_cb($post_obj) 
{
  $color = get_post_meta( $post_obj->ID, 'tx-bg-color', true );
  $color = $color ? $color : '#FFFFFF';
  // echo '<p>' . $color . '</p>';
  echo "<input type=\"text\" name=\"tx-bg-color\" value=\"${color}\">";
}
function tx_bg_color_save_meta($post_id) {
  if ( isset($_POST['tx-bg-color'])) {
    update_post_meta($post_id, 'tx-bg-color', $_POST['tx-bg-color']);
  }
}
function tx_register_types() 
{
  register_post_type('offers', [
    'labels' => [
      'name'               => 'Секция мы предлагаем', // основное название для типа записи
      'singular_name'      => 'Предложение', // название для одной записи этого типа
      'add_new'            => 'Добавить новое предложение', // для добавления новой записи
      'add_new_item'       => 'Добавить новое предложение', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактировать предложение', // для редактирования типа записи
      'new_item'           => 'Новое предложение', // текст новой записи
      'view_item'          => 'Смотреть предложения', // для просмотра записи этого типа.
      'search_items'       => 'Искать предложения', // для поиска по этим типам записи
      'not_found'          => 'Не найдено предложения', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено предложения в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Предложения', // название меню
    ],
    'public'              => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-megaphone',
    'hierarchical'        => false,
    'supports'            => ['title', 'editor', 'thumbnail', 'excerpt'],
    'has_archive' => false,
  ]); 
  register_post_type('services', [
    'labels' => [
      'name'               => 'Дополнительные услуги', // основное название для типа записи
      'singular_name'      => 'Услуги', // название для одной записи этого типа
      'add_new'            => 'Добавить новую услугу', // для добавления новой записи
      'add_new_item'       => 'Добавить новую услугу', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактировать услугу', // для редактирования типа записи
      'new_item'           => 'Новая услуга', // текст новой записи
      'view_item'          => 'Смотреть услугу', // для просмотра записи этого типа.
      'search_items'       => 'Искать услугу', // для поиска по этим типам записи
      'not_found'          => 'Не найдено услуг', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено услуг в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Услуги', // название меню
    ],
    'public'              => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-saved',
    'hierarchical'        => false,
    'supports'            => ['title', 'editor', 'thumbnail', 'excerpt'],
    'has_archive' => true,
    'rewrite' => true
  ]);
  register_post_type('tariffs', [
    'labels' => [
      'name'               => 'Тарифы', // основное название для типа записи
      'singular_name'      => 'Тариф', // название для одной записи этого типа
      'add_new'            => 'Добавить новый тариф', // для добавления новой записи
      'add_new_item'       => 'Добавить новый тариф', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактировать тариф', // для редактирования типа записи
      'new_item'           => 'Новый тариф', // текст новой записи
      'view_item'          => 'Смотреть тариф', // для просмотра записи этого типа.
      'search_items'       => 'Искать тариф', // для поиска по этим типам записи
      'not_found'          => 'Не найдено тарифов', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено тарифов в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Тарифы', // название меню
    ],
    'public'              => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-money-alt',
    'hierarchical'        => false,
    'supports'            => ['title', 'editor'],
    'has_archive' => true,
    'rewrite' => true
  ]);
  register_post_type('advantages', [
    'labels' => [
      'name'               => 'Секция преимущества', // основное название для типа записи
      'singular_name'      => 'Преимущества', // название для одной записи этого типа
      'add_new'            => 'Добавить новое преимущество', // для добавления новой записи
      'add_new_item'       => 'Добавить новое преимущество', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактировать преимущество', // для редактирования типа записи
      'new_item'           => 'Новое преимущество', // текст новой записи
      'view_item'          => 'Смотреть преимущество', // для просмотра записи этого типа.
      'search_items'       => 'Искать преимущество', // для поиска по этим типам записи
      'not_found'          => 'Не найдено преимуществ', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено преимуществ в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Преимущества', // название меню
    ],
    'public'              => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-insert',
    'hierarchical'        => false,
    'supports'            => ['title', 'editor', 'thumbnail'],
    'has_archive' => false
  ]);
}

function tx_register()
{
  register_sidebar([
    'name' => 'Сайдбар в шапке',
    'id' => 'tx-header',
    'before_widget' => null,
    'after_widget' => null
  ]);
  register_sidebar([
    'name' => 'Сайдбар в подвале',
    'id' => 'tx-footer-contacts',
    'before_widget' => null,
    'after_widget' => null
  ]);

  register_widget('tx_widget_phone');
  register_widget('tx_widget_contacts');
}

// function add_file_types_to_uploads($file_types)
// { 
//   $new_filetypes = array(); $new_filetypes['svg'] =
//    'image/svg+xml'; $file_types = array_merge($file_types, 
//   $new_filetypes ); return $file_types;
// }

function root_acf_format_value( $value, $post_id, $field ) {
	
	$value = do_shortcode($value);
	
	return $value;
}
 
//* Подключение скриптов и стилей
function tx_scripts()
{
  if ( !is_admin() ) { 
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', false, false, false);
    wp_enqueue_script('jquery');
 }
  wp_enqueue_script('pace', _tx_assets_path('js/pace.min.js'), [], '1.0');
  wp_enqueue_script('vendor', _tx_assets_path('js/vendors~app.js'), [], '1.0', true);
  wp_enqueue_script('js', _tx_assets_path('js/app.js'), [], '1.0', true);
  wp_enqueue_style('tx_style', _tx_assets_path('css/styles.min.css'), [], '1.11', 'all');

	wp_enqueue_style('tx_style_add', _tx_assets_path('css/style-add.css'), [], '1.11', 'all');
	wp_enqueue_script('add_script', _tx_assets_path('js/app_add.js#asyncload'), [], '1.0', true );

  // Отлкючение лишних стилей и скрпитов 
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'bodhi-svgs-attachment' );
  wp_dequeue_style( 'wp-embed' );
  wp_deregister_script( 'wp-embed' );
}
function _tx_assets_path($path)
{
  return get_template_directory_uri() . '/assets/' . $path;
}


function add_async_or_preload($url)
{
	$async = strpos($url, '#asyncload');

	if ($async === false)
	{
		return $url;
	}
	else if (is_admin())
	{
		{
			return str_replace('#asyncload', '', $url);
		}
	} else
	{
		{
			return str_replace('#asyncload', '', $url)."' async='async";
		}
	}
}