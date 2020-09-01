<?php

namespace App\mes_models;

use App\Traits\HasCompositePrimaryKey;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Builder;

/**
 * @property integer $eleve_id
 * @property integer $niveau_id
 * @property integer $annee_id
 * @property string $date_inscription
 * @property string $created_at
 * @property string $updated_at
 * @property Annee $annee
 * @property Eleve $eleve
 * @property Niveau $niveau
 */
class Inscrit extends Model
{
    use HasCompositePrimaryKey;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'inscrit';
    // public $incrementing = false;
    protected $primaryKey = ['eleve_id','niveau_id','annee_id'];
    /**
     * Get the primary key value for a save query.
     *
     * @param mixed $keyName
     * @return mixed
     */
   
    // protected function getKeyForSaveQuery($keyName = null)
    // {
    //     if(is_null($keyName)){
    //         $keyName = $this->getKeyName();
    //     }

    //     if (isset($this->original[$keyName])) {
    //         return $this->original[$keyName];
    //     }

    //     return $this->getAttribute($keyName);
    // }
    // protected function setKeysForSaveQuery(Builder $query)
    // {
    //     $keys = $this->getKeyName();
    //     if(!is_array($keys)){
    //         return parent::setKeysForSaveQuery($query);
    //     }

    //     foreach($keys as $keyName){
    //         $query->where($keyName, '=', $this->getKeyForSaveQuery($keyName));
    //     }

    //     return $query;
    // }

    
    /**
     * @var array
     */
    protected $fillable = ['date_inscription','eleve_id','niveau_id','annee_id','created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function annee()
    {
        return $this->belongsTo('App\mes_models\Annee');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eleve()
    {
        return $this->belongsTo('App\mes_models\Eleve');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function niveau()
    {
        return $this->belongsTo('App\mes_models\Niveau');
    }
}
