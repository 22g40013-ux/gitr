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
font-family: 'Segoe UI', Arial, sans-serif;
background: linear-gradient(135deg, #4e73df, #1cc88a);
min-height: 100vh;
display: flex;
justify-content: center;
align-items: center;
padding: 20px;
}
.card {
background: white;
padding: 40px;
width: 100%;
max-width: 480px;
border-radius: 20px;
box-shadow: 0 10px 25px rgba(0,0,0,0.15);
text-align: center;
animation: fadeIn 0.6s ease;
}
h1 {
margin-bottom: 12px;
color: #333;
}
p {
margin-top: 0;
color: #555;
}
a.button {
display: inline-block;
background: #4e73df;
color: white;
padding: 12px 20px;
border-radius: 10px;
text-decoration: none;
margin-top: 18px;
font-weight: 600;
transition: 0.25s ease;
}
a.button:hover {
background: #2e59d9;
transform: scale(1.05);
}
@keyframes fadeIn {
from { opacity: 0; transform: translateY(20px); }
to { opacity: 1; transform: translateY(0); }
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