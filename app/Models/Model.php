<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Model extends \Illuminate\Database\Eloquent\Model {
    use HasUuids;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = '';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        
    ];
}
