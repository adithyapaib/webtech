<?php
    $xml=simplexml_load_file("x.xml");
    print_r($xml);
    echo "<br>";
    foreach ($xml as $key => $value) {
        foreach ($value as $key1 => $value1) {
            echo $key1.":".$value1."<br>";
        }
    }
?>