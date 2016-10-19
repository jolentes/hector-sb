<?php
/**
 * Contacts Custom Form Template: Group
 *
 * @package     Joomla
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005 Fabrik. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @since       3.0
 */
 ?>

<?php
/*
 * This is where you will do your main template modifications.
 *
 */
?>

<?php
/*
 * This code sets up your first group.
 */
	reset($this->groups);
	$this->group = current($this->groups);
	$this->elements = $this->group->elements;
?>

<?php
/*
 * This is the meat of the customization, that allows you to place and
 * format your elements on the page.  In this example, we're pretty much
 * just duplicating the standard 'default' template layout, but doing it
 * by placing each individual element, one by one.  You can get as creative
 * as you want in your HTML formatting.
 *
 * The important thing is the two PHP lines for each element:
 *
 *    $this->element = $this->elements['short_element_name'];
 *    echo $this->loadTemplate('element');
 *
 * ... which is what actually renders each individual element.  Note
 * that this is one of the few places in Fabrik where you use the short
 * element name (like 'first_name') instead of the full element name
 * (like 'jos__fb_contact_sample___first_name').
 */
?>
	<div>
		<?php
		$this->element = $this->elements['schulhalbjahr'];
		echo $this->loadTemplate('element');
		?>
	</div>
	<div>
		<?php
		$this->element = $this->elements['kursnr'];
		echo $this->loadTemplate('element');
		?>
	</div>
	<div>
		<?php
		$this->element = $this->elements['kurstitel'];
		echo $this->loadTemplate('element');
		?>
	</div>
	<div>
		<?php
		$this->element = $this->elements['juserid'];
		echo $this->loadTemplate('element');
		?>
	</div>
<?php
	$this->group = next($this->groups);
	$this->elements = $this->group->elements;
	$groupDays = $this->group;
	$subgroupsDays = $groupDays->subgroups;

	$this->group = next($this->groups);
	$this->elements = $this->group->elements;

	$this->group = next($this->groups);
	$this->elements = $this->group->elements;
	$groupParticipants = $this->group;
	$subgroupsParticipants = $groupParticipants->subgroups;
	
	?>

	<table cellspacing="0px">
		<thead>
			<tr>
				<th>
				<?php
					echo $this->elements['vorname']->label_raw . '&nbsp;' . $this->elements['nachname']->label_raw;
				?>
				</th>
				<th>
				<?php
					echo $this->elements['telefon']->label_raw;
				?>
				</th>
				<th>
				<?php
					echo $this->elements['email']->label_raw;
				?>
				</th>
				<?php 
				$counter = 0;
				foreach ($subgroupsDays as $day) { ?>
				<th class="day">
					<?php echo trim($day['tag']->element); 
					$counter++;?>
				</th>
				<?php } ?>
			</tr>
		</thead>

<?php // echo "<pre>"; echo var_dump($groupParticipants); echo "</pre>"; exit;?>

		<tbody>
			<?php 
			foreach ($subgroupsParticipants as $part) { 
				if ( 0 < strlen(trim($part['vorname']->element_raw . $part['nachname']->element_raw))) { ?>
			<tr>
				<td><?php echo $part['vorname']->element_raw . '&nbsp;' . $part['nachname']->element_raw; ?></td>
				<td><?php echo $part['telefon']->element_raw; ?></td>
				<td><?php echo $part['email']->element_raw; ?></td>
				<?php for ($i = 1; $i <= $counter; $i++) { ?>
				<td>&nbsp;</td>
				<?php } ?>
			</tr>
			<?php 
				} else {
					continue;
				}
			} ?>
		</tbody>
	</table>


	</fieldset>


<?php
/* This must be the last thing that happens in this template.  It adds
 * all hidden elements to the form, and also finds any non-hidden elements
 * which haven't been displayed, and adds them as hidden elements (this
 * prevents JavaScript errors where element handler code can't find the actual
 * DOM structures for their elements)
 */
	echo $this->loadTemplate('group_hidden');
?>
