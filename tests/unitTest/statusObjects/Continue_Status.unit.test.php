<?php
namespace CharithaPrabhashwara\HttpLib\Tests\unitTest\statusObjects;

use PHPUnit\Framework\TestCase;
use CharithaPrabhashwara\HttpLib\StatusObjects\ContinueStatus;

class ContinueStatusTestCase extends TestCase{
    
    public const CONTINUE_STATUS_CODE = 100;
    public const CONTINUE_STATUS_MESSAGE = "";
    public const CONTINUE_STATUS_DESCRIPTION = "";

    public function test_Default_StatusCode(){
        
        $continue_status = new ContinueStatus();
        $obj = $continue_status();

        $this->assertEquals($this::CONTINUE_STATUS_CODE, $obj->getStatusCode());
        
    }

    public function test_Default_StatusMessage(){
        
        $continue_status = new ContinueStatus();
        $obj = $continue_status();

        $this->assertEquals($this::CONTINUE_STATUS_MESSAGE, $obj->getStatusMessage());
        
    }

    public function test_Default_StatusDescription(){
        
        $continue_status = new ContinueStatus();
        $obj = $continue_status();

        $this->assertEquals($this::CONTINUE_STATUS_DESCRIPTION, $obj->getStatusDescription());
    }

    public function test_SET_StatusMessage(){
        $message = "this test status message";

        $continue_status = new ContinueStatus();
        $obj = $continue_status();

        $obj->setStatusMessage($message);
        $this->assertEquals($message, $obj->getStatusMessage());
    }

    public function test_SET_StatusDescription(){
        $description = "this is status description";

        $continue_status = new ContinueStatus();
        $obj = $continue_status();

        $obj->setStatusDescription($description);
        $this->assertEquals($description, $obj->getStatusDescription());

    }
}

?>