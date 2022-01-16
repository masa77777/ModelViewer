<?php
    echo "test¥n";
    $images = glob('./models/*jpg');
    foreach($images as $v) {
        echo "<img src='", $v, "' alt='' loading='lazy'>";
    };
?>