<?php

class ThingyB extends WireData implements Module
{
    public static function getModuleInfo()
	{
		return array(
			'title'   => 'Thingy B',
			'version' => 1,
			'summary' => 'Thingy B',
		);
	}

    /**
     * 
     */
    public function init()
    {
    }
}
