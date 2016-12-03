<?php 
class Walker_Simple_Example extends Walker {
 
    // Set the properties of the element which give the ID of the current item and its parent
    var $db_fields = array( 'parent' => 'parent_id', 'id' => 'object_id' );
 
    // Displays start of a level. E.g '<ul>'
    // @see Walker::start_lvl()
    function start_lvl(&$output, $depth=0, $args=array()) {
        $output .= "\n<ul>\n";
    }
 
    // Displays end of a level. E.g '</ul>'
    // @see Walker::end_lvl()
    function end_lvl(&$output, $depth=0, $args=array()) {
        $output .= "</ul>\n";
    }
 
    // Displays start of an element. E.g '<li> Item Name'
    // @see Walker::start_el()
    function start_el(&$output, $item, $depth=0, $args=array()) {
        $output.="<li>".esc_attr($item->label);
    }
 
    // Displays end of an element. E.g '</li>'
    // @see Walker::end_el()
    function end_el(&$output, $item, $depth=0, $args=array()) {
        $output .= "</li>\n";
    }
}
$elements=array(); // Array of elements
echo Walker_Simple_Example::walk($elements);
?>