<?php

class Redirect
{
	/**
	 * To the homepage
	 */
	public static function home()
	{
		header("location: " . URL_DOMAIN);
	}
	/**
	 * To the defined page
	 *
	 * @param $path
	 */
	public static function to($path)
	{
		header("location: " . URL_DOMAIN . $path);
	}
}