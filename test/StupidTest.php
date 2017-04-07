<?php
namespace phpUnitTutorial\Test;
class StupidTest extends \PHPUnit_Framework_TestCase
{
    public function testTrueIsTrue(){
        $foo = true;
        $this->assertTrue($foo);
    }
    public function testHtml(){
    	$htmlOutput = '<p id="my_id"';
    	$matcher = array('id' => 'my_id' );
    	$test->assertTag($matcher, $htmlOutput);
    }
}