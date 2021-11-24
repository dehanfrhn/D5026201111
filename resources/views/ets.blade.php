<!DOCTYPE html>
<html>

<head>
    <title>UTS PWEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ets.css">
</head>

<body>
    <header class="identitas">
        <p>M Farhan Rahmandika<br>Dehan<br>5026201111</p>
    </header>

    <div class="judul">
        <h2>Form Input Data Barang</h2>
        <br>
    </div>

    <div>
        <form class="formulir" method="post">
            <div class="row">
                <div class="column">
                    <label for="nama">Nama Barang:</label>
                </div>
                <div class="column">
                    <input type="text" id="nama" name="nama" required minlength="10">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="column">
                    <label for="harga">Harga: </label>
                </div>
                <div class="column">
                    <input type="number" id="harga" name="harga" required min="5000">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="column">
                    <label for="jenis">Jenis Barang: </label>
                </div>
                <div class="column">
                    <select class="select">
                        <option value=""></option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="nonmamin">Non Mamin</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="column">
                    <label for="kode">Kode Barcode: </label>
                </div>
                <div class="column">
                    <input type="number" id="kode" name="kode" required minlength="10">
                </div>
            </div>
            <div class="tombol">
                <div class="row">
                    <div class="column">
                        <button type="submit" class="btn btn-success kirim" onclick="return validateForm()">Kirim</button>
                    </div>
                    <div class="column">
                        <button type="reset" class="btn btn-primary reset">Reset</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js"></script>
    <script src="js/ets.js"></script>
</body>

</html>
