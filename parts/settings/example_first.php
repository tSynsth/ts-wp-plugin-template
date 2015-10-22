<?php
/*
Title: First Example
Setting: tspt_settings
Order: 20
*/
$tabprefix = 'ex_first';
    /*
     * Get an option value as follows:
     * get_option('tspt_settings', true)['ex_first_field1'];
     *
     * [List]
     * ex_first_field1
     * ...
     */
?>
<?php
piklist('field', array(
    'type' => 'textarea'
    , 'field' => $tabprefix . '_field1'
    , 'label' => __('Example Field 1', 'tspt')
    , 'description' => __('Description for Example Field 1', 'tspt')
    ,'attributes' => array(
        'rows' => 5
        ,'cols' => 50
        ,'class' => ''
    )
));
?>