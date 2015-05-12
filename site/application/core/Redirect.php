<?php

class Redirect
{
	/**
	 * To the homepage
	 */
	public static function home()
	{
		header("location: " . URL);
	}
	/**
	 * To the defined page
	 *
	 * @param $path
	 */
	public static function to($path)
	{
		header("location: " . URL . $path);
	}
        

}