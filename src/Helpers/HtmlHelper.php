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

namespace CommonLibs\Helpers;

/**
 * 
 * @author pcmagas
 * Class that aqllows you to perform checks to strings containing html values
 * 
 */
class HtmlHelper
{
	/**
	 * Remove any html related tag from $string
	 * @param string $string
	 * @return string
	 */
	public static function removeHtml($string)
	{
		$string=trim($string);
		$string= html_entity_decode($string);
		$string=strip_tags($string);

		return $string;
	}

	/**
	 * Remove ant html tag and vaidates if $email param is a valid $email
	 * @param string $email
	 * @return string
	 * @throws \Exception When the $email param you have given is not a valid email
	 */
	public static function validateEmail($email)
	{
		$email=self::removeHtml($email);

		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			throw new \Exception("The param \$ email you have given does not contain valie values.");
		}

		return $email;
	}

	/**
	* Checks if string contains html.
	*  
	* Note:
	* Even if it not a valid html string such as: Hello</pre> it still will consider it as html
	*  
	* @param string $string The string that we want to check if it contains HTML
	* @return boolean
	*/
	public static function isHtml($string)
	{
  		return preg_match("/<[^<]+>/",$string,$m) != 0;
	}
	
	/**
	 * Checks if the $string is a valid html
	 * 
	 * The following function is shown in:
	 * http://stackoverflow.com/questions/3167074/which-function-in-php-validate-if-the-string-is-valid-html
	 * And modified in order to comply with the library
	 * 
	 * @author Eineki <http://stackoverflow.com/users/29125/eineki>
	 * @param string $string
	 * @return boolean
	 */
	public function isValidHtml($string) 
	{
		$start = strpos($string, '<');
		$end  = strrpos($string, '>',$start);

		$len=strlen($string);
		
		if ($end !== false) {
			$string = substr($string, $start);
		} else {
			$string = substr($string, $start, $len-$start);
		}
		
		libxml_use_internal_errors(true);
		libxml_clear_errors();
		$xml = simplexml_load_string($string);
		
		return count(libxml_get_errors())==0;
	}
}
