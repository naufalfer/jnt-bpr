
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JnT</title>
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
</head>
<style>
    html, body {
        margin:0px;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        text-align:center;
    }

    li {
        display: inline-block;
        padding: 10px;
        margin-top: 50px;
        background-color: rgba(0,0,0,.2);
        align-content: center;
    }

    a {
        color: black;
        text-decoration: none;
    }

    li:hover {
        background-color: red;
    }

    a:hover {
        color: white;
    }

    #about {
        padding: 100px;
        margin: 100px;
        margin-top: 0;
    }

    .row {
        padding:10px;
        margin:10px;
    }

    h3 {
        margin-top: 50px;
        margin-bottom: 0px;
    }
</style>
<body>

<div>
<img src="../../images/jntbanner.jpg" alt="Logo JNT" style="height: 70%; width: 100%;"></img>
</div>

<ul>
  <li><a href="https://jet.co.id/track">Tracing dan Tracking</a></li>
  <li><a href="https://jet.co.id/rates">Shipping Rates</a></li>
  <li><a href="https://jet.co.id/finddroppoint">Check Drop Point</a></li>
  <li><a href="#about">Formulir Pengiriman</a></li>
</ul>

<h3 style="text-align:center;">FORMULIR PENGIRIMAN BARANG (DIISI OLEH PENGIRIM)</h1>

<div id="about">
    <form action="/submitpengiriman" onSubmit="return confirm('Anda yakin data yang dimasukkan sudah benar?');">
    <div class="about-body">
        <div class="form-group row">
            <label for="namapengirim" class="col-sm-3 col-form-label">NAMA PENGIRIM:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="namapengirim" id="namapengirim" placeholder="Nama Pengirim">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamatpengirim" class="col-sm-3 col-form-label">ALAMAT PENGIRIM:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="alamatpengirim" id="alamatpengirim" placeholder="Alamat Pengirim">
            </div>
        </div>
        <div class="form-group row">
            <label for="kodepospengirim" class="col-sm-3 col-form-label">KODE POS PENGIRIM:</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" name="kodepospengirim" id="kodepospengirim" placeholder="Kode Pos">
            </div>
        </div>
        <div class="form-group row">
            <label for="provinsipengirim" class="col-sm-3 col-form-label">PROVINSI PENGIRIM:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="provinsipengirim" id="provinsipengirim" placeholder="Provinsi">
            </div>
        </div>
        <div class="form-group row">
            <label for="notlppengirim" class="col-sm-3 col-form-label">NOMOR TELEPON:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="notlppengirim" id="notlppengirim" placeholder="Nomor Telepon">
            </div>
        </div>
        <div class="form-group row">
            <label for="jenisbarang" class="col-sm-3 col-form-label">JENIS BARANG:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="jenisbarang" id="jenisbarang" placeholder="Jenis Barang">
            </div>
        </div>
        <div class="form-group row">
            <label for="beratbarang" class="col-sm-3 col-form-label">BERAT BARANG:</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" name="beratbarang" id="beratbarang" placeholder="Berat Barang">
            </div>
        </div>

        <div class="form-group row">
            <label for="namapenerima" class="col-sm-3 col-form-label">NAMA PENERIMA:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="namapenerima" id="namapenerima" placeholder="Nama Penerima">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamatpenerima" class="col-sm-3 col-form-label">ALAMAT PENERIMA:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="alamatpenerima" id="alamatpenerima" placeholder="Alamat Penerima">
            </div>
        </div>
        <div class="form-group row">
            <label for="notlppenerima" class="col-sm-3 col-form-label">NOMOR TELEPON:</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" name="notlppenerima" id="notlppenerima" placeholder="Nomor Telepon">
            </div>
        </div>
        <div class="form-group row">
            <label for="kodepospenerima" class="col-sm-3 col-form-label">KODE POS PENERIMA:</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" name="kodepospenerima" id="kodepospenerima" placeholder="Kode Pos">
            </div>
        </div>
        <div class="form-group row">
            <label for="provinsipenerima" class="col-sm-3 col-form-label">PROVINSI PENERIMA:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="provinsipenerima" id="provinsipenerima" placeholder="Provinsi">
            </div>
        </div>
    </div>
    <div class="about-footer" style="text-align: center;">
        <a href="" class="btn btn-primary float-right" style="margin-left: 10px;">
            Batal
        </a>
        <button type="submit" id="submitbtn" class="btn btn-primary float-right">Simpan</button>
    </div>
    </form>
</div>

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-error">
    {{ session('error') }}
</div>
@endif

<script src="{{ mix('js/app.js') }}"></script>
<script>
</script>

</body>
</html>

