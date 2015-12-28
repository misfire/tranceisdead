<?php
/*
Title: 
Description: 
Taxonomy: category
Order: 0
*/

  piklist('field', array(
    'type' => 'select'
    ,'field' => 'category_template'
    ,'label' => esc_html__('Category Template', 'musik')
    ,'choices' => array_merge( array(''), array_flip (get_page_templates()))
  ));

  piklist('shared/code-locater', array(
    'location' => __FILE__
    ,'type' => 'Term Meta Section'
  ));
  
?>
