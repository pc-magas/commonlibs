<?php

namespace DI\Helpers;

class PaginatorHelper 
{
	/**
	 * Calculates the Index from where the results will start from a page given 
	 * @param int,string $page Page STARTING FROM 0 
	 * @param int,string $limit The result limit
	 */
	public static function calculateFirstResult($page,$limit)
	{
		$page=(int)$page;
		$limit=(int)$limit;
		
		return $page*$limit;
	}
}