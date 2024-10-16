<?php
// Array untuk menyimpan daftar buku
$buku = [
    [
        'judul' =>'Belajar PHP untuk pemula',
        'penulis' =>'Hanafi',
        'tahun' => 2024
    ],
    [
        'judul' =>'Panduan CSS Modern',
        'penulis' =>'Google',
        'tahun' => 2023
    ],
    [
        'judul' =>'HTML5 dan CSS3',
        'penulis' =>'W3 School',
        'tahun' => 2022
    ]
    ];
    ?>

    <html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahum</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buku as $item): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['judul']); ?></td>
                    <td><?php echo htmlspecialchars($item['penulis']); ?></td>
                    <td><?php echo htmlspecialchars($item['tahun']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>                        
                       