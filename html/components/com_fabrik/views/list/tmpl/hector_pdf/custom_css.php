<?php
/**
 * Fabrik List Template: Default Custom CSS
 *
 * @package     Joomla
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005 Fabrik. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 */

/**
* If you need to make small adjustments or additions to the CSS for a Fabrik
* list template, you can create a custom_css.php file, which will be loaded after
* the main template_css.php for the template.
*
* This file will be invoked as a PHP file, so the list ID
* can be used in order to narrow the scope of any style changes.  You do
* this by prepending #listform_$c to any selectors you use.  This will become
* (say) #listform_12, owhich will be the HTML ID of your list on the page.
*
* See examples below, which you should remove if you copy this file.
*
* Don't edit anything outside of the BEGIN and END comments.
*
* For more on custom CSS, see the Wiki at:
*
* http://fabrikar.com/wiki/index.php/3.x_Form_Templates#Custom_CSS
*
* NOTE - for backward compatibility with Fabrik 2.1, and in case you
* just prefer a simpler CSS file, without the added PHP parsing that
* allows you to be be more specific in your selectors, we will also include
* a custom.css we find in the same location as this file.
*
*/

header('Content-type: text/css');
$c = $_REQUEST['c'];
$buttonCount = (int) $_REQUEST['buttoncount'];
$buttonTotal = $buttonCount === 0 ? '100%' : 30 * $buttonCount ."px";
echo "

#{$form} .icon-checkmark:before {content:'yes'}
#{$form} .icon-remove:before {content:'no'}

* {font-family:arial!important}

body {
	background-image: url('images/logos/Element_abgesoftet.jpg');
	background-position: bottom right;
	background-repeat: no-repeat;
}

#listform_7_com_fabrik_7 .oddRow1 {
	background-color: rgba(220,220,220,0.5);
}
#listform_7_com_fabrik_7 .oddRow0 {
	background-color: unset !important;
}
#listform_7_com_fabrik_7 th, #listform_7_com_fabrik_7 .fabrik_groupheading, #listform_7_com_fabrik_7 .fabrik___heading {
	background: rgba(220,220,220,0.5) repeat scroll 0px 0px;
}

";?>