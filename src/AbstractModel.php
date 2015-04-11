<?php

namespace Mvc;

abstract class AbstractModel implements MvcInterface
{
	public function getInspector()
	{
		return 'Mvc\Inspector\Model';
	}
}