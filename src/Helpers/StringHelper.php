<?php

namespace CommonLibs\Helpers;

use CommonLibs\Helpers\HtmlHelper;

/**
 * @author pcmagas
 * Common string handling functions
 */
class StringHelper
{
	/**
	 * Remove any html tag (and trim alongside) 
	 * and validate if $email param is a valid email address.
	 * 
	 * @param string $email
	 * @return string
	 * @throws \Exception When the $email param you have given is not a valid email
	 */
	public static function validateEmail($email)
	{
		$email=HtmlHelper::removeHtml($email);

		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			throw new \Exception("The param \$ email you have given does not contain valie values.");
		}

		return $email;
	}
}
