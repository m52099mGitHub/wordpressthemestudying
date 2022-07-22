<?php 
    // 加载外部样式文件
    function university_files() {

        wp_enqueue_script('main-university-js',get_theme_file_uri('/build/index.js'),array('jquery'),'1.0.0',true);
        //加载谷歌字体样式文件
        wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        //加载页脚SNS图标
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        //加载不在当前文件同级的主样式表样式表(主样式表style.css通常和index.php在同一级，这里把它放在了build文件夹下面了)
        wp_enqueue_style('university_main_style', get_theme_file_uri('/build/style-index.css'));//获取指定地址的样式文件
        //加载其它样式表
        wp_enqueue_style('university_extra_style', get_theme_file_uri('/build/index.css'));
    }
    add_action('wp_enqueue_scripts', 'university_files');//wp_enqueue_scripts加载外部样式表文件的时机，university_files进行加载动作的函数名



    //浏览器顶部显示页面标题
function university_features() {
    // register_nav_menu('headerMenuLocation','Header Menu Location');
    // register_nav_menu('footerLocationOne','Footer Location One');
    // register_nav_menu('footerLocationTwo','Footer Location Two');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('professorLandscape', 400, 260, true);
    add_image_size('professorPortrait', 480, 650, true);
}

add_action('after_setup_theme', 'university_features');


function university_adjust_queries ($query) {
    if (!is_admin() AND is_post_type_archive('program') AND is_main_query()) {
        $query -> set('orderby', 'title');
        $query -> set('order', 'ASC');//按标题首字母排序
        $query -> set('posts_per_page', -1);
    }
    if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
        // $query -> set('posts_per_page', '1');
        $today = date('Ymd');
        $query -> set('meta_key', 'event_date');
        $query -> set('orderby', 'meta_value_num');
        $query -> set('order', 'ASC');
        $query -> set('meta_query', array(
            array(
              'key' => 'event_date',
              'compare' => '>=',
              'value' => $today,
              'type' => 'numeric'
            )
          ));
    }
}
add_action('pre_get_posts', 'university_adjust_queries')































?>