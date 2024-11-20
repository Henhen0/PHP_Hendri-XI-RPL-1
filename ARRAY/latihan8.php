<html style="background-color: black; color: white; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
<?php

$dataJSON = '[
    {
        "no" : "1001",
        "judul" : "Laskar Pelangi",
        "genre" : "Drama, Inspiratif",
        "penulis" : "Andrea Hirata",
        "penerbit" : "Bentang Pustaka",
        "thn_rilis" : "2005"
    },
    {
        "no" : "1002",
        "judul" : "Bumi Manusia",
        "genre" : "Sejarah, Fiksi",
        "penulis" : "Pramoedya Ananta Toer",
        "penerbit" : "Hasta Mitra",
        "thn_rilis" : "1980"
    },
    {
        "no" : "1003",
        "judul" : "5 cm",
        "genre" : "Motivasi, Petualangan",
        "penulis" : "Donny Dhirgantoro",
        "penerbit" : "Grasindo",
        "thn_rilis" : "2005"
    },
    {
        "no" : "1004",
        "judul" : "Ayat-Ayat Cinta",
        "genre" : "Romantis, Religius",
        "penulis" : "Habiburrahman El Shirazy",
        "penerbit" : "Republika",
        "thn_rilis" : "2004"
    },
    {
        "no" : "1005",
        "judul" : "Ketika Cinta Bertasbih",
        "genre" : "Romantis, Religius",
        "penulis" : "Habiburrahman El Shirazy",
        "penerbit" : "Republika",
        "thn_rilis" : "2006"
    },
    {
        "no" : "1006",
        "judul" : "The Fault in Our Stars",
        "genre" : "Romantis, Drama",
        "penulis" : "John Green",
        "penerbit" : "G.P. Putnam \'s Sons",
        "thn_rilis" : "2012"
    },
    {
        "no" : "1007",
        "judul" : "Harry Potter and the Sorcerer\'s Stone",
        "genre" : "Fantasi, Petualangan",
        "penulis" : "J.K. Rowling",
        "penerbit" : "Bloomsbury",
        "thn_rilis" : "1997"
    },
    {
        "no" : "1008",
        "judul" : "To Kill a Mockingbird",
        "genre" : "Fiksi, Drama",
        "penulis" : "Harper Lee",
        "penerbit" : "J.B. Lippincott",
        "thn_rilis" : "1960"
    },
    {
        "no" : "1009",
        "judul" : "The Great Gatsby",
        "genre" : "Klasik, Fiksi",
        "penulis" : "F. Scott Fitzgerald",
        "penerbit" : "Charles Scribner\'s Sons",
        "thn_rilis" : "1925"
    },
    {
        "no" : "1010",
        "judul" : "Pride and Prejudice",
        "genre" : "Romantis, Klasik",
        "penulis" : "Jane Austen",
        "penerbit" : "T. Egerton",
        "thn_rilis" : "1813"
    },
    {
        "no" : "1011",
        "judul" : "1984",
        "genre" : "Dystopia, Fiksi",
        "penulis" : "George Orwell",
        "penerbit" : "Secker & Warburg",
        "thn_rilis" : "1949"
    },
    {
        "no" : "1012",
        "judul" : "The Alchemist",
        "genre" : "Fiksi, Motivasi",
        "penulis" : "Paulo Coelho",
        "penerbit" : "HarperOne",
        "thn_rilis" : "1988"
    },
    {
        "no" : "1013",
        "judul" : "The Catcher in the Rye",
        "genre" : "Fiksi, Drama",
        "penulis" : "J.D. Salinger",
        "penerbit" : "Little, Brown and Company",
        "thn_rilis" : "1951"
    },
    {
        "no" : "1014",
        "judul" : "The Da Vinci Code",
        "genre" : "Misteri, Thriller",
        "penulis" : "Dan Brown",
        "penerbit" : "Doubleday",
        "thn_rilis" : "2003"
    },
    {
        "no" : "1015",
        "judul" : "The Hunger Games",
        "genre" : "Dystopia, Petualangan",
        "penulis" : "Suzanne Collins",
        "penerbit" : "Scholastic Press",
        "thn_rilis" : "2008"
    },
    {
        "no" : "1016",
        "judul" : "The Kite Runner",
        "genre" : "Drama, Persahabatan",
        "penulis" : "Khaled Hosseini",
        "penerbit" : "Riverhead Books",
        "thn_rilis" : "2003"
    },
    {
        "no" : "1017",
        "judul" : "Animal Farm",
        "genre" : "Dystopia, Satir",
        "penulis" : "George Orwell",
        "penerbit" : "Secker & Warburg",
        "thn_rilis" : "1945"
    },
    {
        "no" : "1018",
        "judul" : "The Picture of Dorian Gray",
        "genre" : "Fiksi, Klasik",
        "penulis" : "Oscar Wilde",
        "penerbit" : "Lippincott",
        "thn_rilis" : "1890"
    },
    {
        "no" : "1019",
        "judul" : "The Road",
        "genre" : "Dystopia, Drama",
        "penulis" : "Cormac McCarthy",
        "penerbit" : "Knopf",
        "thn_rilis" : "2006"
    },
    {
        "no" : "1020",
        "judul" : "The Girl with the Dragon Tattoo",
        "genre" : "Misteri, Thriller",
        "penulis" : "Stieg Larsson",
        "penerbit" : "Norstedts Förlag",
        "thn_rilis" : "2005"
    }    
]';

$data1 = json_decode($dataJSON);

echo "<h2 align='center'>Kumpulan Novel Terbaru</h2>";

echo "<table border='' align='center' cellpadding='8'>";
echo "<tr>
        <th>No</th>
        <th>Judul</th>
        <th>Genre</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Rilis</th>
      </tr>";

foreach ($data1 as $novel) {
    echo "<tr align='center'>
            <td>{$novel->no}</td>
            <td>{$novel->judul}</td>
            <td>{$novel->genre}</td>
            <td>{$novel->penulis}</td>
            <td>{$novel->penerbit}</td>
            <td>{$novel->thn_rilis}</td>
          </tr>";
}

echo "</table>";

?>
</html>