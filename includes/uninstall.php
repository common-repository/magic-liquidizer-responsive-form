<?php
defined( 'ABSPATH' ) OR exit;

/*
/--------------------------------------------------------------------\
|                                                                    |
| License: GLP Version 3                                             |
|                                                                    |
| Magic Liquidizer Responsive Form - Make HTML Form Responsive.    |
| Copyright (C) 2014, Elvin Deza,                                    |
| http://innovedesigns.com/                                          |
| All rights reserved.                                               |
|                                                                    |
| By using the software, you agree to be bound by the terms of		 | 		
| this license.														 |
| 																	 |
|                                                                    |
\--------------------------------------------------------------------/
*/

function liquidizer_form_uninstall() {

if ( ! current_user_can( 'activate_plugins' ) )
        return;

// For Single site
if ( !is_multisite() ) {
    delete_option('liquidizer_lite_wp_form');
	delete_option('liquidizer_lite_wp_which_form_element');
	delete_option('liquidizer_lite_wp_form_width');
} else {
    delete_site_option('liquidizer_lite_wp_form');
    delete_site_option('liquidizer_lite_wp_which_form_element');
    delete_site_option('liquidizer_lite_wp_form_width');
}

}