<?php
namespace App;

class Response
{     private $body;
      private $status;
      private $contentType;

    public function __construct(string $body='', int $status=200, string $contentType='text/html')
    {
        $this->contentType = $contentType;
       $this->body = $body;
       $this->status = $status;
    }
       public function send(){

       
        // definir le status
        http_response_code($this->status);
        header ('Content-type : '.$this->contentType);
    
        if ($this->body){
        echo $this->body;
        }
    }
}