<?php

class DemoB extends WireData implements Module
{
    public static function getModuleInfo()
	{
		return array(
			'title'   => 'Demo B',
			'version' => 1,
			'summary' => 'Demo B',
		);
	}

    /**
     * 
     */
    public function init()
    {
    }
}
