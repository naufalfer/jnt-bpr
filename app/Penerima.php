<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_penerima
 * @property string $nama_penerima
 * @property string $alamat_penerima
 * @property string $notelf_penerima
 * @property int $kodepos_penerima
 * @property string $provinsi_penerima
 * @property Barang[] $barangs
 * @property PengirimanTransaction[] $pengirimanTransactions
 */
class Penerima extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'penerima';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_penerima';

    /**
     * @var array
     */
    protected $fillable = ['nama_penerima', 'alamat_penerima', 'notelf_penerima', 'kodepos_penerima', 'provinsi_penerima'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function barangs()
    {
        return $this->hasMany('App\Barang', 'id_penerima', 'id_penerima');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pengirimanTransactions()
    {
        return $this->hasMany('App\PengirimanTransaction', 'id_penerima', 'id_penerima');
    }
}
