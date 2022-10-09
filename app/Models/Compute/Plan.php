<?php

namespace App\Models\Compute;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model {
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'compute_plans';

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
        'location_id',
        'solus_plan_id',
        'name',
        'storage_type',
        'image_format',
        'storage_capacity',
        'ram_capacity',
        'cpu_cores',
        'can_create_backups',
        'can_create_snapshots',
        'is_visible',
        'backup_price',
        'price'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'location_id',
        'solus_plan_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'price' => 'json'
    ];

    ////////////////////////////////////////
    
    public function location() {
        return $this->belongsTo(Location::class);
    }
}
