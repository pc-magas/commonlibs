<?php
/**
 *  The MIT License (MIT)
 *
 * Copyright (c) <year> <copyright holders>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

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