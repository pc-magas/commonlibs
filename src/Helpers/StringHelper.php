<?php

namespace CommonLibs\Helpers;


class StringHelper
{


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
}
