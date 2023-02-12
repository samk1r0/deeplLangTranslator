<?php
include 'Config.php';
include 'CurlProcessor.php';
include 'Translator.php';
$apiKey = $_POST['api_key'];
$lang = require $_FILES['lang']["name"];
$content = file_get_contents($_FILES['lang']["name"]);
$regex="/'\s*,/s";
$content = preg_replace($regex, "',", $content);

$translator = new Translator($apiKey);

function displaying($input, &$contentString, $translator)
{
    foreach( $input as $key => $value){ 
        if(is_array($value)){
            displaying($value, $contentString, $translator);
        }
        else{
            $contentString = $translator->translate($_POST['source'], 
                                                    $value,
                                                    $_POST['target'], 
                                                    $contentString);
        }
    }
}
displaying($lang, $content, $translator);

$translator->closeRequest();


header ("Content-Type: application/octet-stream");
header ("Content-disposition: attachment; filename=lang.php");
header("Connection: close");
echo $content;

?>
