<?php
/*
Title: TSPT Example
Description: Example Field by TSPT
Post Type: post, page
Priority: high
Context: normal
Order: 2
Collapse: true
*/
$fieldprefix = 'ts_tsptexample';
$url_help = '#';
/*
 * Get any field value as follows:
 * get_post_meta($post->ID, 'ts_tsptexample_field1', true)
 *
 */
piklist('field', array(
    'type' => 'textarea'
    ,'field' => $fieldprefix . '_field1'
    ,'label' => __('Field 1', 'tspt' )
   	,'help' => __('This is a help for Field 1.' )
    ,'description' => sprintf(__('This ia a description of Field 1. See its detail at <a href="%s">here.</a>', 'tspt'), $url_help)
    ,'value' => __('This is a default test value for "ts_tsptexample_field1"', 'tspt' )
    ,'attributes' => array(
      'rows' => 10
      ,'cols' => 50
      ,'class' => ''
    )
));
?>