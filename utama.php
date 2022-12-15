<?php
require 'functions.php';

if ( isset($_POST["submit"])){

    if ( tambah($_POST)>0){
        echo "
        <script>
            alert('Berhasil Mengirim Pesan');
            document.location.href = 'utama.php';
        </script>";
    }else{
        echo "
        <script>
            alert('Pesan Gagal Dikirim');
            document.location.href = 'utama.php';
        </script>";
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/820e48bb7f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>My Portofolio</title>
</head>

<body>

    <div class="conten">`
        <div class="navbar">
            <ul class="navbar">
                <li><a href="#contact-me"> Contact </a></li>
                <li><a href="#project"> Project </a></li>
                <li><a href="#about-me"> About Me </a></li>
                <li><a href="#perkenalan-singkat"> Home </a></li>
            </ul>
        </div>
        <div id="perkenalan-singkat">
            <h1 class="hi"> Hi, my name is </h1>
            <h1 class="nama"> REGA ANTON GIAPIERRO </h1>
            <h1 class="big-heading"> I build things for the web </h1>
            <p class="singkat"> I am a software engineer myself in building (and sometimes designing) great digital
                experiences. Currently,
                I focus on studying at Primagraha University </p>
        </div>
        <div id="about-me">
            <div class="about">
                <h2>About Me</h2>
            </div>
            <div class="text1">
                <h3>Hello! My name is Rega and I enjoy creating things that live on the internet. My interest in
                    programming started in 2020 when I decided to try a class-specific web. Turns out making the web
                    taught me a lot about HTML & CSS!</h3>
            </div>
            <div class="text2">
                <h3>Fast forward to today, and I have the privilege of being able to major in computer science
                    engineering. My primary focus today is building accessible, inclusive products and digital
                    experiences on Upstatement for a wide range of clients.</h3>
            </div>
            <div class="text3">
                <h3>I've also just launched a coursework project that includes everything you need to create a web app
                    with HTML & CSS </h3>
                <h3>Here are a for technologies I've been working with recently:</h3>
            </div>
            <ul class="skills-list">
                <li class="html">HTML</li>
                <li class="css">CSS</li>
                <li class="python">Python</li>
                <li class="c">PHP</li>
            </ul>
        </div>
        <div class="foto">
            <img src="Gambar/profil.jpeg">
        </div>
        <div id="project">
            <h1>Project</h1>
            <div class="project1">
                <a href="project/Portofolio/index.html" target="blank"> <img src="Gambar/01.PNG">
                </a>
                <p> Portofolio </p>
            </div>
            <div class="project2">
                <a href="project/Web Kelas/RA-C/index.html" target="blank"> <img src="Gambar/02.PNG"> </a>
                <p>Web Kelas Semester 1</p>
            </div>
            <div class="project3">
                <a href="project/UTS/index.html" target="blank"> <img src="Gambar/03.PNG"> </a>
                <p>Tugas UTS Semester 2</p>
            </div>
        </div>
        <div id="contact-me">
            <h1>Contact</h1>
            <form  action="" method="post">
                <label for="name"> Full Name : </label><br>
                <input type="text" id="nama" name="nama" size="50px" required><br><br>
                <label for="email"> Email : </label><br>
                <input type="email" id="email" name="email" size="50px" required><br><br>
                <label for="pesan"> Pesan : </label><br>
                <textarea id="pesan" name="pesan" cols="50" rows="10" required></textarea><br><br>
                <button type="submit" name="submit">Kirim</button>
            </form>
        </div>
    </div>

</body>

</html>