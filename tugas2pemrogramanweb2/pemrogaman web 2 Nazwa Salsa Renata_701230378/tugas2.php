<?php
$headers = [
            "No", 
            "Nama",
            "Tanggal Lahir", 
            "Wafat", 
            "Temuan", 
            "Biografi",  
            "Gambar"
        ];
$pahlawan = [
    [
        "Nama" => "Albert Einsten",
        "Tanggal Lahir" => "14 Maret 1879",
        "Wafat" => "18 April 1955",
        "Temuan" => "Teori Relative",
        "Biografi" => "Albert Einstein adalah fisikawan asal Jerman yang terkenal dengan teori relativitas. Ia memenangkan Hadiah Nobel Fisika pada 1921 dan dikenal sebagai pendukung perdamaian",
        "Gambar" => "gambar\albert.jpg"
    ],
    [
        "Nama" => "Isaac Newton",
        "Tanggal Lahir" => "4 Januari 1643",
        "Wafat" => "31 Maret 1727",
        "Temuan" => "Hukum Gravitasi dan Hukum Gerak",
        "Biografi" => "Isaac Newton adalah ilmuwan Inggris yang menemukan hukum gravitasi dan tiga hukum gerak, dasar fisika klasik, serta mengembangkan kalkulus. Karyanya sangat berpengaruh dalam ilmu pengetahuan.",
        "Gambar" => "gambar\isaac.jpg"
    ],
    [
        "Nama" => "Thomas Alva Edison",
        "Tanggal Lahir" => "11 Februari 1847",
        "Wafat" => "18 Oktober 1931",
        "Temuan" => "Bola Lampu dan Fonograf",
        "Biografi" => "Thomas Alva Edison adalah penemu dan pengusaha asal Amerika yang terkenal atas kontribusinya dalam pengembangan lampu.",
        "Gambar" => "gambar/thomas.jpg"
    ],
    [
        "Nama" => "Nikola Tesla",
        "Tanggal Lahir" => "10 Juli 1856",
        "Wafat" => "7 Januari 1943",
        "Temuan" => "Sistem Listrik AC dan Transformator",
        "Biografi" => "Nikola Tesla adalah penemu dan insinyur kelahiran Serbia yang terkenal atas kontribusinya dalam pengembangan arus listrik bolak-balik (AC), sistem tenaga listrik modern, dan teknologi nirkabel.",
        "Gambar" => "gambar/nikolas.jpg"
    ],
    [
        "Nama" => "Michael Faraday",
        "Tanggal Lahir" => "22 September 1791",
        "Wafat" => "25 Agustus 1867",
        "Temuan" => "Elektromagnetisme dan Induksi Elektromagnetik",
        "Biografi" => "Michael Faraday adalah ilmuwan Inggris yang terkenal dalam bidang fisika dan kimia. Ia dikenal sebagai pelopor dalam penelitian elektromagnetisme dan elektrolysis.",
        "Gambar" => "gambar\michael.jpg"
    ],
    [
        "Nama" => "Alexander Graham Bell",
        "Tanggal Lahir" => "3 Maret 1847",
        "Wafat" => "2 Agustus 1922",
        "Temuan" => "Telepon",
        "Biografi" => "Alexander Graham Bell adalah ilmuwan dan penemu asal Skotlandia yang terkenal karena menciptakan telepon pada tahun 1876.",
        "Gambar" => "gambar\alexander.jpg"
    ],
    [
        "Nama" => "Dmitri Mendeleev",
        "Tanggal Lahir" => "8 Februari 1834",
        "Wafat" => "2 Februari 1907",
        "Temuan" => "Tabel Periodik",
        "Biografi" => "Dmitri Mendeleev adalah ilmuwan Rusia yang dikenal sebagai bapak tabel periodik unsur. Pada tahun 1869, ia menyusun tabel periodik pertama yang mengorganisir unsur-unsur berdasarkan masa atom dan sifat kimianya.",
        "Gambar" => "gambar\dmitri.jpg"
    ],
    [
        "Nama" => "Alfred Nobel",
        "Tanggal Lahir" => "21 Oktober 1833",
        "Wafat" => "10 Desember 1907",
        "Temuan" => "Dinamit",
        "Biografi" => "Alfred Nobel  adalah seorang kimiawan, insinyur, dan penemu asal Swedia, terkenal karena menciptakan dinamit. Meskipun kekayaannya berasal dari penemuan ini, Nobel juga dikenal karena keinginannya untuk mempromosikan perdamaian.",
        "Gambar" => "gambar\alfred.jpg"
    ],
    [
        "Nama" => "Alessandro Volta",
        "Tanggal Lahir" => "18 Februari 1745",
        "Wafat" => "5 Maret 1827",
        "Temuan" => "Baterai Volta",
        "Biografi" => "Alessandro Volta adalah fisikawan dan kimiawan asal Italia yang terkenal karena menciptakan baterai pertama, yang dikenal sebagai tumpukan Volta pada tahun 1800.",
        "Gambar" => "gambar\alesandro.jpg"
    ],
    [
        "Nama" => "Johannes Gutenberg",
        "Tanggal Lahir" => "1398",
        "Wafat" => "3 Februari 1468",
        "Temuan" => "Mesin Cetak",
        "Biografi" => "Johannes Gutenberg adalah seorang penemu dan pencetak asal Jerman yang dikenal karena memperkenalkan teknik percetakan dengan huruf cetak bergerak di Eropa.",
        "Gambar" => "gambar\johannes.jpg"
    ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%; 
        }
        td, th {
            text-align: center; 
        }
    </style>
</head>
<body>
    <table border="2" cellpadding="3" cellspacing="3">
       
        
            <tr>
                <?php foreach($headers as $header): ?>
                    <th><?=  $header?></th>
                <?php endforeach ; ?>
            </tr>
        <?php foreach($pahlawan as $index => $pahlwn) : ?>
            <tr>
                <td><?= $index + 1 ?></td> 
                <td><?= $pahlwn['Nama'] ?></td>
                <td><?= $pahlwn['Tanggal Lahir'] ?></td>
                <td><?= $pahlwn['Wafat'] ?></td>
                <td><?= $pahlwn['Temuan'] ?></td>
                <td><?= $pahlwn['Biografi']?></td>
                <td style="display: flex; justify-content: center;"><img src="<?= $pahlwn['Gambar']?>" weight="50" height="50" ></td>
            </tr>
        <?php endforeach ; ?>

    </table>
</body