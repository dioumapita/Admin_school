<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $debut_annee
 * @property string $fin_annee
 * @property string $annee_scolaire
 * @property string $created_at
 * @property string $updated_at
 * @property Inscrit[] $inscrits
 * @property Note[] $notes
 */
class Annee extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'annee';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['debut_annee', 'fin_annee', 'annee_scolaire', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscrits()
    {
        return $this->hasMany('App\mes_models\Inscrit');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notes()
    {
        return $this->hasMany('App\mes_models\Note');
    }
}
