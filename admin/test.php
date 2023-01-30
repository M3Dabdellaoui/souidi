<?php

while (true) {
    $currentTime = time();
    $nextRenameTime = strtotime("+5 minutes", $currentTime);
    $timeToSleep = $nextRenameTime - $currentTime;
    sleep($timeToSleep);
    $currentName = basename(__FILE__);
    $newName = $currentName . "_" . time();
    rename(__FILE__, $newName);
}

?>

<html>
</html>
