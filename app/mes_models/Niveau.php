<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nom_niveau
 * @property string $options
 * @property string $created_at
 * @property string $updated_at
 * @property Inscrit[] $inscrits
 * @property MatiereNiveau[] $matiereNiveaus
 */
class Niveau extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'niveau';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nom_niveau', 'options', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscrits()
    {
        return $this->hasMany('App\mes_models\Inscrit');
    }
    /**code ajouter */
    public function matieres()
    {
        return $this->belongsToMany(Matiere::class)->withPivot('coefficient');
    }
    /**end code ajouter */
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function matiereNiveaus()
    {
        return $this->hasMany('App\mes_models\MatiereNiveau');
    }
}
