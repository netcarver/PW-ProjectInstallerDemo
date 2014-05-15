<?php

class DemoC extends WireData implements Module
{
    public static function getModuleInfo()
	{
		return array(
			'title'   => 'Demo C',
			'version' => 1,
			'summary' => 'Demo C',
		);
	}

    /**
     * 
     */
    public function init()
    {
    }
}
