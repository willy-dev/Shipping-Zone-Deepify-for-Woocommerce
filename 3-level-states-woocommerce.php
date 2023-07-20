<?php
/**
 * Plugin Name: Shipping States for Woocommerce
 * Plugin URI: https://developedbymareh.netlify.app
 * Author: Wilfred Marete
 * Author URI: https://developedbymareh.netlify.app
 * Description: Add shipping zones 4 levels deep for woocommerce.
 * Version: 0.1.0
 * License: GPL2
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: states-and-cities-deepify-for-woocommerce
*/

// add basic plugin security.
defined( 'ABSPATH' ) or die('Please get authorized access');

add_filter( 'woocommerce_states', 'envisiondevs_3ld_states' );

function envisiondevs_3ld_states( $states ) {
    
    $map = array();
    $municipality = array();
    
    $towns = array(
        
        // Kenya counties.
    		'KE01' => array('city' => 'Baringo' ),
    		'KE02' => array('city' => 'Bomet'),
    		'KE03' => array('city' => 'Bungoma' ),
    		'KE04' => array('city' => 'Busia' ),
    		'KE05' => array('city' => 'Elgeyo-Marakwet' ),
    		'KE06' => array('city' => 'Embu' ),
    		'KE07' => array('city' => 'Garissa' ),
    		'KE08' => array('city' => 'Homa Bay' ),
    		'KE09' => array('city' => 'Isiolo' ),
    		'KE10' => array('city' => 'Kajiado' ),
    		'KE11' => array('city' => 'Kakamega' ),
    		'KE12' => array('city' => 'Kericho' ),
    		'KE13' => array('city' => 'Kiambu' ),
    		'KE14' => array('city' => 'Kilifi' ),
    		'KE15' => array('city' => 'Kirinyaga' ),
    		'KE16' => array('city' => 'Kisii' ),
    		'KE17' => array('city' => 'Kisumu' ),
    		'KE18' => array('city' => 'Kitui' ),
    		'KE19' => array('city' => 'Kwale' ),
    		'KE20' => array('city' => 'Laikipia' ),
    		'KE21' => array('city' => 'Lamu' ),
    		'KE22' => array('city' => 'Machakos' ),
    		'KE23' => array('city' => 'Makueni' ),
    		'KE24' => array('city' => 'Mandera' ),
    		'KE25' => array('city' => 'Marsabit' ),
    		'KE26' => array('city' => 'Meru' ),
    		'KE27' => array('city' => 'Migori' ),
    		'KE28' => array('city' => 'Mombasa' ),
    		'KE29' => array('city' => 'Murang’a' ),
    		'KE30' => array('city' => 'Nairobi County' ),
    		'KE31' => array('city' => 'Nakuru' ),
    		'KE32' => array('city' => 'Nandi' ),
    		'KE33' => array('city' => 'Narok' ),
    		'KE34' => array('city' => 'Nyamira' ),
    		'KE35' => array('city' => 'Nyandarua' ),
    		'KE36' => array('city' => 'Nyeri' ),
    		'KE37' => array('city' => 'Samburu' ),
    		'KE38' => array('city' => 'Siaya' ),
    		'KE39' => array('city' => 'Taita-Taveta' ),
    		'KE40' => array('city' => 'Tana River' ),
    		'KE41' => array('city' => 'Tharaka-Nithi' ),
    		'KE42' => array('city' => 'Trans Nzoia' ),
    		'KE43' => array('city' => 'Turkana' ),
    		'KE44' => array('city' => 'Uasin Gishu'),
    		'KE45' => array('city' => 'Vihiga' ),
    		'KE46' => array('city' => 'Wajir' ),
    		'KE47' => array('city' => 'West Pokot' ),

    );

    $cities = array(
        
        // Town addresses for Nairobi
        
        'KE300' => array(
            'city'     => 'Nairobi',
            'zone' => 'Town',
            'locality' => 'Parliament rd'
            ),
        'KE301' => array(
            'city'     => 'Nairobi',
            'zone' => 'Town',
            'locality' => 'Koinange str'
            ),
        'KE302' => array(
            'city'     => 'Nairobi',
            'zone' => 'Town',
            'locality' => 'Kimathi str'
            ),
        'KE303' => array(
            'city'     => 'Nairobi',
            'zone' => 'Town',
            'locality' => 'Moi avenue'
            ),
        'KE304' => array(
            'city'     => 'Nairobi',
            'zone' => 'Town',
            'locality' => 'Tom Mboya'
            ),
        'KE305' => array(
            'city'     => 'Nairobi',
            'zone' => 'Town',
            'locality' => 'University way'
            ),
        'KE306' => array(
            'city'     => 'Nairobi',
            'zone' => 'Town',
            'locality' => 'Harambee Avenue'
            ),
        'KE307' => array(
            'city'     => 'Nairobi',
            'zone' => 'Town',
            'locality' => 'OTC'
            ),
        'KE308' => array(
            'city'     => 'Nairobi',
            'zone' => 'Town',
            'locality' => 'City Hall way'
            ),
        
        'KE310' => array(
            'city'     => 'Nairobi',
            'zone' => 'Town',
            'locality' => 'Haile Selassie rd'
            ),
        'KE311' => array(
            'city'     => 'Nairobi',
            'zone' => 'Town',
            'locality' => 'Kenyatta Avenue'
            ),
        'KE312' => array(
            'city'     => 'Nairobi',
            'zone' => 'Town',
            'locality' => 'Kirinyaga rd'
            ),
        'KE313' => array(
            'city'     => 'Nairobi',
            'zone' => 'Town',
            'locality' => 'Nyamakima'
            ),
        'KE314' => array(
            'city'     => 'Nairobi',
            'zone' => 'Town',
            'locality' => 'Country Bus'
            ),
        'KE315' => array(
            'city'     => 'Nairobi',
            'zone' => 'Town',
            'locality' => 'Kamukunji'
            ),
        'KE316' => array(
            'city'     => 'Nairobi',
            'zone' => 'Town',
            'locality' => 'Gikomba'
            ),
            
        // Waiyaki Way addresses for Nairobi   
        
        'KE400' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'Museum Hill'
            ),
        'KE401' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'ICEA Lion'
            ),
        'KE402' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'Westlands'
            ),
        'KE403' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'The Mall'
            ),
        'KE404' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'Sarit Center'
            ),
        'KE405' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'The Oval'
            ),
        'KE406' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'Kikuyu'
            ),
        'KE407' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'Kinoo'
            ),
        'KE408' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'Safaricom HQ3'
            ),
        'KE409' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'Rhapta rd'
            ),
        'KE410' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'ABC Place'
            ),
        'KE411' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'Kangemi'
            ),
        'KE412' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'Loresho'
            ),
        'KE413' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'Upper Kabete'
            ),
        'KE414' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'Uthiru'
            ),
        'KE415' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'Muthiga'
            ),
        'KE416' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'Thogoto'
            ),
        'KE417' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'Gitaru'
            ),
        'KE418' => array(
            'city'     => 'Nairobi',
            'zone' => 'Waiyaki Way',
            'locality' => 'Sigona'
            ),
        
        // Kiambu Road addresses for Nairobi
        
        'KE500' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kiambu Road',
                'locality' => 'CID Hqtrs'
            ),
            
            'KE501' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kiambu Road',
                'locality' => 'Sharks Place'
            ),
            
            'KE502' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kiambu Road',
                'locality' => 'Karura Forest'
            ),
            
            'KE503' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kiambu Road',
                'locality' => 'Muthaiga'
            ),
            
            'KE504' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kiambu Road',
                'locality' => 'Ridgeways'
            ),
            
            'KE505' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kiambu Road',
                'locality' => 'Fourways'
            ),
            
            'KE506' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kiambu Road',
                'locality' => 'Widsor Hotel'
            ),
            
            'KE507' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kiambu Road',
                'locality' => 'Quickmart'
            ),
            
            'KE508' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kiambu Road',
                'locality' => 'Thindigua'
            ),
            
            'KE509' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kiambu Road',
                'locality' => 'Kiambu Town'
            ),
            
            'KE510' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kiambu Road',
                'locality' => 'Tatu City'
            ),
            
            // Ngong Road addresses for Nairobi
            
            'KE600' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Upper Hill'
            ),

            'KE601' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Traffic area'
            ),
            
            'KE602' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'KNH'
            ),
            
            'KE603' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Nairobi Hospital'
            ),
            
            'KE604' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Daystar Uni'
            ),
            
            'KE605' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Coptic Hospital'
            ),
            
            'KE606' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Prestige'
            ),
            
            'KE607' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Adams Arcade'
            ),
            
            'KE608' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Kibera'
            ),
            
            'KE609' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Jamhuri Estate'
            ),
            
            'KE610' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Junction Mall'
            ),
            
            'KE611' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Dagoretti Corner'
            ),
            
            'KE612' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Dagoretti Market'
            ),
            
            'KE613' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Woodley'
            ),
            
            'KE614' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Race Course'
            ),
            
            'KE615' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Show Ground'
            ),
            
            'KE616' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Nrb Business Park'
            ),
            
            'KE617' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Karen'
            ),
            
            'KE618' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'The Hub'
            ),
            
            'KE619' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Shade Hotel'
            ),
            
            'KE620' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Bulbul'
            ),
            
            'KE621' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Ngong Town'
            ),
            
            'KE622' => array(
                'city'     => 'Nairobi',
                'zone' => 'Ngong Road',
                'locality' => 'Kiserian'
            ),
            
            // Langata Road addresses for Nairobi
            
            
            'KE700' => array(
                'city'     => 'Nairobi',
                'zone' => 'Langata Road',
                'locality' => 'Highway Mall'
            ),
            
            'KE701' => array(
                'city'     => 'Nairobi',
                'zone' => 'Langata Road',
                'locality' => 'Nyayo Stadium'
            ),
            
            'KE702' => array(
                'city'     => 'Nairobi',
                'zone' => 'Langata Road',
                'locality' => 'Nairobi West'
            ),
            
            'KE703' => array(
                'city'     => 'Nairobi',
                'zone' => 'Langata Road',
                'locality' => 'Madaraka'
            ),
            
            'KE704' => array(
                'city'     => 'Nairobi',
                'zone' => 'Langata Road',
                'locality' => 'Tmall'
            ),
            
            'KE705' => array(
                'city'     => 'Nairobi',
                'zone' => 'Langata Road',
                'locality' => 'Wilson Airport'
            ),
            
            'KE706' => array(
                'city'     => 'Nairobi',
                'zone' => 'Langata Road',
                'locality' => 'Carnivore'
            ),
            
            'KE707' => array(
                'city'     => 'Nairobi',
                'zone' => 'Langata Road',
                'locality' => 'Langata'
            ),
            
            'KE708' => array(
                'city'     => 'Nairobi',
                'zone' => 'Langata Road',
                'locality' => 'Bomas of Kenya'
            ),
            
            'KE709' => array(
                'city'     => 'Nairobi',
                'zone' => 'Langata Road',
                'locality' => 'Galleria Mall'
            ),
            
            'KE710' => array(
                'city'     => 'Nairobi',
                'zone' => 'Langata Road',
                'locality' => 'Saiffe Park'
            ),
            
            'KE711' => array(
                'city'     => 'Nairobi',
                'zone' => 'Langata Road',
                'locality' => 'Banda School'
            ),
            
            'KE712' => array(
                'city'     => 'Nairobi',
                'zone' => 'Langata Road',
                'locality' => 'Ongata Rongai'
            ),
            
            'KE713' => array(
                'city'     => 'Nairobi',
                'zone' => 'Langata Road',
                'locality' => 'JKUAT Karen'
            ),
            
            'KE714' => array(
                'city'     => 'Nairobi',
                'zone' => 'Langata Road',
                'locality' => 'Hardy'
            ),
            
            'KE715' => array(
                'city'     => 'Nairobi',
                'zone' => 'Langata Road',
                'locality' => 'Karen Hospital'
            ),
            
            'KE716' => array(
                'city'     => 'Nairobi',
                'zone' => 'Langata Road',
                'locality' => 'Karen'
            ),
            
            // Lower Kabete Rd addresses for Nairobi
            
            'KE800' => array(
                'city'     => 'Nairobi',
                'zone' => 'Lower Kabete Road',
                'locality' => 'Spring Valley'
            ),
            
            'KE801' => array(
                'city'     => 'Nairobi',
                'zone' => 'Lower Kabete Road',
                'locality' => 'Lower Kabete'
            ),
            
            'KE802' => array(
                'city'     => 'Nairobi',
                'zone' => 'Lower Kabete Road',
                'locality' => 'Kitusuru'
            ),
            
            'KE803' => array(
                'city'     => 'Nairobi',
                'zone' => 'Lower Kabete Road',
                'locality' => 'Mwimuto'
            ),
            
            'KE804' => array(
                'city'     => 'Nairobi',
                'zone' => 'Lower Kabete Road',
                'locality' => 'Kingeero'
            ),
            
            'KE805' => array(
                'city'     => 'Nairobi',
                'zone' => 'Lower Kabete Road',
                'locality' => 'Wangige'
            ),
            
            // Limuru Road addresses for Nairobi
            
            'KE900' => array(
                'city'     => 'Nairobi',
                'zone' => 'Limuru Road',
                'locality' => 'Fig Tree'
            ),
            
            'KE901' => array(
                'city'     => 'Nairobi',
                'zone' => 'Limuru Road',
                'locality' => 'Jamhuri Sec'
            ),
            
            'KE902' => array(
                'city'     => 'Nairobi',
                'zone' => 'Limuru Road',
                'locality' => 'Stima Plaza'
            ),
            
            'KE903' => array(
                'city'     => 'Nairobi',
                'zone' => 'Limuru Road',
                'locality' => 'Parklands'
            ),
            
            'KE904' => array(
                'city'     => 'Nairobi',
                'zone' => 'Limuru Road',
                'locality' => 'City Park'
            ),
            
            'KE905' => array(
                'city'     => 'Nairobi',
                'zone' => 'Limuru Road',
                'locality' => 'Highridge'
            ),
            
            'KE906' => array(
                'city'     => 'Nairobi',
                'zone' => 'Limuru Road',
                'locality' => 'Muthaiga mini'
            ),
            
            'KE907' => array(
                'city'     => 'Nairobi',
                'zone' => 'Limuru Road',
                'locality' => 'Karura Forest'
            ),
            
            'KE908' => array(
                'city'     => 'Nairobi',
                'zone' => 'Limuru Road',
                'locality' => 'UN Gigiri'
            ),
            
            'KE909' => array(
                'city'     => 'Nairobi',
                'zone' => 'Limuru Road',
                'locality' => 'Village Market'
            ),
            
            'KE910' => array(
                'city'     => 'Nairobi',
                'zone' => 'Limuru Road',
                'locality' => 'Rosslyn'
            ),
            
            'KE911' => array(
                'city'     => 'Nairobi',
                'zone' => 'Limuru Road',
                'locality' => 'Runda'
            ),
            
            'KE912' => array(
                'city'     => 'Nairobi',
                'zone' => 'Limuru Road',
                'locality' => 'Ruaka'
            ),
            
            'KE913' => array(
                'city'     => 'Nairobi',
                'zone' => 'Limuru Road',
                'locality' => 'Ndenderu'
            ),
            
            'KE914' => array(
                'city'     => 'Nairobi',
                'zone' => 'Limuru Road',
                'locality' => 'Muchatha'
            ),
            
            'KE915' => array(
                'city'     => 'Nairobi',
                'zone' => 'Limuru Road',
                'locality' => 'Banana'
            ),
            
            // Thika Road addresses for Nairobi
            
            
            'KE100' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Ngara'
            ),
            
            'KE101' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Kariokor'
            ),
            
            'KE102' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Pangani'
            ),
            
            'KE103' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Muthaiga'
            ),
            
            'KE104' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Eastliegh'
            ),
            
            'KE105' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'NYS'
            ),
            
            'KE106' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Survey'
            ),
            
            'KE107' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Utalii'
            ),
            
            'KE108' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Allsops'
            ),
            
            'KE109' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Baba Dogo'
            ),
            
            'KE110' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Roasters'
            ),
            
            'KE111' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Garden City'
            ),
            
            'KE112' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Safari Park'
            ),
            
            'KE113' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'TRM'
            ),
            
            'KE114' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Zimmerman'
            ),
            
            'KE115' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Thome'
            ),
            
            'KE116' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Roysambu'
            ),
            
            'KE117' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Marurui'
            ),
            
            'KE118' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Githurai 44/45'
            ),
            
            'KE119' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Mwihoko Githu'
            ),
            
            'KE120' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Kasarani Centre'
            ),
            
            'KE121' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Kasarani Season'
            ),
            
            'KE122' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Kasarani Sunton'
            ),
            
            'KE123' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Kasarani Hunter'
            ),
            
            'KE124' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Mwiki'
            ),
            
            'KE125' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Kahawa West/Sukari/Wendani'
            ),
            
            'KE126' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Ruiru'
            ),
            
            'KE127' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Kimbo Ruiru'
            ),
            
            'KE128' => array(
                'city'     => 'Nairobi',
                'zone' => 'Thika Road',
                'locality' => 'Juja'
            ),
            
            // Kilimani addresses for Nairobi
            
             
            'KE200' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kilimani',
                'locality' => 'Milimani Area'
            ),
             
            'KE201' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kilimani',
                'locality' => 'Hurlinghum'
            ),
             
            'KE202' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kilimani',
                'locality' => 'Yaya'
            ),
             
            'KE203' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kilimani',
                'locality' => 'Kileleshwa'
            ),
             
            'KE204' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kilimani',
                'locality' => 'Valley Arcade'
            ),
             
            'KE205' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kilimani',
                'locality' => 'Lavington'
            ),
             
            'KE206' => array(
                'city'     => 'Nairobi',
                'zone' => 'Kilimani',
                'locality' => 'Kawangware'
            ),
            
            //Mombasa Road addresses for Nairobi
            
            'KE1000' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Nyayo Stadium'
            ),
            
            'KE1001' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'South B'
            ),
            
            'KE1002' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Capital Centre'
            ),
            
            'KE1003' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'South C'
            ),
            
            'KE1004' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Belle View'
            ),
            
            'KE1005' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Airtel'
            ),
            
            'KE1006' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'DTB'
            ),
            
            'KE1007' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Sameerpark'
            ),
            
            'KE1008' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Panari'
            ),
            
            'KE1009' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'GM'
            ),
            
            'KE1010' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Industrial Area'
            ),
            
            'KE1011' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Imara Daima'
            ),
            
            'KE1012' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Cabanas'
            ),
            
            'KE1013' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Pipeline'
            ),
            
            'KE1014' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Emba Village'
            ),
            
            'KE1015' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Baraka Estate'
            ),
            
            'KE1016' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Kenya Airways'
            ),
            
            'KE1017' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Utawala'
            ),
            
            'KE1018' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Githunguri'
            ),
            
            'KE1019' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'JKIA'
            ),
            
            'KE1020' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Syokimau'
            ),
            
            'KE1021' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'SGR'
            ),
            
            'KE1022' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Mlolongo'
            ),
            
            'KE1023' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Signature Mall'
            ),
            
            'KE1024' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Athi River'
            ),
            
            'KE1025' => array(
                'city'     => 'Nairobi',
                'zone' => 'Mombasa Road',
                'locality' => 'Kitengela'
            ),
            
            // Jogoo Road addresses for Nairobi
            
            'KE1100' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'City Stadium'
            ),
            
            'KE1101' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Burma'
            ),
            
            'KE1102' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Shauri Moyo'
            ),
            
            'KE1103' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Bahati'
            ),
            
            'KE1104' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Huruma'
            ),
            
            'KE1105' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Buruburu'
            ),
            
            'KE1106' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Donholm'
            ),
            
            'KE1107' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Umoja'
            ),
            
            'KE1108' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Nasra'
            ),
            
            'KE1109' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Kariobangi North'
            ),
            
            'KE1110' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Kariobangi South'
            ),
            
            'KE1111' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Nyayo Estate'
            ),
            
            'KE1112' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Fedha'
            ),
            
            'KE1113' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Kayole'
            ),
            
            'KE1114' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Kayole Junction'
            ),
            
            'KE1115' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Dandora'
            ),
            
            'KE1116' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Lucky Summer'
            ),
            
            'KE1117' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Komarock'
            ),
            
            'KE1118' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Saika'
            ),
            
            'KE1119' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Njiru'
            ),
            
            'KE1120' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Chokaa'
            ),
            
            'KE1121' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Ruai'
            ),
            
            'KE1122' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Kamulu'
            ),
            
            'KE1123' => array(
                'city'     => 'Nairobi',
                'zone' => 'Jogoo Road',
                'locality' => 'Joska'
            ),
            
            
            
    );
    
    
    foreach ( $towns as $town => $townValue ){
        
        $municipality[$town] = $townValue['city'];
        
    }

    foreach ( $cities as $city => $cityValue ) {
        
        
        $map[$city] = $cityValue['city'] . ', '. $cityValue['zone'] . ', '. $cityValue['locality']; 
        
        
    }
    
    $states['KE'] = $map + $municipality;

    return $states;

}
