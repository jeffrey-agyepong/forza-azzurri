<?php namespace Jeffreya\ItalyNt\Components;

use Cms\Classes\ComponentBase;
use Jeffreya\ItalyNt\Models\Player;
use Winter\Storm\Support\Facades\URL;

class PlayerDetail extends ComponentBase
{
    /**
     * Gets the details for the component
     */
    public function componentDetails()
    {
        return [
            'name'        => 'PlayerDetail Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * Returns the properties provided by the component
     */
    public function defineProperties()
    {
        return [];
    }

    public function onRun(){
        $this->page['return_url'] = Url::previous();
    }

    public function player(){
        $id = $this->param('id');
        $player = Player::findOrFail($id);
        return $player;
    }
}
