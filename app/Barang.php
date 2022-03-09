<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_barang
 * @property int $id_pengirim
 * @property int $id_penerima
 * @property string $nama_barang
 * @property string $jenis_barang
 * @property float $berat_barang
 * @property Pengirim $pengirim
 * @property Penerima $penerima
 * @property PengirimanTransaction[] $pengirimanTransactions
 */
class Barang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'barang';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_barang';

    /**
     * @var array
     */
    protected $fillable = ['id_pengirim', 'id_penerima', 'nama_barang', 'jenis_barang', 'berat_barang'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pengirim()
    {
        return $this->belongsTo('App\Pengirim', 'id_pengirim', 'id_pengirim');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function penerima()
    {
        return $this->belongsTo('App\Penerima', 'id_penerima', 'id_penerima');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pengirimanTransactions()
    {
        return $this->hasMany('App\PengirimanTransaction', 'id_barang', 'id_barang');
    }
}
