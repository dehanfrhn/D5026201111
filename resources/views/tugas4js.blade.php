<html>

<head>
    <title>Contoh JQuery Animate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".satu").hover(function () {
                $(".satu").animate({
                    height: "10rem"
                }, "fast");
            },
                function () {
                    $(".satu").animate({
                        height: "5rem"
                    }, "fast");
                });

            $(".dua").hover(function () {
                $(".dua").animate({
                    height: "+=1rem",
                    width: "+=15rem"
                }, "fast");
            },
                function () {
                    $(".dua").animate({
                        height: "-=1rem",
                        width: "-=15rem"
                    }, "fast");
                });

            $(".tiga").hover(function () {
                $(".tiga").animate({
                    opacity: '0.7'
                });
            },
                function () {
                    $(".tiga").animate({
                        opacity: '1'
                    });
                });
        });
    </script>
</head>

<body>
    <div class="container">
        <div class="row center">
            <h1>JQuery Animate</h1>
        </div>
        <hr>
        <div class="dua center m-auto"
            style="width: 17rem; height: 5rem; background-color: green; background-blend-mode: overlay; border-style: dashed; text-align: center; vertical-align: middle; font-size: 2rem;">
            Hover Here!</div>
        <br>
        <div class="satu center m-auto"
            style="height: 5rem; background-color: red; background-blend-mode: overlay; border-style: dashed; text-align: center; vertical-align: middle; font-size: 2rem;">
            Hover Here!</div>
        <br>
        <div class="tiga center m-auto"
            style="width: 17rem; height: 5rem; background-color: blue; background-blend-mode: overlay; border-style: dashed; text-align: center; vertical-align: middle; font-size: 2rem;">
            Hover Here!</div>



    </div>

</body>

</html>