<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pick Color</title>
    <style>
        body {
            font-family: monospace;
        }

        h1 {
            text-align: center;
            font-size: 3em;
            margin: 20px;
        }

        .row {
            width: 90%;
            min-height: 600px;
            background: lightslategray;
            text-align: center;
            margin: auto;
        }

        .box {
            width: 20%;
            min-height: 300px;
            background: white;
            display: inline-block;
            padding: 10px;
            border: 5px solid lightblue;
            margin-left: 3%;
            margin-top: 25px;
        }

        .box h3 {
            text-align: center;
        }

        .box p {
            text-align: justify;
        }

        .pick-color {
            width: 20%;
            background: white;
            display: inline-block;
            padding: 10px;
            border: 5px solid lightpink;
            margin-left: 3%;
            margin-top: 10px;
        }

        footer {
            width: 90%;
            background-color: lightsteelblue;
            height: 40px;
            margin: 0 auto;
            text-align: center;
            font-size: 15px;
            color: gray;
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Color Manipulation</h1>
    <div class="row">
        <div class="box">
            <h3>Coloumn 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto recusandae eligendi quas esse molestias odit voluptas, corporis repellat odio, tenetur deserunt dignissimos ipsum non voluptatibus in consequatur ut asperiores ipsam.</p>
        </div>
        <div class="box">
            <h3>Coloumn 2</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui incidunt necessitatibus delectus consequuntur rem provident, nisi sint a maiores earum. Deleniti dolor natus hic minus ipsam modi. Suscipit, natus itaque.</p>
        </div>
        <div class="box">
            <h3>Coloumn 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eligendi officiis necessitatibus, hic tempora ea recusandae dicta harum minima explicabo aut ipsa suscipit dolorum dolore laudantium! Quasi expedita architecto nemo.</p>
        </div>
        <br>
        <div class="pick-color" id="box1">
            <h3>Change Color 1</h3>
            <p><label for="bg-color1">Background Color</label></p>
            <input type="color" id="bg-color1">
            <br>
            <p><label for="bg-color1">Background Color</label></p>
            <input type="color" id="text-color1">
        </div>
        <div class="pick-color" id="box2">
            <h3>Change Color 2</h3>
            <p><label for="bg-color2">Background Color</label></p>
            <input type="color" id="bg-color2">
            <br>
            <p><label for="bg-color2">Background Color</label></p>
            <input type="color" id="text-color2">
        </div>
        <div class="pick-color" id="box3">
            <h3>Change Color 3</h3>
            <p><label for="bg-color3">Background Color</label></p>
            <input type="color" id="bg-color3">
            <br>
            <p><label for="bg-color3">Background Color</label></p>
            <input type="color" id="text-color3">
        </div>
    </div>

    <footer>
        saradev@2019
    </footer>
</body>
<script>
    // blink blink
    var box = document.getElementsByClassName('box');
    setInterval(function() {
        box[0].style.color = "red";
        box[1].style.color = "green";
        box[2].style.color = "blue";

        setTimeout(function() {
            box[0].style.color = "blue";
            box[1].style.color = "red";
            box[2].style.color = "green";
        }, 500)
    }, 1000);
    // change color
    var bgColor1 = document.getElementById('bg-color1');
    var txtColor1 = document.getElementById('text-color1');

    var bgColor2 = document.getElementById('bg-color2');
    var txtColor2 = document.getElementById('text-color2');

    var bgColor3 = document.getElementById('bg-color3');
    var txtColor3 = document.getElementById('text-color3');

    var box1 = document.getElementById('box1');
    var box2 = document.getElementById('box2');
    var box3 = document.getElementById('box3');

    bgColor1.addEventListener("change", (event) => {
        box1.style.backgroundColor = bgColor1.value;
    });
    bgColor2.addEventListener("change", (event) => {
        box2.style.backgroundColor = bgColor2.value;
    });
    bgColor3.addEventListener("change", (event) => {
        box3.style.backgroundColor = bgColor3.value;
    });

    txtColor1.addEventListener("change", (event) => {
        box1.style.color = txtColor1.value;
    });
    txtColor2.addEventListener("change", (event) => {
        box2.style.color = txtColor2.value;
    });
    txtColor3.addEventListener("change", (event) => {
        box3.style.color = txtColor3.value;
    });
</script>

</html>