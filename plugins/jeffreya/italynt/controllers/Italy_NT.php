<?php namespace Jeffreya\ItalyNt\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Italy_NT extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'jeffreya.italynt.player' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Jeffreya.ItalyNt', 'italynt', 'players');
    }
}
