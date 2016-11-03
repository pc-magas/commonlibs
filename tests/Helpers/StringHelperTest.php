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

use \CommonLibs\Helpers\StringHelper;
use \CommonLibs\Helpers\HtmlHelper;

class StringHelperTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * Tests if a string is an email.
	 * @cover StringHelper::testEmail
	 */
	public function testValidEmail()
	{
		$email='somemail@example.com';
		$this->assertEquals(StringHelper::validateEmail($email),$email);
	}
	
	/**
	 * Tests if an email string containing html is a valid email.
	 * @cover StringHelper::testEmail
	 */
	public function testValidEmailFromHtml()
	{
		$email='<h1>somemail@example.com</h1>';
		$this->assertEquals(StringHelper::validateEmail($email),HtmlHelper::removeHtml($email));
	}
	
	/**
	 * Tests if a string is an email.
	 * @cover StringHelper::testEmail
	 */
	public function testInvalidEmail()
	{
		$email='somemail$example.com';
		$this->assertNotEquals(StringHelper::validateEmail($email),$email);
	}
	
	/**
	 * Tests if an email string containing html is a valid email.
	 * @cover StringHelper::testEmail
	 */
	public function testInvalidEmailFromHtml()
	{
		$email='<h1>somemail$example.com</h1>';
		$this->assertNotEquals(StringHelper::validateEmail($email),HtmlHelper::removeHtml($email));
	}
}