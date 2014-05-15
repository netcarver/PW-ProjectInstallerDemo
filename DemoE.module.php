<?php

class ThingyE extends WireData implements Module
{
    public static function getModuleInfo()
	{
		return array(
			'title'   => 'Thingy E',
			'version' => 1,
			'summary' => 'Thingy E',
		);
	}

    /**
     * 
     */
    public function init()
    {
    }
}
