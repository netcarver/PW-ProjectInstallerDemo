<?php

class ThingyA extends WireData implements Module
{
    public static function getModuleInfo()
	{
		return array(
			'title'   => 'Thingy A',
			'version' => 1,
			'summary' => 'Thingy A',
		);
	}

    /**
     * 
     */
    public function init()
    {
    }
}
