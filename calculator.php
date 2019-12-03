<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator JS</title>
    <style>
        body {
            font-family: monospace;
            text-align: center;
        }

        .calc-box {
            width: 250px;
            min-height: 300px;
            border: 3px solid salmon;
            margin: 50px 30px;
            padding: 12px;
            text-align: center;
            border-radius: 5px;
            box-shadow: 4px 4px 8px gray;
            background-color: honeydew;
            display: inline-block;
        }

        .calc-sci-box {
            width: 300px;
            min-height: 300px;
            border: 3px solid lightslategray;
            margin: 50px 30px;
            padding: 12px;
            text-align: center;
            border-radius: 5px;
            box-shadow: 4px 4px 8px gray;
            background-color: lightsteelblue;
            display: inline-block;

        }

        .sci-button {
            width: 18%;
            padding: 10px;
            margin-bottom: 10px;
            font-size: 15px;
            background-color: lightgrey;
            border: 1px solid lightslategray;
            border-radius: 5px;
            box-shadow: 2px 2px 5px gray;
        }

        input[type=text] {
            width: 90%;
            padding: 12px;
            margin-bottom: 15px;
        }

        .button {
            width: 22.5%;
            padding: 10px;
            margin-bottom: 10px;
            font-size: 15px;
            background-color: lightyellow;
            border: 1px solid lightsalmon;
            border-radius: 5px;
            box-shadow: 2px 2px 5px lightgray;
        }

        .equal {
            width: 59%;
        }
    </style>

    <script>
        function addChar(input, character) {
            if (input.value == null || input.value == "0") {
                input.value = character;
            } else {
                input.value += character;
            }
        }

        function cos(form) {
            form.display.value = Math.cos(form.display.value);
        }

        function sin(form) {
            form.display.value = Math.sin(form.display.value);
        }

        function tan(form) {
            form.display.value = Math.tan(form.display.value);
        }

        function sqrt(form) {
            form.display.value = Math.sqrt(form.display.value);
        }

        function ln(form) {
            form.display.value = Math.ln(form.display.value);
        }

        function exp(form) {
            form.display.value = Math.exp(form.display.value);
        }

        function deleteChar(input) {
            input.value = input.value.substring(0, input.value.length - 1);
        }

        function changeSign(input) {
            if (input.value.substring(0, 1) == "-") {
                input.value = input.value.substring(1, input.value.length);
            } else {
                input.value = "-" + input.value;
            }
        }

        function compute(form) {
            try {
                form.display.value = eval(form.display.value);
            } catch (err) {
                form.display.value = "error";
            }
        }

        function equal(form) {
            try {
                calculator.answer.value = eval(calculator.answer.value);
            } catch (err) {
                calculator.answer.value = "error";
            }
        }

        function square(form) {
            form.display.value = Math.pow(form.display.value, 2);
        }

        function checkNum(str) {
            for (var i = 0; i < str.length; i++) {
                var ch = str.substring(i, i + 1);
                if (ch < "0" || ch > "9") {
                    if (ch != "/" && ch != "*" && ch != "+" && ch != "-" && ch != "." && ch != "(" && ch != ")") {
                        alert("Invalid entry!");
                        return false;
                    }
                }
            }
            return true;
        }
    </script>
</head>

