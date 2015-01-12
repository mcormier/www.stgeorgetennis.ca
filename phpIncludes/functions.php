<?php

function encodeEmailAddress($emailAddress) {
    $chars = str_split($emailAddress);
    $arraySize = count($chars);
    for ($i = 0; $i < $arraySize; $i++) {
      $intVal = ord($chars[$i]);
      Print  "&#" . $intVal . ";";
    }
}

?>