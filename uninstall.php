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


global $astman;
global $amp_conf;


$sql = "SELECT * FROM users";
$userresults = sql($sql,"getAll",DB_FETCHMODE_ASSOC);

//add details to astdb
if ($astman) {
        foreach($userresults as $usr) {
                extract($usr);
                $astman->database_deltree("KEYLOCK/".$extension);
        }
} else {
        echo _("Cannot connect to Asterisk Manager with ").$amp_conf["AMPMGRUSER"]."/".$amp_conf["AMPMGRPASS"];
}


?>
