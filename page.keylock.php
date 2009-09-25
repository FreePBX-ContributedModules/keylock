<?php /* $Id: page.bosssecretary.php   $ */
//Copyright (C) 2008 TI Soluciones (msalazar at solucionesit dot com dot ve)
//
//This program is free software; you can redistribute it and/or
//modify it under the terms of the GNU General Public License
//as published by the Free Software Foundation; either version 2
//of the License, or (at your option) any later version.
//
//This program is distributed in the hope that it will be useful,
//but WITHOUT ANY WARRANTY; without even the implied warranty of
//MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//GNU General Public License for more details.








$dispnum = 'keylock'; //used for switch on config.php

$title = _("Key Lock");



if (isset($_POST["patterns"]))
{
	keylock_set_patterns($_POST["patterns"]);
	needreload();
}



$patterns = keylock_get_patterns();





echo "<h2>" . $title. "</h2>";

			$modulename = "keylock";
			$lock_label = "keylock_lock";
			$unlock_label = "keylock_unlock";
			$toggle_label = "keylock_toggle";
			$setpass_label = "keylock_setpass";

			$fcl = new featurecode($modulename, $lock_label);
			$fcu = new featurecode($modulename, $unlock_label);
			$fct = new featurecode($modulename, $toggle_label);
			$fcs = new featurecode($modulename, $setpass_label);

			$lock = $fcl->getCodeActive();
			$unlock = $fcu->getCodeActive();
			$toggle = $fct->getCodeActive();
			$setpass = $fcs->getCodeActive();

?>

<form method="post" name=keylock action="config.php?display=keylock">
<table>
			<tr>
				<td colspan="2" align="center"><b>Patterns:</b> <hr /> </td>
			</tr>
			<tr>
				<td colspan="2"><textarea name="patterns"><?php echo $patterns; ?></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> <input type="submit" name="submit" value="Save" />
			</tr>

</table>

<p><strong>Warning:</strong> You must be very carefully with patterns.</p>

<br />
<br />

<div style="font-size:80%;">
<b><?php echo _("Key Lock Toggle:") . "</b> " . $toggle  . "."; ?> <br />
<b><?php echo _("Key Lock:") . "</b> " . $lock  . "."; ?> <br />
<b><?php echo _("Key Unlock:") . "</b> " . $unlock  . "."; ?> <br />
<b><?php echo _("Key Setpass:") . "</b> " . $setpass  . "."; ?>
<p style="font-size:80%;"><?php echo _("You can change all these values in Features Code module") . "."; ?></p>
</div>


