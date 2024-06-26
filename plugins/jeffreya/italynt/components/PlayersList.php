<?php namespace Jeffreya\ItalyNt\Components;

use Cms\Classes\ComponentBase;
use Jeffreya\ItalyNt\Models\Player;


class PlayersList extends ComponentBase
{
    /**
     * Gets the details for the component
     */
    public function componentDetails()
    {
        return [
            'name'        => 'PlayersList Component',
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


    // Return all players by default
    public function onRun(){
        $this->page['players'] = $this->index();
    }

    // Return all players
    public function index(){
        return Player::all();
    }

    
}