<body>
    <div class="calc-box">
        <h3>Simple Calculator</h3>
        <form action="" name="calculator">
            <!-- Calculator Display -->
            <input type="text" name="answer">
            <br>
            <!-- Calculator Buttons -->
            <input class="button" type="button" value="1" onclick="calculator.answer.value += '1'">
            <input class="button" type="button" value="2" onclick="calculator.answer.value += '2'">
            <input class="button" type="button" value="3" onclick="calculator.answer.value += '3'">
            <input class="button" type="button" value="+" onclick="calculator.answer.value += '+'">
            <br>
            <input class="button" type="button" value="4" onclick="calculator.answer.value += '4'">
            <input class="button" type="button" value="5" onclick="calculator.answer.value += '5'">
            <input class="button" type="button" value="6" onclick="calculator.answer.value += '6'">
            <input class="button" type="button" value="-" onclick="calculator.answer.value += '-'">
            <br>
            <input class="button" type="button" value="7" onclick="calculator.answer.value += '7'">
            <input class="button" type="button" value="8" onclick="calculator.answer.value += '8'">
            <input class="button" type="button" value="9" onclick="calculator.answer.value += '9'">
            <input class="button" type="button" value="*" onclick="calculator.answer.value += '*'">
            <br>
            <input class="button" type="button" value="C" onclick="calculator.answer.value = ''">
            <input class="button" type="button" value="0" onclick="calculator.answer.value += '0'">
            <input class="button" type="button" value="=" onclick="equal(this.form)">
            <input class="button" type="button" value="/" onclick="calculator.answer.value += '/'">
        </form>
        saradev@2019
    </div>

    <div class="calc-sci-box">
        <h3>Calculator Scientific</h3>
        <form action="" name="calc-sci">
            <input type="text" name="display" max="25">
            <br>
            <input class="sci-button" type="button" value="C" onclick="this.form.display.value = 0">
            <input class="sci-button" type="button" value="Cos" onclick="if(checkNum(this.form.display.value)){ cos(this.form) }">
            <input class="sci-button" type="button" value="Sin" onclick="if(checkNum(this.form.display.value)){ sin(this.form) }">
            <input class="sci-button" type="button" value="Tan" onclick="if(checkNum(this.form.display.value)){ tan(this.form) }">
            <input class="sci-button" type="button" value="Del" onclick="deleteChar(this.form.display)">
            <br>
            <input class="sci-button" type="button" value="Exp" onclick="if(checkNum(this.form.display.value)){ exp(this.form) }">
            <input class="sci-button" type="button" value="7" onclick="addChar(this.form.display, '7')">
            <input class="sci-button" type="button" value="8" onclick="addChar(this.form.display, '8')">
            <input class="sci-button" type="button" value="9" onclick="addChar(this.form.display, '9')">
            <input class="sci-button" type="button" value="/" onclick="addChar(this.form.display, '/')">
            <br>
            <input class="sci-button" type="button" value="Ln" onclick="if(checkNum(this.form.display.value)){ ln(this.form) }">
            <input class="sci-button" type="button" value="4" onclick="addChar(this.form.display, '4')">
            <input class="sci-button" type="button" value="5" onclick="addChar(this.form.display, '5')">
            <input class="sci-button" type="button" value="6" onclick="addChar(this.form.display, '6')">
            <input class="sci-button" type="button" value="*" onclick="addChar(this.form.display, '*')">
            <br>
            <input class="sci-button" type="button" value="Sqrt" onclick="if(checkNum(this.form.display.value)){ sqrt(this.form) }">
            <input class="sci-button" type="button" value="1" onclick="addChar(this.form.display, '1')">
            <input class="sci-button" type="button" value="2" onclick="addChar(this.form.display, '2')">
            <input class="sci-button" type="button" value="3" onclick="addChar(this.form.display, '3')">
            <input class="sci-button" type="button" value="-" onclick="addChar(this.form.display, '-')">
            <br>
            <input class="sci-button" type="button" value="Sq" onclick="if(checkNum(this.form.display.value)){ square(this.form) }">
            <input class="sci-button" type="button" value="0" onclick="addChar(this.form.display, '0')">
            <input class="sci-button" type="button" value="." onclick="addChar(this.form.display, '.')">
            <input class="sci-button" type="button" value="+/-" onclick="changeSign(this.form.display)">
            <input class="sci-button" type="button" value="+" onclick="addChar(this.form.display, '+')">
            <br>
            <input class="sci-button" type="button" value="(" onclick="addChar(this.form.display, '(')">
            <input class="sci-button equal" type="button" value="=" onclick="if (checkNum(this.form.display.value)) { compute(this.form) }">
            <input class="sci-button" type="button" value=")" onclick="addChar(this.form.display, ')')">
        </form>
        saradev@2019
    </div>
</body>

</html>