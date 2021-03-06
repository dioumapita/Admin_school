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
 * @property string $status
 * @property AbsEleve[] $absEleves
 * @property Emargement[] $emargements
 * @property EmploisDeTemp[] $emploisDeTemps
 * @property Inscrit[] $inscrits
 * @property Note[] $notes
 * @property PaiementEleve[] $paiementEleves
 * @property PaiementEnseignant[] $paiementEnseignants
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
    protected $fillable = ['debut_annee', 'fin_annee', 'annee_scolaire', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function absEleves()
    {
        return $this->hasMany('App\mes_models\AbsEleve');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emargements()
    {
        return $this->hasMany('App\mes_models\Emargement');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emploisDeTemps()
    {
        return $this->hasMany('App\mes_models\EmploisDeTemp');
    }

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paiementEleves()
    {
        return $this->hasMany('App\mes_models\PaiementEleve');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paiementEnseignants()
    {
        return $this->hasMany('App\mes_models\PaiementEnseignant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function creditEnseignants()
    {
        return $this->hasMany('App\mes_models\CreditEnseignant');
    }
}
