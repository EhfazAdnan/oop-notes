<?php
include "classes/One.php";
include "classes/Two.php";
include "classes/Three.php";

use feature\one\active\Two as twoAlias;

new adnan\One();
new twoAlias();
new Three();

?>