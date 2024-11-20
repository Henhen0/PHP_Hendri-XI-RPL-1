<!DOCTYPE html>
<html lang="en" style="background-color: black; color: white; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kumpulan Novel Terbaru</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #1e1e1e;
        }
        .table {
            border-radius: 0.5rem;
            overflow: hidden;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table-dark th {
            background-color: #343a40;
        }
        h2 {
            text-shadow: 1px 1px 2px rgba(0,0,0,0.7);
        }
        .header-section {
            background: linear-gradient(90deg, rgba(255,0,150,1) 0%, rgba(0,204,255,1) 100%);
            padding: 20px;
            border-radius: 0.5rem;
        }
    </style>
</head>
<body>
    
    <?php
    $dataJSON = '[ 
        { "no" : "1001", "judul" : "Laskar Pelangi", "genre" : "Drama, Inspiratif", "penulis" : "Andrea Hirata", "penerbit" : "Bentang Pustaka", "thn_rilis" : "2005" }, 
        { "no" : "1002", "judul" : "Bumi Manusia", "genre" : "Sejarah, Fiksi", "penulis" : "Pramoedya Ananta Toer", "penerbit" : "Hasta Mitra", "thn_rilis" : "1980" },
        { "no" : "1003", "judul" : "5 cm", "genre" : "Motivasi, Petualangan", "penulis" : "Donny Dhirgantoro", "penerbit" : "Grasindo", "thn_rilis" : "2005" },
        { "no" : "1004", "judul" : "Ayat-Ayat Cinta", "genre" : "Romantis, Religius", "penulis" : "Habiburrahman El Shirazy", "penerbit" : "Republika", "thn_rilis" : "2004" },
        { "no" : "1005", "judul" : "Ketika Cinta Bertasbih", "genre" : "Romantis, Religius", "penulis" : "Habiburrahman El Shirazy", "penerbit" : "Republika", "thn_rilis" : "2006" },
        { "no" : "1006", "judul" : "The Fault in Our Stars", "genre" : "Romantis, Drama", "penulis" : "John Green", "penerbit" : "G.P. Putnam\'s Sons", "thn_rilis" : "2012" },
        { "no" : "1007", "judul" : "Harry Potter and the Sorcerer\'s Stone", "genre" : "Fantasi, Petualangan", "penulis" : "J.K. Rowling", "penerbit" : "Bloomsbury", "thn_rilis" : "1997" },
        { "no" : "1008", "judul" : "To Kill a Mockingbird", "genre" : "Fiksi, Drama", "penulis" : "Harper Lee", "penerbit" : "J.B. Lippincott", "thn_rilis" : "1960" },
        { "no" : "1009", "judul" : "The Great Gatsby", "genre" : "Klasik, Fiksi", "penulis" : "F. Scott Fitzgerald", "penerbit" : "Charles Scribner\'s Sons", "thn_rilis" : "1925" },
        { "no" : "1010", "judul" : "Pride and Prejudice", "genre" : "Romantis, Klasik", "penulis" : "Jane Austen", "penerbit" : "T. Egerton", "thn_rilis" : "1813" },
        { "no" : "1011", "judul" : "1984", "genre" : "Dystopia, Fiksi", "penulis" : "George Orwell", "penerbit" : "Secker & Warburg", "thn_rilis" : "1949" },
        { "no" : "1012", "judul" : "The Alchemist", "genre" : "Fiksi, Motivasi", "penulis" : "Paulo Coelho", "penerbit" : "HarperOne", "thn_rilis" : "1988" },
        { "no" : "1013", "judul" : "The Catcher in the Rye", "genre" : "Fiksi, Drama", "penulis" : "J.D. Salinger", "penerbit" : "Little, Brown and Company", "thn_rilis" : "1951" },
        { "no" : "1014", "judul" : "The Da Vinci Code", "genre" : "Misteri, Thriller", "penulis" : "Dan Brown", "penerbit" : "Doubleday", "thn_rilis" : "2003" },
        { "no" : "1015", "judul" : "The Hunger Games", "genre" : "Dystopia, Petualangan", "penulis" : "Suzanne Collins", "penerbit" : "Scholastic Press", "thn_rilis" : "2008" },
        { "no" : "1016", "judul" : "The Kite Runner", "genre" : "Drama, Persahabatan", "penulis" : "Khaled Hosseini", "penerbit" : "Riverhead Books", "thn_rilis" : "2003" },
        { "no" : "1017", "judul" : "Animal Farm", "genre" : "Dystopia, Satir", "penulis" : "George Orwell", "penerbit" : "Secker & Warburg", "thn_rilis" : "1945" },
        { "no" : "1018", "judul" : "The Picture of Dorian Gray", "genre" : "Fiksi, Klasik", "penulis" : "Oscar Wilde", "penerbit" : "Lippincott", "thn_rilis" : "1890" },
        { "no" : "1019", "judul" : "The Road", "genre" : "Dystopia, Drama", "penulis" : "Cormac McCarthy", "penerbit" : "Knopf", "thn_rilis" : "2006" },
        { "no" : "1020", "judul" : "The Girl with the Dragon Tattoo", "genre" : "Misteri, Thriller", "penulis" : "Stieg Larsson", "penerbit" : "Norstedts Förlag", "thn_rilis" : "2005" }
    ]';
    
    $data1 = json_decode($dataJSON);
    
    echo "<div class='container my-5 text-center'>"; // Added margin
    echo "<div class='header-section text-center mb-4'>";
    echo "<h2>Kumpulan Novel Terbaru</h2>";
    echo "</div>";
    echo "<table class='table table-dark table-bordered'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>No</th>";
    echo "<th>Judul</th>";
    echo "<th>Genre</th>";
    echo "<th>Penulis</th>";
    echo "<th>Penerbit</th>";
    echo "<th>Tahun Rilis</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
    foreach ($data1 as $novel) {
        echo "<tr class='text-center'>";
        echo "<td>{$novel->no}</td>";
        echo "<td>{$novel->judul}</td>";
        echo "<td>{$novel->genre}</td>";
        echo "<td>{$novel->penulis}</td>";
        echo "<td>{$novel->penerbit}</td>";
        echo "<td>{$novel->thn_rilis}</td>";
        echo "</tr>";
    }
    
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://
