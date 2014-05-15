<?php

class ThingyD extends WireData implements Module
{
    public static function getModuleInfo()
	{
		return array(
			'title'   => 'Thingy D',
			'version' => 1,
			'summary' => 'Thingy D',
		);
	}

    /**
     * 
     */
    public function init()
    {
    }
}
