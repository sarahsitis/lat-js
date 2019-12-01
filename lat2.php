<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DOM API Javascript</title>
</head>

<body>

    <p class="paragraf">Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Quo quaerat recusandae qui ullam eaque cumque ea fugit,
        debitis commodi ipsum illo dolorum consequatur sed laudantium suscipit quis magni,
        maiores in?</p>

    <p class="paragraf">Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Quo quaerat recusandae qui ullam eaque cumque ea fugit,
        debitis commodi ipsum illo dolorum consequatur sed laudantium suscipit quis magni,
        maiores in?</p>

    <p class="paragraf">Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Quo quaerat recusandae qui ullam eaque cumque ea fugit,
        debitis commodi ipsum illo dolorum consequatur sed laudantium suscipit quis magni,
        maiores in?</p>


    <script>
        var paragraf = document.getElementsByClassName("paragraf");
        setInterval(function() {
            paragraf[0].style.color = "red";
            paragraf[1].style.color = "green";
            paragraf[2].style.color = "blue";

            setTimeout(function() {
                paragraf[0].style.color = "black";
                paragraf[1].style.color = "black";
                paragraf[2].style.color = "black";
            }, 500)
        }, 1000);
    </script>

    <h1>Aplikasi Ubah Warna</h1>
    <label>Warna latar: </label>
    <input type="color" id="bg-color" />
    <br>
    <label>Warna teks: </label>
    <input type="color" id="text-color" />

    <script>
        var bgColor = document.getElementById('bg-color');
        var txtColor = document.getElementById('text-color');

        bgColor.addEventListener("change", (event) => {
            document.body.style.backgroundColor = bgColor.value;
        });

        txtColor.addEventListener("change", (event) => {
            document.body.style.color = txtColor.value;
        });
    </script>

</body>

</html>