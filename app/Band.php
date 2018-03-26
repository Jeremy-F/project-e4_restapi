<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Band extends Model{

    protected $table = "bands";
    protected $fillable = [
        "rbw", "points", "min_freq_id", "max_freq_id", "antenna_id"
    ];
    public $timestamps = false;

    /**
     * @return BelongsTo
     */
    public function maxFreq(){
        return $this->belongsTo(Freq::class, "bands_max_freq_id_index", "max_freq_id", "id");
    }
    /**
     * @return BelongsTo
     */
    public function minFreq(){
        return $this->belongsTo(Freq::class, "bands_min_freq_id_index", "min_freq_id", "id");
    }

    /**
     * @return BelongsTo
     */
    public function antenna(){
        return $this->belongsTo(Antenna::class);
    }
}
