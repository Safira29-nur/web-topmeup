<!DOCTYPE html>
<html>
<head>
  <title>Aplikasi Pembelian e-wallet</title>
  <style>
    /* CSS untuk styling */
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-image: url('img/bg.svg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    .operator {
      text-align: center;
    }
    .operator img {
      width: 100px;
      height: 100px;
      cursor: pointer;
      display : inline-block;
      margin : 0 auto;
      border-radius: 50%;
    }
    .nominal {
      display: inline-block;
      margin: 10px;
    }
    .nominal img {
      width: 100px;
      height: 100px;
      cursor: pointer;
      display : inline-block;
      margin : 0 auto;
    }
    button {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #3e8e41;
    }
    .metode-pembayaran {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  
  <h1>Top E-wallet</h1>
  <h2>Pilih Operator:</h2>
  <div class="operator">
    <img src="img/gopay.png" alt="gopay" onclick="pilihOperator('gopay')">
    <img src="img/shopee.png" alt="shopeepay" onclick="pilihOperator('shopeepay')">
    <img src="img/ovo.png" alt="ovo" onclick="pilihOperator('ovo')">
    <img src="img/dana.png" alt="dana" onclick="pilihOperator('dana')">
  </div>



  <h2>Pilih Nominal:</h2>
  <div class="nominal">
    <img src="img/50.png" alt="Rp 50.000" onclick="pilihNominal(50000)">
    <img src="img/100.png" alt="Rp 100.000" onclick="pilihNominal(100000)">
    <img src="img/100+.png" alt="Rp 100.000 +" onclick="pilihNominal(+100000)">
  </div>
  </div>




  <h2>Metode Pembayaran:</h2>
  <div class="metode-pembayaran">
    <input type="radio" id="transfer-bank" name="metode-pembayaran" value="transfer-bank">
    <label for="transfer-bank">Transfer Bank</label>
    <br>
  </div>





  <h2>Detail Pembelian:</h2>
  <p id="detail-pembelian"></p>
  <button onclick="prosesPembelian()">Proses Pembelian</button>



  <script>
    let operator = '';
    let nominal = 0;

    function pilihOperator(op) {
      operator = op;
      document.getElementById('detail-pembelian').innerHTML = `Operator: ${operator}`;
    }

    function pilihNominal(nom) {
      nominal = nom;
      document.getElementById('detail-pembelian').innerHTML += `<br>Nominal: Rp ${nominal}`;
    }
    let metodePembayaran = '';

    function pilihMetodePembayaran(metode) {
      metodePembayaran = metode;
      console.log(`Metode pembayaran yang dipilih: ${metode}`);
    }

    function prosesPembelian() {
      if (operator === '' || nominal === 0 || metodePembayaran === '') {
        alert('Silakan pilih operator, nominal, dan metode pembayaran terlebih dahulu!');
      } else {
        alert(`Pembelian pulsa ${operator} sebesar Rp ${nominal} dengan metode pembayaran ${metodePembayaran} berhasil!`);
      }
    }

    function prosesPembelian() {
      if (operator === '' || nominal === 0) {
        alert('Silakan pilih operator dan nominal terlebih dahulu!');
      } else {
        alert(`Pembelian pulsa ${operator} sebesar Rp ${nominal} berhasil!`);
      }
    }
  </script>
</body>
</html>