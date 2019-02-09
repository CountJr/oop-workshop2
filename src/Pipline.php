<?php

namespace Countjr\Pipline;

class Pipline
{
	//
	private $data;

	public function __construct($data = null)
	{
		$this->data = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function bind(callable $function)
	{
		//
		$newData = call_user_func($function, $this->data);
		return new Pipline($newData);
	}
}