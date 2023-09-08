<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/style.css">
</head>
<body>


<div class="container mb-3" style="text-align:center;">
  <h3 style="color: #37988e;"><b>Sekolah Menengah Kejuruan Negeri 2 Trenggalek</b></h3>
  </div>

<style>
     * {
         margin:0; 
         padding:0;
     }
 
    nav {
        margin:auto;
        text-align: center;
        width: 100%;
        font-family: arial;
    } 
    
    nav ul {
        background:#37988e;
        padding: 0 20px;
        list-style: none;
        position: relative;
        display: inline-table;
        width: 100%;
     }

    nav ul li{
        float:left;
    }

    nav ul li:hover{
        background:#d68d9a;
    }

    nav ul li:hover a{
     	color:#000;
    }

    nav ul li a{
     	display: block;
     	padding: 25px;
     	color: #fff;
     	text-decoration: none;
    }
    </style>

</head>
<body>
<nav>
     <ul>
     	<li><a href="<?= BASE_URL;?>/home" style="background-color: #d68d9a; margin-left: 88px;">Home</a></li>
     	<li><a href="<?= BASE_URL;?>/komli">Kompetensi Keahlian</a></li>
     	<li><a href="<?= BASE_URL;?>/blog">Data Guru</a></li>
      <li><a href="<?= BASE_URL;?>/data_siswa">Data Siswa</a></li>
      <li><a href="<?= BASE_URL;?>/user/profile">About</a></li>
     </ul>
</nav>
</body>
</html>