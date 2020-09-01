<?php

namespace App\mes_models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $matricule
 * @property string $nom
 * @property string $prenom
 * @property string $sexe
 * @property string $date_naissance
 * @property int $telephone
 * @property string $quartier
 * @property string $photo_profil
 * @property string $nom_parent
 * @property string $prenom_parent
 * @property string $profession
 * @property string $telephone_parent
 * @property string $created_at
 * @property string $updated_at
 * @property Inscrit[] $inscrits
 * @property Note[] $notes
 */
class Eleve extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'eleve';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['matricule', 'nom', 'prenom', 'sexe', 'date_naissance', 'telephone', 'quartier', 'photo_profil', 'nom_parent', 'prenom_parent', 'profession', 'telephone_parent', 'created_at', 'updated_at'];

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
