<?php

namespace App\Models;

class UserPermission extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_permissions';

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
        'permission_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'user_id',
        'permission_id'
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
    
    public function permission() {
        return $this->belongsTo(Permission::class);
    }
}
