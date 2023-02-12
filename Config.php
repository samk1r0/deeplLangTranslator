<?php 

class Configurator
{
    protected $apiKey;
    protected $baseUrl = "https://api-free.deepl.com/v2/";
    protected $endpoint = "translate";
    
    function __construct($apiKey){
        $this->apiKey = $apiKey;
    }
    function getHeaders() : array {
        return array(
            "Authorization: DeepL-Auth-Key " . $this->apiKey,
            'Content-Type: application/x-www-form-urlencoded'
        );
    }

    function getUrl() : string {
        return $this->baseUrl . $this->endpoint;
    }
}