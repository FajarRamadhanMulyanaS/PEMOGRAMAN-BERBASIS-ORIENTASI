<?php
for ($i = 1; $i < 5; $i++) {
    // Print spaces
    for ($j = $i; $j < 5; $j++) {
        echo "&nbsp;"; // it will print blank space
    }

    // Print asterisks
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }

    echo '<br />';
}
?>
