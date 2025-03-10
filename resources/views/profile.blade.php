<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #fff;
        }
        .profile-container {
            text-align: center;
        }
        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            border: 2px solid #aaa;
        }
        .profile-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .profile-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        .info-box {
            background: #ccc;
            padding: 10px 40px;
            border-radius: 5px;
            font-weight: bold;
            width: 200px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-img">
            <img src="{{ asset('pic.jpeg') }}" alt="Foto Profil">
        </div>
        <div class="profile-info">
            <div class="info-box">Marcela Hayati</div>
            <div class="info-box">D3 Manajemen Informatika</div>
            <div class="info-box">2307051023</div>
        </div>
    </div>
</body>
</html>
