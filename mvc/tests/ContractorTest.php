<?php
require '/home/travis/build/romzes13/WorkOrderCMS/mvc/classes/Contractor.php';
//require './classes/Contractor.php';
// use the following namespace
use PHPUnit\Framework\TestCase;

// extend using TestCase instead PHPUnit_Framework_TestCase
class ContractorTest extends TestCase {
//class ContractorTest extends PHPUnit_Framework_TestCase


/*    private $contractor;

    protected function setUp()
    {
        $this->contractor = new Contractor("Roman", "address", "phone", "email", "rate", "user_id");
    }

    protected function tearDown()
    {
        $this->contractor = NULL;
    }
 */
    public function testName()
    {
       // $contractor = new ContractorTests();
        //$contractor->setUp();
        //$contractor->name = "Roman";
       $contractor = new Contractor("Roman", "address", "phone", "email", "rate", "user_id");

        //$result = $this->contractor->name('Roman');
        $this->assertEquals($contractor->getName(), 'Roman');
    }


}
