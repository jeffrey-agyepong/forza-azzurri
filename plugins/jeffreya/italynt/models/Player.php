<?php namespace Jeffreya\ItalyNt\Models;

use Model;

/**
 * Model
 */
class Player extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];
    

    public $attachOne = [
        'picture' => ['System\Models\File', 'public' => true],
    ];

    public $belongsToMany = [
        'clubs' => ['Jeffreya\Italynt\Models\Club', 'table' => 'jeffreya_italynt_clubs']
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jeffreya_italynt_db';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'player_name' => 'required',
        'date_of_birth' => 'required',
        'height' => 'required',
        'club' =>  'required',
        'goals' =>  'required',
        'assists'=>  'required',
        'national_caps' =>  'required',
        'tournaments' =>  'required',
        'position' =>  'required'
    ];
    
    public $belongsTo = [
        'club' => Club::class
    ];
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];
}
