<?php

    header('Content-Type: text/html; charset=utf-8');

    // read xml file
    $myfile = fopen("data_source_xml/1.xml", "r") or die("Unable to open file!");
    fclose($myfile);    
    
    // convert from xml to json
    $xmlObject = simplexml_load_file('data_source_xml/1.xml');

    $jsonData = json_encode($xmlObject, JSON_PRETTY_PRINT);
    // $jsonData = json_encode($xmlObject, \JSON_UNESCAPED_UNICODE);
      
    print_r($jsonData);

    // write json to a file
    $json_result = fopen("1.json", "w") or die("Unable to open file!");
    fwrite($json_result, $jsonData);
    fclose($json_result);
    
?>
