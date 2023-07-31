<!DOCTYPE html>
<html>
<head>
    <title>JAM DIGITAL</title>
    <script type="text/javascript">
        function updateClock() {
            var currentTime = new Date();
            var hours = currentTime.getHours();
            var minutes = currentTime.getMinutes();
            var seconds = currentTime.getSeconds();

            // Tambahkan angka 0 di depan jika angka kurang dari 10
            hours = (hours < 10 ? "0" : "") + hours;
            minutes = (minutes < 10 ? "0" : "") + minutes;
            seconds = (seconds < 10 ? "0" : "") + seconds;

            // Tampilkan jam pada elemen dengan id "clock"
            var clockElement = document.getElementById("clock");
            clockElement.innerHTML = hours + ":" + minutes + ":" + seconds;
        }

        // Jalankan fungsi updateClock setiap detik
        setInterval(updateClock, 1000);
    </script>
</head>
<body>
   


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            var images = [
                "gambar1.jpg",
                "gambar2.jpg",
                "gambar3.jpg"
            ]; // Daftar gambar yang akan ditampilkan

            var currentIndex = 0; // Indeks gambar saat ini

            function changeBackground() {
                if (currentIndex === images.length) {
                    currentIndex = 0;
                }

                var imageUrl = images[currentIndex];
                $('body').css('background-image', 'url(' + imageUrl + ')');

                currentIndex++;
            }

            setInterval(changeBackground, 1000); // Ubah gambar setiap 5 detik
        });
    </script>
    <style>
        body {
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>



<h2>Jam Digital</h2>

<?php
$ukuranTulisan = '300px'; // ukuran tulisan yang diinginkan

echo '<span style="font-size:' . $ukuranTulisan . ';" <h1> <div id="clock"></div> </h1>
</span>';
?>

   
</body>
</html>