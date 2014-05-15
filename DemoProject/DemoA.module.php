<?php

class DemoA extends WireData implements Module
{
    public static function getModuleInfo()
	{
		return array(
			'title'   => 'Demo A',
			'version' => 1,
			'summary' => 'Demo A',
		);
	}

    /**
     * 
     */
    public function init()
    {
    }
}
