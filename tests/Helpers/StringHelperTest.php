<?php

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