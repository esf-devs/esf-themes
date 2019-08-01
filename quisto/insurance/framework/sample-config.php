<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "insurance_option";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'insurance_option',
        'use_cdn' => TRUE,
        'display_name'     => $theme->get('Name'),
        'display_version'  => $theme->get('Version'),
        'page_title' => 'Insurance Options',
        'update_notice' => FALSE,
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Insurance Options',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer' => FALSE,
        'dev_mode'   => false,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_color' => 'lightgray',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );    

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => esc_html__( 'Theme Information 1', 'modis' ),
            'content' => esc_html__( '<p>This is the tab content, HTML is allowed.</p>', 'modis' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => esc_html__( 'Theme Information 2', 'modis' ),
            'content' => esc_html__( '<p>This is the tab content, HTML is allowed.</p>', 'modis' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = esc_html__( '<p>This is the sidebar content, HTML is allowed.</p>', 'modis' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    // ACTUAL DECLARATION OF SECTIONS    
    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-stackoverflow',
        'title' => __('Miscellaneous Settings', 'insurance'),
        'fields' => array(
            array(
                'id'       => 'search-switch',
                'type'     => 'switch', 
                'title'    => __('Search button on header Off?', 'insurance'),
                'subtitle' => __('It is being used on header, if you don not want to use, you can disable it.', 'insurance'),
                'default'  => true,
            ),  
            array(
                'id'       => 'login-switch',
                'type'     => 'switch', 
                'title'    => __('Login button on header Off?', 'insurance'),
                'subtitle' => __('It is being used on header, if you don not want to use, you can disable it.', 'insurance'),
                'default'  => true,
            ),  
            array(
                'id'       => 'quote-switch',
                'type'     => 'switch', 
                'title'    => __('Quote button on header Off?', 'insurance'),
                'subtitle' => __('It is being used on header, if you don not want to use, you can disable it.', 'insurance'),
                'default'  => true,
            ),                            
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-picture',
        'title' => __('Logo & Favicon Settings', 'insurance'),
        'fields' => array(  
            array(
                'id' => 'favicon',
                'type' => 'media',
                'title' => __('Custom Favicon', 'insurance'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('Upload your Favicon.', 'insurance'),
                'subtitle' => __('', 'insurance'),
                'default' => array('url' => get_template_directory_uri().'/images/favicon.ico'),
            ),
            array(
                'id' => 'logo',
                'type' => 'media',
                'title' => __('Custom logo', 'insurance'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('Upload your logo.', 'insurance'),
                'subtitle' => __('Upload your logo', 'insurance'),
                'default' => array('url' => get_template_directory_uri().'/images/logo.png'),
            ),          
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-qrcode',
        'title' => __('header Settings', 'insurance'),
        'fields' => array(
             array(
                'id' => 'phone',
                'type' => 'text',
                'title' => __('Number Phone', 'insurance'),
                'subtitle' => __('Input Phone Title', 'insurance'),                        
                'default' => '1-800-837-5254'
            ),                              
            array(
                'id' => 'phone_2',
                'type' => 'text',
                'title' => __('Number Phone landing page', 'insurance'),
                'subtitle' => __('Input Phone Title', 'insurance'),                        
                'default' => '1-800-123-4567'
            ),                              
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-blogger',
        'title' => __('Blog Settings', 'insurance'),
        'fields' => array(
            array(
                'id' => 'blog_excerpt',
                'type' => 'text',
                'title' => __('blog custom excerpt', 'insurance'),
                'subtitle' => __('Input Blog ', 'insurance'),                        
                'default' => '25'
            ),  
            array(
                'id' => 'the_blog',
                'type' => 'text',
                'title' => __('top blog', 'insurance'),
                'subtitle' => __('Input Blog ', 'insurance'),                        
                'default' => 'Blog'
            ),  
            array(
                'id' => 'the_blog-2',
                'type' => 'text',
                'title' => __('top blog 2', 'insurance'),
                'subtitle' => __('Input Blog 2 ', 'insurance'),                        
                'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit inte lacinia malesuada justo sit amet vestibulum orci tristiquen nunc nonec ultricies enimullam lorem est.'
            ),  
            array(
                'id' => 'the_blog_single',
                'type' => 'text',
                'title' => __('top blog single', 'insurance'),
                'subtitle' => __('Input Blog ', 'insurance'),
                
                'default' =>'Blog Detail'
            ),                      
            array(
                'id' => 'blog_thumbnail',
                'type' => 'media',
                'title' => __('Blog Background Top Page', 'insurance'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('Upload your Blog Background Top Page.', 'insurance'),
                'subtitle' => __('Upload your Blog Background Top Page', 'insurance'),
                'default' => array('url' => get_template_directory_uri().'/images/page-head-agent.jpg'),                        
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-leaf',
        'title' => __('Insurance Settings', 'insurance'),
        'fields' => array(            
            array(
                'id' => 'archive_insurance_title',
                'type' => 'text',
                'title' => __('Archive title', 'insurance'),
                'subtitle' => __('Input archive title', 'insurance'),                        
                'default' => 'INSURANCE'
            ),  
            array(
                'id' => 'archive_insurance_desc',
                'type' => 'textarea',
                'title' => __('Archive Description', 'insurance'),
                'subtitle' => __('Input archive description', 'insurance'),                        
                'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit inte lacinia malesuada justo sit amet vestibulum orci tristiquen nunc nonec ultricies enimullam lorem est.'
            ),                                 
            array(
                'id' => 'archive_insurance_thumbnail',
                'type' => 'media',
                'title' => __('Archive Insurance Background Top Page', 'insurance'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('Upload your Archive Insurance Background Top Page.', 'insurance'),
                'subtitle' => __('Upload your Archive Insurance Background Top Page', 'insurance'),
                'default' => array('url' => get_template_directory_uri().'/images/page-head-agent.jpg'),                        
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-group',
        'title' => __('social Settings', 'insurance'),
        'fields' => array(
            array(
                'id' => 'facebook',
                'type' => 'text',
                'title' => __('Facebook Url', 'insurance'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => 'https://www.facebook.com/',
            ),
            array(
                'id' => 'google',
                'type' => 'text',
                'title' => __('Google+ Url', 'insurance'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => 'https://plus.google.com',
            ),
            array(
                'id' => 'twitter',
                'type' => 'text',
                'title' => __('Twitter Url', 'insurance'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => 'https://twitter.com/',
            ),
            array(
                'id' => 'rss',
                'type' => 'text',
                'title' => __('rss Url', 'insurance'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '',
            ),
            array(
                'id' => 'github',
                'type' => 'text',
                'title' => __('Github Url', 'insurance'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),
            array(
                'id' => 'youtube',
                'type' => 'text',
                'title' => __('Youtube Url', 'insurance'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => 'https://youtube.com/',
            ),
            array(
                'id' => 'linkedin',
                'type' => 'text',
                'title' => __('Linkedin Url', 'insurance'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => 'https://www.linkedin.com/',
            ),
            array(
                'id' => 'dribbble',
                'type' => 'text',
                'title' => __('Dribbble Url', 'insurance'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => 'https://www.dribbble.com/',
            ),
            array(
                'id' => 'behance',
                'type' => 'text',
                'title' => __('Behance Url', 'insurance'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),
            array(
                'id' => 'instagram',
                'type' => 'text',
                'title' => __('Instagram Url', 'insurance'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => 'https://www.instagram.com/'
            ),
            array(
                'id' => 'flickr',
                'type' => 'text',
                'title' => __('flickr Url', 'insurance'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),
            array(
                'id' => 'skype',
                'type' => 'text',
                'title' => __('Skype Url', 'insurance'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),      
            
         )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-credit-card',
        'title' => __('Footer Settings', 'insurance'),
        'fields' => array(  

            array(
                'id'       => 'top-footer',
                'type'     => 'switch', 
                'title'    => __('Newsletter footer?', 'insurance'),
                'subtitle' => __('Look, it\'s on!', 'insurance'),
                'default'  => true,
            ),  
            
            array(
                'id' => 'newsletter',
                'type' => 'text',
                'title' => __('Newsletter text', 'insurance'),
                'subtitle' => __('Add text', 'insurance'),
                'default' => '',
            ),
            
            array(
                'id' => 'footer_text',
                'type' => 'editor',
                'title' => __('Footer Text Left', 'insurance'),
                'subtitle' => __('Copy left Text', 'insurance'),
                'default' => 'Copyright © 2018. Peace Insurance Company.  All Rights Reserved.',
            ),
           
            array(
                'id' => 'footer_landing',
                'type' => 'editor',
                'title' => __('Footer Text Landing', 'insurance'),
                'subtitle' => __('Copy left Text', 'insurance'),
                'default' => 'Peace Insurance © 2018. All Rights Reserved.',
            ),
            
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-graph',
        'title' => __('404 Settings', 'insurance'),
        'fields' => array(
             array(
                'id' => '404_title_top',
                'type' => 'text',
                'title' => __('404 top Title', 'insurance'),
                'subtitle' => __('Input 404 Title', 'insurance'),
                
                'default' => '404'
            ),                  
            array(
                'id' => '404_title',
                'type' => 'text',
                'title' => __('404 Title', 'insurance'),
                'subtitle' => __('Input 404 Title', 'insurance'),
                
                'default' => 'Opps, sorry we can’t find this page!'
            ),                          
             array(
                'id' => '404_content',
                'type' => 'editor',
                'title' => __('404 Content', 'insurance'),
                'subtitle' => __('Enter 404 Content', 'insurance'),
                
                'default' => 'Etiam nec facilisis urna nunc ut tincidunt elit vestibulum in accumsan vive dictum condimentum molestie proin id viverra velit.'
            ),      
             array(
                'id' => '404_image',
                'type' => 'media',
                'title' => __('thumbnail 404', 'insurance'),                        
                'desc' => __('Text Button Go To Home.', 'insurance'),
                'subtitle' => __('Text Button Go To Home', 'insurance'),
                'default' => '',
                'default' => array('url' => get_template_directory_uri().'/images/error-pic.png'), 
            ),  
            array(
                'id' => 'back_404',
                'type' => 'text',
                'title' => __('Button Back Home', 'insurance'),                        
                'desc' => __('Text Button Go To Home.', 'insurance'),
                'subtitle' => __('Text Button Go To Home', 'insurance'),
                'default' => 'Back To Home',
            ),                  
         )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-website',
        'title' => __('Styling Options', 'insurance'),
        'fields' => array(
            array(
                'id' => 'main-color',
                'type' => 'color',
                'title' => __('Theme Main Color', 'insurance'),
                'subtitle' => __('Pick the main color for the theme (default: #1757b8).', 'insurance'),
                'default' => '#1757b8',
                'validate' => 'color',
            ),  
            array(
                'id' => 'second-color',
                'type' => 'color',
                'title' => __('Theme main Color 2', 'insurance'),
                'subtitle' => __('Pick the main color for the theme (default: #ff7841).', 'insurance'),
                'default' => '#ff7841',
                'validate' => 'color',
            ),
            array(
                'id' => 'hover-color',
                'type' => 'color',
                'title' => __('Theme main Color 3', 'insurance'),
                'subtitle' => __('Pick the main color for the theme (default: #fb5528).', 'insurance'),
                'default' => '#fb5528',
                'validate' => 'color',
            ),
            array(
                'id' => 'background_footer',
                'type' => 'color',
                'title' => __('Footer Background Color', 'insurance'),
                'subtitle' => __('Pick a background color for the footer (default: #303236).', 'insurance'),
                'default' => '#303236',
                'validate' => 'color',
            ),
            array(
                'id' => 'background_footer2',
                'type' => 'color',
                'title' => __('Footer Bottom Background Color', 'insurance'),
                'subtitle' => __('Pick a background color for the footer bottom (default: #24262a).', 'insurance'),
                'default' => '#24262a',
                'validate' => 'color',
            ),
            array(
                'id' => 'color_footer',
                'type' => 'color',
                'title' => __('Footer  Color', 'insurance'),
                'subtitle' => __('Pick a  color for the footer (default: #62656a).', 'insurance'),
                'default' => '#62656a',
                'validate' => 'color',
            ),
            
            array(
                'id' => 'body-font2',
                'type' => 'typography',
                'output' => array('body'),
                'title' => __('Body Font', 'insurance'),
                'subtitle' => __('Specify the body font properties.', 'insurance'),
                'google' => true,
                'default' => array(
                    'color' => '',
                    'font-size' => '',
                    'line-height' => '',
                    'font-family' => '',
                    'font-weight' => ''
                ),
            ),
             array(
                'id' => 'custom-css',
                'type' => 'ace_editor',
                'title' => __('CSS Code', 'insurance'),
                'subtitle' => __('Paste your CSS code here.', 'insurance'),
                'mode' => 'css',
                'theme' => 'monokai',
                'desc' => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default' => "#header{\nmargin: 0 auto;\n}"
            ),
        )
    ) );

    /*
     * <--- END SECTIONS
     */