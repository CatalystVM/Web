<?php

namespace App\Models;

use Jenssegers\Agent\Agent;

class Session extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sessions';

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
        'user_id',
        'ip_address',
        'user_agent',
        'payload',
        'last_activity'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'user_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        
    ];

    ////////////////////////////////////////
    
    public function user() {
        return $this->belongsTo(User::class);
    }

    ////////////////////////////////////////

    public function getBrowserAttribute() {
        $agent = new Agent();
        $agent->setUserAgent($this->user_agent);
        return $agent->browser().' ('.$agent->platform().')';
    }
}
