<?php
// index.php sederhana
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Web Sederhana PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 40px;
            text-align: center;
        }
        .card {
            background: white;
            padding: 30px;
            max-width: 480px;
            margin: auto;
            border-radius: 14px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        h1 {
            margin-bottom: 10px;
        }
        p {
            margin-top: 0;
            color: #444;
        }
        a.button {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
            margin-top: 14px;
        }
        a.button:hover {
            background: #005fcc;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Selamat Datang di PHP!</h1>
        <p>Ini adalah contoh halaman index.php sederhana.</p>

        <?php echo "<p>Hari ini: " . date('d-m-Y H:i:s') . "</p>"; ?>

        <a href="#" class="button">Tombol PHP</a>
    </div>
</body>
</html>