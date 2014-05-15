<?php

class ThingyC extends WireData implements Module
{
    public static function getModuleInfo()
	{
		return array(
			'title'   => 'Thingy C',
			'version' => 1,
			'summary' => 'Thingy C',
		);
	}

    /**
     * 
     */
    public function init()
    {
    }
}
