<?php namespace Jeffreya\ItalyNt\Models;

use Model;

/**
 * Model
 */
class Club extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    public $belongsToMany = [
        'players' => ['Jeffreya\Italynt\Models\Club', 'table' => 'jeffreya_italynt_clubs']
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jeffreya_italynt_clubs';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];
}
