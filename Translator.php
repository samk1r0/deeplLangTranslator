<?php
class Translator
{
    protected $translated;
    protected $processor;

    function __construct($apiKey) {
        $this->processor = new CurlProcessor;
        $this->processor->curlInit(new Configurator($apiKey));
    }

    function translate($sourceLang, $textToTranslate, $targetLang, $contentString=NULL)  { 
        $body = "text=" . $textToTranslate . "&source_lang=$sourceLang&target_lang=" . $targetLang;
        $this->processor->curlBody($body);
        $this->translated = $this->processor->curlExecution();
        if(!$this->processor->curlErrorHandling()){
            if($contentString) {
                return str_replace($textToTranslate . "',", 
                                    $this->translated . "', #". $textToTranslate,
                                    $contentString);
            }
            else{
                return $this->translated; 
            }
        }
        else{
            return $this->processor->curlErrorHandling(); 
        }
    }

    function display()
    {
        echo $this->translated;
    }

    function closeRequest(){
        $this->processor->closeRequest();
    }
}