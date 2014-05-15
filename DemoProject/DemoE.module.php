<?php

class DemoE extends WireData implements Module
{
    public static function getModuleInfo()
	{
		return array(
			'title'   => 'Demo E',
			'version' => 1,
			'summary' => 'Demo E',
		);
	}

    /**
     * 
     */
    public function init()
    {
    }
}
