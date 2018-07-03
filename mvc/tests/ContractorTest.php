<?php
require './classes/Contractor.php';

class ContractorTest extends PHPUnit_Framework_TestCase
{

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
