<?php
class CurlProcessor{
    protected $curl;
    protected $res;
    protected $error;
    
    function curlInit($config){
        $this->curl = curl_init();
        curl_setopt($this->curl,CURLOPT_URL,$config->getUrl());
        curl_setopt($this->curl,CURLOPT_HTTPHEADER,$config->getHeaders());
        curl_setopt($this->curl,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($this->curl,CURLOPT_POST,1);
    }

    function curlBody($body){
        curl_setopt($this->curl,CURLOPT_POSTFIELDS,$body);
    }

    function curlExecution(){
        $this->res = curl_exec($this->curl);
        if(curl_errno($this->curl)==0){
            return json_decode($this->res)->translations[0]->text;
        }
        else{
            $this->error=curl_error($this->curl);
        }
    }

    function curlErrorHandling(){
        if($this->error){
            return curl_error($this->curl);
        }
    }

    function closeRequest(){
        curl_close($this->curl);
    }
}