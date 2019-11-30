<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array dan Foreach</title>
</head>

<body>
    <script>
        //deklarasi Array
        var products = ["buku", "dvd", "radio", "smartphone"];

        //tampilkan ke html
        document.write("<h3>Daftar Produk : </h3>");
        document.write("<ol>");

        //cetak isi Array dengan Foreach
        products.forEach((data) => {
            document.write('<li>' + data + '</li>');
        });
        document.write("</ol>");

        //tambah data Array
        products.push("lemari", "kasur");

        //hapus data Array ( delete & pop() )
        delete products[1];

        //delete data dari yang paling belakang
        products.pop();

        //hapus data pada indeks tertentu -> splice(indeks,total)
        products.splice(2, 1);

        //method pada Array
        // 1. filter() -> menyaring data dari Array
        const angka = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        // Kita ambil data yang hanya habis dibagi dua saja
        const filteredArray = angka.filter((item) => {
            return item % 2 === 0
        });

        console.log(filteredArray); // -> [2, 4, 6, 8]

        //2.includes() -> cek data ada di dalam Array atau tidak
        var adaBuku = products.includes("buku");
        console.log(adaBuku); //-> true

        //3. sort() -> mengurutkan data pada Array
        var alfabet = ['a', 'f', 'z', 'e', 'r', 'g'];

        console.log(alfabet.sort()); //->  ["a", "e", "f", "g", "r", "z"]
        console.log(angka.sort()); // -> [1, 2, 3, 4, 5, 6, 7, 8, 9]
    </script>
</body>

</html>