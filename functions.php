<?php
	// Add RSS links to <head> section
	automatic_feed_links();
	include('keys.php');
    
	// Load jQuery
	if ( !is_admin() ) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
        wp_enqueue_script('jquery');

        wp_register_script('myjquery' , get_bloginfo('template_directory') . "/js/myjquery.js");
        wp_enqueue_script('myjquery');

        wp_register_script('picturefill' , get_bloginfo('template_directory') . "/js/picturefill.js");
        wp_enqueue_script('picturefill');

        wp_register_script('nlform' , get_bloginfo('template_directory') . "/js/nlform.js");
        wp_enqueue_script('nlform');

        wp_enqueue_style( 'kylevalenzuela-style', get_stylesheet_uri() );
        add_action( 'wp_enqueue_scripts', 'kylevalenzuela-style' );
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    if (function_exists('register_nav_menus')) {
        register_nav_menus(
            array(
                'main_nav'=> 'Main Navigation Menu'    
                )
        );
    }

    function fix_excerpt_more($more){
        $more = '...';
        return $more;
    }
    add_filter('excerpt_more', 'fix_excerpt_more');

    function custom_excerpt_length( $length ) {
        return 89;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

    function port_cat_loop(){
        $category = get_the_category();
        echo '<li>' . $category[0]->cat_name . '</li>';
        echo '<li>' . $category[1]->cat_name . '</li>';
        echo '<li>' . $category[2]->cat_name . '</li>';
    }
      
    function portfolio_main_loop() {
        
        $category_query = new WP_Query( 
            array(
                'category_in' => array(13,14,15,16),
                'post_type'=> 'page',
                'post_parent'=> 8,
                'order' => 'DESC',
                'posts_per_page' => 12,
            ) 
        );
        if ($category_query->have_posts()) :
            while ( $category_query->have_posts() ) : 
                    $category_query->the_post(); 
                    echo '<a href="'; 
                    the_permalink(); 
                    echo '"><div class="portfolio-item ">';
                    echo '<img src="';
                    the_field('p-img'); 
                    echo'" />';
                    echo '<span><h3>';
                    the_title(); 
                    echo '</h3><ul class="port-loop-cat">';
                    port_cat_loop();
                    echo '</ul></span></div></a>';
                
            endwhile; 
        endif; wp_reset_query();
    }

    function portfolio_design_loop() {
        
        $category_query = new WP_Query( 
            array(
                'cat' => 13,
                'post_type'=> 'page',
                'post_parent'=> 8,
                'order' => 'DESC',
                'posts_per_page' => 12,
            ) 
        );
        if ($category_query->have_posts()) :
            while ( $category_query->have_posts() ) : 
                    $category_query->the_post(); 
                    echo '<a href="'; 
                    the_permalink(); 
                    echo '"><div class="portfolio-item ">';
                    echo '<img src="';
                    the_field('p-img'); 
                    echo'" />';
                    echo '<span><h3>';
                    the_title(); 
                    echo '</h3><ul class="port-loop-cat">';
                    port_cat_loop();
                    echo '</ul></span></div></a>';
                
            endwhile; 
        endif; wp_reset_query();
    }
    function portfolio_development_loop() {
        
        $category_query = new WP_Query( 
            array(
                'cat' => 14,
                'post_type'=> 'page',
                'post_parent'=> 8,
                'order' => 'DESC',
                'posts_per_page' => 12,
            ) 
        );
        if ($category_query->have_posts()) :
            while ( $category_query->have_posts() ) : 
                    $category_query->the_post(); 
                    echo '<a href="'; 
                    the_permalink(); 
                    echo '"><div class="portfolio-item ">';
                    echo '<img src="';
                    the_field('p-img'); 
                    echo'" />';
                    echo '<span><h3>';
                    the_title(); 
                    echo '</h3><ul class="port-loop-cat">';
                    port_cat_loop();
                    echo '</ul></span></div></a>';
                
            endwhile; 
        endif; wp_reset_query();
    }
    function portfolio_illustration_loop() {
        
        $category_query = new WP_Query( 
            array(
                'cat' => 15,
                'post_type'=> 'page',
                'post_parent'=> 8,
                'order' => 'DESC',
                'posts_per_page' => 12,
            ) 
        );
        if ($category_query->have_posts()) :
            while ( $category_query->have_posts() ) : 
                    $category_query->the_post(); 
                    echo '<a href="'; 
                    the_permalink(); 
                    echo '"><div class="portfolio-item ">';
                    echo '<img src="';
                    the_field('p-img'); 
                    echo'" />';
                    echo '<span><h3>';
                    the_title(); 
                    echo '</h3><ul class="port-loop-cat">';
                    port_cat_loop();
                    echo '</ul></span></div></a>';
                
            endwhile; 
        endif; wp_reset_query();
    }

    function video_icon(){
        if (has_tag(31)) {
            include 'icons/button-play.svg';
        }
    }

    function blogroll_loop(){
        $category_query = new WP_Query( 
            array(
                'category_in' => array(18),
                'post_type'=> 'post',
                'order' => 'DESC',
                'posts_per_page' => 12,
            ) 
        );
        while ( $category_query->have_posts() ) : 
            $category_query->the_post(); 

            echo '<div class="entryroll"><div class="porfolio-cat-flex">';
            echo '<a href="';
            the_permalink();
            echo '"><div class="blogroll-img">';
            echo '<picture>';
            echo '<source srcset="';
            the_field('blogroll-img-2');
            echo '" media="(min-width: 768px)">';
            echo '<img srcset="';
            the_field('blogroll-img-1'); 
            echo '" alt="">';
            video_icon();
            echo '</picture>';
            echo '</div></a>';
            echo '<span class="blogroll-cat">';
            the_category(' ');
            echo '</span>';
            echo '<h5 class="blogroll-title">';
            echo '<a href="';
            the_permalink();
            echo '" />';
            the_title();
            echo'</a></h5>';
            echo '</div></div>';

        endwhile; 
        wp_reset_query();
    }

    function archive_blogroll() {
        echo '<a href="'; 
        the_permalink(); 
        echo '"><div class="portfolio-item ">';
        echo '<img src="';
        the_field('p-img'); 
        echo'" />';
        echo '<span><h3>';
        the_title(); 
        echo '</h3><ul class="port-loop-cat">';
        port_cat_loop();
        echo '</ul></span></div></a>';
    }
    
    function archive_portroll(){
        echo '<div class="entryroll"><div class="porfolio-cat-flex">';
        echo '<a href="';
        the_permalink();
        echo '"><div class="blogroll-img">';
        echo '<picture>';
        echo '<source srcset="';
        the_field('blogroll-img-2');
        echo '" media="(min-width: 768px)">';
        echo '<img srcset="';
        the_field('blogroll-img-1'); 
        echo '" alt="">';
        video_icon();
        echo '</picture>';
        echo '</div></a>';
        echo '<span class="blogroll-cat">';
        the_category(' ');
        echo '</span>';
        echo '<h5 class="blogroll-title">';
        echo '<a href="';
        the_permalink();
        echo '" />';
        the_title();
        echo'</a></h5>';
        echo '</div></div>';
    }

    //share buttons 

    function share_buttons() {
        echo "<ul class='share-buttons'>";
        echo "<li class='share-twitter'><a href='http://twitter.com/home?status=";
        print(urlencode(the_title()));
        echo "+";
        print(urlencode(get_permalink())); 
        echo "'>Twitter</a></li>";
        echo "<li class='share-reddit'><a href='http://www.reddit.com/submit?url=";
        print(urlencode(get_permalink()));
        echo "&title=";
        print(urlencode(the_title()));
        echo "'>Reddit</a></li>";
        echo '<li class="share-hc"><a href="https://news.ycombinator.com/submitlink?u=';
        the_permalink();
        echo '%2Fbookmarklet.html&t=';
        the_title(); 
        echo '">Hacker News</a></li>';
        echo "<li class='share-mail'><a href='mailto:?subject=";
        print(urlencode(the_title()));
        echo "&amp;body=Post from ";
        print(urlencode(get_permalink()));
        echo "' title='Share by Email'>Email</a></li>";
        echo "</ul>";

        
       
        
    }
    //single PHP (Blog Post)

    function single_page() {
        echo '<picture><source srcset="';
        the_field('blog-main-img-l'); 
        echo '"media="(min-width: 768px)">';
        echo '<source srcset="';
        the_field('blog-main-img-m');
        echo '" media="(min-width: 420px)">';
        echo '<img srcset="';
        the_field('blog-main-img-s'); 
        echo '" alt=""></picture>';
        echo '<div class="single-title">';
        the_title();
        echo '</div><div class="single-time">';
        the_time('l, F jS, Y');
        echo '</div><div class="single-category">';
        the_category(' ');
        echo '</div><div class="single-divider"></div>';
        echo '<div class="single-entry">';
        the_content();
        echo '</div>';
        echo '<div class="tags">';
        the_tags('<div class="icon-tag"></div>', '  ', ' ');
        echo '</div>';
    }

    function single_page_meta() {
        echo '<div class="single-cat-wrap">';
        share_buttons();
        echo '</div>';
        edit_post_link('Edit Bitch!','','.');
        echo '<div class="single-divider"></div>';
    }

    function cb_wrap_shortcode( $atts , $content = null ) {
        return '<div class="cb-wrap" >' . do_shortcode($content) . '</div>';
    }

    add_shortcode( 'cb_wrap', 'cb_wrap_shortcode' );

    function checkbox_shortcode() {
        return '<span class="checkbox"></span>';
    }
    add_shortcode( 'cb', 'checkbox_shortcode' );

    //Counts how many Tweets contain the word "taco"

    function utappd_beer_counter() {

        
        set_include_path(get_include_path() . PATH_SEPARATOR . '../library/');
        require_once 'Pintlabs/Service/Untappd.php';

        $config = array(
            'clientId'     => $uci,
            'clientSecret' => $ucs,
        );
        $untappd = new Pintlabs_Service_Untappd($config);
        
        try {
            $feed = $untappd->userInfo('valenzuelakyle', '');
        } 
        catch (Exception $e) {
            die($e->getMessage());
        }
        echo  $feed->response->user->stats->total_badges;
    }

    function twitter_word_count() {
    
        require_once('TwitterAPIExchange.php');
        $settings = array(
        'oauth_access_token' => $tat,
        'oauth_access_token_secret' => $ttc,
        'consumer_key' => $tk,
        'consumer_secret' => $tck
        );
        $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
        $requestMethod = "GET";
        if (isset($_GET['user']))  {$user = $_GET['user'];}  else {$user  = "kylevalenzuela";}
        if (isset($_GET['count'])) {$user = $_GET['count'];} else {$count = 3200;}
        $getfield = "?screen_name=$user&count=$count";
        $twitter = new TwitterAPIExchange($settings);
        $string = json_decode($twitter->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest(),$assoc = TRUE);
        if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
        $c = 0;
        foreach($string as $items){
            if(strpos($items['text'],'taco') !== false) {
               $c++;
            }
        }echo $c;
    }

    function insta_count() {

        $value = file_get_contents($iurl);
        $value = json_decode($value, true);
        $value = $value['data']['counts']['media'];
        echo $value;
    }

    function insta_latest_photo() {
        $value = file_get_contents($iurl);
        $value = json_decode($value, true);
        $img = $value['data']['images']['standard_resolution'];
        echo '<div class="untappd-img" style="background-image: url(' .  $img . ' )" />'; 
    }

    function get_data($url) {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: close'));
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
    
    function currently_reading_img(){ 
        
        $fileContents = file_get_contents($grurl);
        $simpleXml = simplexml_load_string($fileContents);
        echo '<img src="' . $simpleXml->reviews->review->book->image_url . '" >';
    }

    function currently_reading_text(){ 

        $fileContents = file_get_contents($grurl);
        $simpleXml = simplexml_load_string($fileContents);
        echo $simpleXml->reviews->review->book->title;
    }

?>