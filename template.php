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

    //drupal_add_js('//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js', 'external', array('weight' => 2));

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
    $variables['imagesPath'] = $variables['base_path'] . $variables['directory'] . '/images/';

    if (!empty($variables['page']['sidebar_first'])) {
        $variables['contentlayout'] = 'col-md-9';
        $variables['sidebarfirst'] = 'col-md-3';
    }
    else {
        $variables['contentlayout'] = 'col-md-12';
    }
}

/**
 * @param $variables
 */
function webshopchartage_preprocess_node(&$variables){
    $variables['addToCart'] = '<input type="submit" class="btn btn-cart form-submit" ';
    $variables['addToCart'].= 'value="Add to cart"';
    $variables['addToCart'].= '>';

    if (module_exists('uc_product') && uc_product_is_product($variables)){
        $variables['uc_image'] = drupal_render($variables['content']['uc_product_image']);
        $variables['uc_sellPrice'] = drupal_render($variables['content']['sell_price']);
        $variables['uc_body'] = drupal_render($variables['content']['body']);
        $variables['uc_addCart'] = drupal_render($variables['content']['add_to_cart']);
    }
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