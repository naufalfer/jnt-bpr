<!DOCTYPE html>
<html>
<style>
    body {
        text-align: center;
    }

    .test {
        display: block;
        margin-left: 500px;
        margin-right: auto;
        width: 50%;
    }

    html {
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
        margin-bottom: 50px;
    }

    h2 {
        color: blue;
        text-decoration: underline;
    }

    tr {
        border-color: black 10px;
    }
</style>
<head>
    <title>JnT - Barcode</title>
</head>
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

  
<h3>BARCODE DAN RESI PENGIRIMAN BARANG</h3>

@php
    $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
@endphp

<div class="test">
<table>
<tr>
{!! $generator->getBarcode('{{ $barcode }}', $generator::TYPE_CODE_128) !!}
</tr>
</table>
</div>

<h3>{{ $barcode }}</h3>

<h3>Harap simpan barcode ini untuk discan saat di drop point</h3>

<h2>CETAK</h2>
</body>
</html>