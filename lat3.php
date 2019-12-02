<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Object in JavaScript</title>
    <script>
        var person = {
            firstName: "Seira",
            lastName: "Zalya",
            showName: function() {
                alert('Nama ' + this.firstName + ' ' + this.lastName);
            }
        };45

        person.showName();

        // membuat class object dengan this
        function Person(firstName, lastName) {
            //properti
            this.firstName = firstName;
            this.lastName = lastName;

            //method
            this.fullName = function() {
                return `${this.firstName} ${this.lastName}`
            }
            this.showNamePerson = function() {
                document.write(this.fullName());
            }
        }

        var person1 = new Person("Sakura", "Ikimonogatari");
        var person2 = new Person("Neko", "Nora");

        person1.showNamePerson();
        document.write("<br>");
        person2.showNamePerson();
    </script>
</head>

<body>

</body>

</html>