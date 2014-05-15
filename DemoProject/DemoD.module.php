<?php

class DemoD extends WireData implements Module
{
    public static function getModuleInfo()
	{
		return array(
			'title'   => 'Demo D',
			'version' => 1,
			'summary' => 'Demo D',
		);
	}

    /**
     * 
     */
    public function init()
    {
    }
}
