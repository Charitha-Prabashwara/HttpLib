<?php
namespace CharithaPrabhashwara\HttpLib\StatusObjects;

use CharithaPrabhashwara\HttpLib\StatusObjects\Status_Object;


class ContinueStatus extends StatusObject{

    protected $StatusCode = 100;
    protected $StatusMessage = "";  
    protected $StatusDescription ="";

    public function __construct($StatusMessage = null, $StatusDescription = null)
    {
        (!$StatusMessage == null) && $this->StatusMessage = $StatusMessage;
        (!$StatusDescription == null) && $this->StatusDescription = $StatusDescription;    
    }
    
    public function __invoke() :self {
        return $this;
    }



}
?>