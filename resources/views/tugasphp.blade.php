<html>

<head>
    <title>Kalkulator Volume Tabung PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            margin: auto;
            padding-top: 1rem;
            background-color: plum;
        }

        .judul {
            width: 30rem;
            margin: auto;
            text-align: center;
        }

        .formulir {
            width: 30rem;
            margin: auto;
            font-size: large;
            font-weight: bold;

        }

        .column {
            display: flex;
            float: left;
            width: 50%;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }


        input {
            width: 240px;
            height: 26px;
        }

        select {
            width: 240px;
            height: 26px;
        }

        .tombol {
            padding-top: 2rem;
            width: 10rem;
            margin: auto;
        }

        button {
            margin: auto;
            height: 40px;
            width: 130px;
        }
    </style>


</head>


<body>
    <h1 class="judul">Kalkulator Volume Tabung</h1>
    <hr>
    <h4 class="judul" style="font-weight: 400; font-style:italic;">Masukkan diameter tinggi tabung untuk mendapatkan volume tabung!</h4>
    <br><br>
    <form class="formulir" method="post">
        <div class="row">
            <div class="column">
                <label for="diameter">Diameter Tabung (CM): </label>
            </div>
            <div class="column">
                <input type="number" id="diameter" name="diameter">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="column">
                <label for="tinggi">Tinggi Tabung: </label>
            </div>
            <div class="column">
                <input type="number" id="tinggi" name="tinggi">
            </div>
        </div>
        <br>
        <div class="tombol">
            <div class="row">
                <button type="submit" value="submit" class="btn btn-success kirim">Submit</button>
            </div>
        </div>
        <br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $d = $_POST['diameter'];
        $t = $_POST['tinggi'];


        if (is_numeric($d) and is_numeric($t)) {
            $r = $d / 2;
            $pi = 3.14;
            $volume = $pi * $r * $r * $t;
            echo "<h4 class='judul';>" . "Volume tabung adalah: " . "</h4>";
            echo "<br><h2 class='judul';>" . $volume . "</h2>";
        }
    }
    ?>

</body>


</html>
