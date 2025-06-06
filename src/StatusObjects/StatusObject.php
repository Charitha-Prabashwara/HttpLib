<?php
namespace CharithaPrabhashwara\HttpLib\StatusObjects;


class StatusObject{
    
    protected $StatusCode;
    protected $StatusMessage;
    protected $StatusDescription;

    public function __toString() : String {
        return $this->StatusMessage;
    }

    public function getStatusCode() : int{
        return $this->StatusCode;
    }

    public function getStatusMessage(): string{
        return $this->StatusMessage;
    }

    public function getStatusDescription(): string{
        return $this->StatusDescription;
    }


    public function setStatusMessage(string $statusMessage) : string{
        $this->StatusMessage = $statusMessage;
        return $this->StatusMessage;
    }

    public function setStatusDescription(string $statusDescription) : string{
        $this->StatusDescription = $statusDescription;
        return $this->StatusDescription;
    } 
}

?>