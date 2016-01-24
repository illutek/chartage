<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 26/12/2015
 * Time: 14:17
 */

/**
* Impelements hook_preprocess_html().
 */
function webshopchartage_preprocess_html(&$variables)
{
    // Add conditional stylesheets for IE
    drupal_add_css(path_to_theme() . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
    drupal_add_css(path_to_theme() . '/css/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 6', '!IE' => FALSE), 'preprocess' => FALSE));

    //Add external .js and .css
    drupal_add_js('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', 'external', array('weight' => 1));

    drupal_add_css('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array('type' => 'external'));

    // Adding viewport to HTML Header.
    $viewport = array(
        '#type' => 'html_tag',
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'viewport',
            'content' => 'width=device-width, initial-scale=1, maximum-scale=1')
    );
    drupal_add_html_head($viewport, 'viewport');
}

/**
 * Impelements hook_preprocess_page().
 * wil om een of andere rede niet doen wat het zou moeten doen
 */
function webshopchartage_preprocess_page(&$variables)
{
    $variables['images_path'] = $variables['base_path'] . $variables['directory'] . '/images/';
}

/**
 * @param $variables
 */
function webshopchartage_preprocess_node(&$variables){

}

/**
 * @param $variables
 */
function webshopchartage_preprocess_button(&$variables)
{
    $variables['element']['#attributes']['class'] = array();
    $variables['element']['#attributes']['class'][] = 'btn';

    if (stristr($variables['element']['#value'], 'Add to cart') !== FALSE) {
        $variables['element']['#attributes']['class'][] = 'btn-cart';
    }
    if (stristr($variables['element']['#value'], 'Cancel') !== FALSE) {
        $variables['element']['#attributes']['class'][] = 'btn-cancel';
    }
}