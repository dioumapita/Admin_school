<?php

namespace App\mes_models;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nom_role
 * @property string $created_at
 * @property string $updated_at
 * @property RoleUser[] $roleUsers
 */
class Role extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'role';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nom_role', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
