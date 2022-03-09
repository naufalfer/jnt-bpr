<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_trx
 * @property int $id_pengirim
 * @property int $id_penerima
 * @property int $id_barang
 * @property string $tanggal_trx
 * @property int $nominal_pembayaran
 * @property Penerima $penerima
 * @property Barang $barang
 * @property Pengirim $pengirim
 */
class PengirimanTransaction extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pengiriman_transaction';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_trx';

    /**
     * @var array
     */
    protected $fillable = ['id_pengirim', 'id_penerima', 'id_barang', 'tanggal_trx', 'nominal_pembayaran'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function penerima()
    {
        return $this->belongsTo('App\Penerima', 'id_penerima', 'id_penerima');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function barang()
    {
        return $this->belongsTo('App\Barang', 'id_barang', 'id_barang');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pengirim()
    {
        return $this->belongsTo('App\Pengirim', 'id_pengirim', 'id_pengirim');
    }
}
