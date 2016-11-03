<?php

namespace CommonLibs\Tests\Helpers;

require_once (__DIR__.'/../../autoload.php');
require_once ('PHPUnit/Autoload.php');

use \CommonLibs\Helpers\HtmlHelper;

class HtmlHelperTest extends  \PHPUnit_Framework_TestCase
{
	/**
	 * @covers HtmlHelper::isHtml
	 * @covers HtmlHelper::isValidHtml
	 */
	public function testIsHtml()
	{
		$htmlString="<div><span>Hello <b>How</b>are you? If not well click <a href=\"http://google.gr\"><i><b>Here</b></i></a></span> </div>";
		$this->assertTrue(HtmlHelper::isHtml($htmlString));
		$this->assertTrue(HtmlHelper::isValidHtml($htmlString));
	}
	
	/**
	 * @covers HtmlHelper::isHtml
	 * @covers HtmlHelper::isValidHtml
	 */
	public function testIsNotHtml()
	{
		$htmlString="Hello";
		$this->assertFalse(HtmlHelper::isHtml($htmlString));
		$this->assertFalse(HtmlHelper::isValidHtml($htmlString));
	}
	
	/**
	 * @covers HtmlHelper::isHtml
	 * @covers HtmlHelper::isValidHtml
	 */
	public function testInvalidHtml()
	{
		$htmlString="Hello</pre>";
		$this->assertTrue(HtmlHelper::isHtml($htmlString));
		$this->assertFalse(HtmlHelper::isValidHtml($htmlString));
	}
	
	
	/**
	 * Test case of removing the html tags from an html content
	 * @depends testIsHtml
	 * @covers HtmlHelper::isHtml
	 */
	public function testRemoveHtml()
	{
		$htmlString="<div><span>Hello <b>How</b>are you? If not well click <a href=\"http://google.gr\"><i><b>Here</b></i></a></span> </div>";
		$clean= HtmlHelper::removeHtml($htmlString);
		
		$this->assertFalse(HtmlHelper::isHtml($clean));
	}
	
}