<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function in JavaScript</title>
    <style>
        body {
            font-family: sans-serif;
            color: white;
        }

        h1 {
            text-align: center;
        }

        fieldset {
            width: 50%;
            text-align: center;
            margin: 0 auto;
            padding: 20px;
        }

        input[type=text] {
            width: 70%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin: 10px;
        }

        input[type=button] {
            width: 20%;
            background-color: lightsteelblue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            padding: 12px;
        }

        input[type=button]:hover {
            background-color: lightskyblue;
        }

        .box {
            width: 60%;
            background-color: lightslategrey;
            min-height: 500px;
            margin: 100px auto;
            padding: 20px;
            border-left: 40px dotted white;
            box-shadow: 5px 5px 7px grey;
        }

        .items {
            width: 50%;
            border: 5px solid white;
            margin: 20px auto;
            padding: 20px;
            background-color: lightpink;
            color: lightslategray;

        }
    </style>
</head>

<body>
    <div class="box">
        <h1>Function In JavaScript</h1>
        <fieldset>
            <legend>Form Input</legend>
            <input type="text" name="item" placeholder="Input Item Name Here">
            <input type="button" onclick="addItem()" value="Add">
        </fieldset>

        <div class="items">
            <ul id="item-list"></ul>
        </div>
    </div>
</body>
<script>
    var dataItem = ["notebook", "novel", "comic"];

    function showItem() {
        var itemList = document.getElementById("item-list");
        //clear list item
        itemList.innerHTML = "";

        //cetak semua item
        for (let i = 0; i < dataItem.length; i++) {
            var btnEdit = "<a href='#' onclick='editItem(" + i + ")'>Edit</a>";
            var btnDelete = "<a href='#' onclick='deleteItem(" + i + ")'>Delete</a>";

            itemList.innerHTML += "<li>" + dataItem[i] + " [" + btnEdit + " | " + btnDelete + "]</li>";
        }
    }

    function addItem() {
        var input = document.querySelector("input[name=item]");
        dataItem.push(input.value);
        showItem();
    }

    function editItem(id) {
        var newItem = prompt("New Item Name", dataItem[id]);
        dataItem[id] = newItem;
        showItem();
    }

    function deleteItem(id) {
        dataItem.splice(id, 1);
        showItem();
    }

    showItem();
</script>

</html>