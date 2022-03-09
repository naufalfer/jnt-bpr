<?php

namespace App\Http\Controllers;

use App\Pengirim;
use App\Penerima;
use App\Barang;
use App\PengirimanTransaction;
use View;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function submitpengiriman(Request $request)
    {
        $namapengirim = new Pengirim;
        $namapengirim->id_pengirim = strtoupper(substr($request->namapengirim,0,3).substr($request->jenisbarang,0,3).date("Ymdhisa"));
        $namapengirim->nama_pengirim = strtoupper($request->namapengirim);
        $namapengirim->alamat_pengirim = strtoupper($request->alamatpengirim);
        $namapengirim->notelf_pengirim = $request->notlppengirim;
        $namapengirim->kodepos_pengirim = $request->kodepospengirim;
        $namapengirim->provinsi_pengirim = strtoupper($request->provinsipengirim);
        $namapengirim->save();

        $namapenerima = new Penerima;      
        $namapenerima->id_penerima = strtoupper(substr($request->namapenerima,0,3).substr($request->jenisbarang,0,3).date("Ymdhisa"));
        $namapenerima->nama_penerima = strtoupper($request->namapenerima);
        $namapenerima->alamat_penerima = strtoupper($request->alamatpenerima);
        $namapenerima->notelf_penerima = $request->notlppenerima;
        $namapenerima->kodepos_penerima = $request->kodepospenerima;
        $namapenerima->provinsi_penerima = strtoupper($request->provinsipenerima);
        $namapenerima->save();

        $barang = new Barang;
        $barang->id_barang = strtoupper(substr($request->namapenerima,0,3).substr($request->namapenerima,0,3).substr($request->jenis_barang,0,3).date("Ymdhisa"));
        $barang->nama_barang = strtoupper($request->jenisbarang);
        $barang->jenis_barang = strtoupper($request->jenisbarang);
        $barang->berat_barang = $request->beratbarang;
        $barang->id_pengirim = strtoupper(substr($request->namapengirim,0,3).substr($request->jenisbarang,0,3).date("Ymdhisa"));
        $barang->id_penerima = strtoupper(substr($request->namapenerima,0,3).substr($request->jenisbarang,0,3).date("Ymdhisa"));
        $barang->save();

        $pengirimantrx = new PengirimanTransaction;
        $pengirimantrx->tanggal_trx = date("Y-m-d");
        $pengirimantrx->nominal_pembayaran = round($request->beratbarang)*9000;
        $pengirimantrx->id_pengirim = strtoupper(substr($request->namapengirim,0,3).substr($request->jenisbarang,0,3).date("Ymdhisa"));
        $pengirimantrx->id_penerima = strtoupper(substr($request->namapenerima,0,3).substr($request->jenisbarang,0,3).date("Ymdhisa"));
        $pengirimantrx->id_barang = strtoupper(substr($request->namapenerima,0,3).substr($request->namapenerima,0,3).substr($request->jenis_barang,0,3).date("Ymdhisa"));
        $pengirimantrx->save();

        $barcode = strtoupper(substr($request->namapenerima,0,3).substr($request->namapenerima,0,3).substr($request->jenis_barang,0,3).date("Ymdhisa"));
        return view('barcode', compact('barcode'));

    }

}
