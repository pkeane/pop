<?php

class Pop_Handler_Sample extends Pop_Handler
{
	public $resource_map = array(
		'/' => 'sample',
		'{identifier}' => 'answer',
	);

	protected function setup($r)
	{
	}

	public function getSample($r) 
	{
		$t = new Pop_Template($r);
		$r->renderResponse($t->fetch('sample.tpl'));
	}

}

