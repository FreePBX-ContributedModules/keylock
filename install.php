<?php
$fcl = new featurecode('keylock', 'keylock_lock');
$fcu = new featurecode('keylock', 'keylock_unlock');
$fct = new featurecode('keylock', 'keylock_toggle');
$fcs = new featurecode('keylock', 'keylock_setpass');

$fcl->setDescription('KeyLock Lock');
$fcu->setDescription('KeyLock Unlock');
$fct->setDescription('KeyLock Toggle');
$fcs->setDescription('KeyLock Setpass');

$fcl->setDefault('*57');
$fcu->setDefault('*58');
$fct->setDefault('*56');
$fcs->setDefault('*59');

$fcl->update();
$fcu->update();
$fct->update();
$fcs->update();

unset($fcl);
unset($fcu);
unset($fct);
unset($fcs);
?>
