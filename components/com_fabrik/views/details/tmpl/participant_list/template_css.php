<?php
/**
 * Contacts Custom Form Template: CSS
 *
 * @package     Joomla
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005 Fabrik. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @since       3.0
 */
 ?>
<?php
header('Content-type: text/css');
$c = (int) $_REQUEST['c'];
$view = isset($_REQUEST['view']) ? $_REQUEST['view'] : 'form';
echo "
#{$view}_$c .fabrikElement {
	margin-left: 10px;
}

#{$view}_$c .fabrikLabel {
	width: 100px;
	clear: left;
	float: left;
}

table { border: 1px solid black }

table th,
table td {
	border: 1px solid black;
	border-spacing: 0px; 
	padding: 4px;
	margin: 0px;
}

thead th.day {
	height: 50px;
	text-align: left;
	line-height: 14px;
	padding-bottom: 20px;
	width: 20px;
}

thead th.day div {
	margin-left: -23px;
	position: absolute;
	width: 65px;
	transform: rotate(-90deg);
	-webkit-transform: rotate(-90deg); /* Safari/Chrome */
	-moz-transform: rotate(-90deg); /* Firefox */
	-o-transform: rotate(-90deg); /* Opera */
	-ms-transform: rotate(-90deg); /* IE 9 */
}

";?>


