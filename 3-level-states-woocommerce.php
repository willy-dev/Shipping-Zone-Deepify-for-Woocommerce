<?php
/**
 * Plugin Name: 4 Level States for Woocommerce
 * Plugin URI: https://developedbymareh.netlify.app
 * Author: Wilfred Marete
 * Author URI: https://developedbymareh.netlify.app
 * Description: Add shipping zones 4 levels deep for woocommerce.
 * Version: 0.1.0
 * License: GPL2
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: 2lsw
*/

// add basic plugin security.
defined( 'ABSPATH' ) or die;

add_filter( 'woocommerce_states', 'envisiondevs_3ld_states' );

function envisiondevs_3ld_states( $states ) {

    $map = array();

    $cities = array(
        'KE19999' => array(
            'city'     => 'Nairobi',
            'zone' => 'Town',
            'locality' => array('Parliament rd', 'Koinange str', 'Kimathi str','Moi avenue', 'Tom Mboya', 'University way', 'Harambee Avenue', 'OTC', 'City Hall way', 'Haile Selassie rd', 'Kenyatta Avenue', 'Kirinyaga rd', 'Nyamakima', 'Country Bus', 'Kamukunji', 'Gikomba')
        ),
        'KE29999' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => array('Museum Hill', 'ICEA Lion', 'Kangemi', 'The Mall', 'Sarit Center', 'The Oval', 'Kikuyu', 'Kinoo', 'Safaricom HQ3', 'Rhapta rd', 'ABC Place', 'Kangemi', 'Loresho', 'Upper Kabete', 'Uthiru', 'Kinoo', 'Muthiga', 'Thogoto', 'Gitaru', 'Sigona')
        ),
    );

    foreach ( $cities as $city => $cityValue ) {
        $map[$city] = $cityValue['city'] . ', '. $cityValue['zone'] . ', '. $cityValue['locality'];
    }
    
    $states['KE'] = $map;
    
    return $states;
}
