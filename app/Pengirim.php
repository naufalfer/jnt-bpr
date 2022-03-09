<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_pengirim
 * @property string $nama_pengirim
 * @property string $alamat_pengirim
 * @property string $notelf_pengirim
 * @property int $kodepos_pengirim
 * @property string $provinsi_pengirim
 * @property Barang[] $barangs
 * @property PengirimanTransaction[] $pengirimanTransactions
 */
class Pengirim extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pengirim';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_pengirim';

    /**
     * @var array
     */
    protected $fillable = ['nama_pengirim', 'alamat_pengirim', 'notelf_pengirim', 'kodepos_pengirim', 'provinsi_pengirim'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function barangs()
    {
        return $this->hasMany('App\Barang', 'id_pengirim', 'id_pengirim');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pengirimanTransactions()
    {
        return $this->hasMany('App\PengirimanTransaction', 'id_pengirim', 'id_pengirim');
    }
}
