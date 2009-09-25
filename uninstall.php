<?php
$fcl = new featurecode('keylock', 'keylock_lock');
$fcu = new featurecode('keylock', 'keylock_unlock');
$fct = new featurecode('keylock', 'keylock_toggle');
$fcs = new featurecode('keylock', 'keylock_setpass');


$fcl->delete();
$fcu->delete();
$fct->delete();
$fcs->delete();


unset($fcl);
unset($fcu);
unset($fct);
unset($fcs);

?>
