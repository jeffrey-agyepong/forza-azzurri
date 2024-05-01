<?php namespace Jeffreya\ItalyNt;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Jeffreya\italynt\components\PlayersList' => 'PlayersList',
            'Jeffreya\italynt\components\PlayerDetail' => 'playerDetail'
        ];
    }

    public function registerSettings()
    {
    }
}
