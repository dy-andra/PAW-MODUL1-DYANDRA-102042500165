<?php
    $nama = ['Pomni Pendantz', 'Jax Pendantz', 'Kinger Pendantz', 'Ribbit Pendantz', 'Jax Animegaz', 'Ribbit Animegaz'];
    $kategori = [' Pendantz ', ' Animegaz '];
    $harga = ['500.000', '1.000.000'];
    $stok = [1000, 500, 0];

?>

<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="style.css">
            <title>Cia Store</title>
        </head>
        <body>
            <h1>Welcome to Cia Store!</h1>
            <div class="div">
                <img src="Pomni-Default.webp" width="200">
                    <?php
                        echo "<br>";
                        echo $nama['0'];
                        echo "<br>";
                        echo $kategori['0'];
                        echo "<br>";
                        echo $harga['0'];
                        echo "<br>";
                        if ($stok == $stok[0] || $stok[1]) {
                            echo "Available";
                            ?>
                                <button>Buy now!</button>
                            <?php
                        }
                        else {
                            echo "Sold out";
                        }
                        echo "<br>";
                    ?>
                <img src="JaxPendantz_Default.webp" width="200">
                    <?php
                        echo "<br>";
                        echo $nama['1'];
                        echo "<br>";
                        echo $kategori['0'];
                        echo "<br>";
                        echo $harga['0'];
                        echo "<br>";
                        if ($stok == $stok[0] || $stok[1]) {
                            echo "Available";
                            ?>
                                <button>Buy now!</button>
                            <?php
                        }
                        else {
                            echo "Sold out";
                        }
                        echo "<br>";
                    ?>
                <img src="Animiniz_Pendantz_Kinger_Default.webp" width="200">
                    <?php
                        echo "<br>";
                        echo $nama['2'];
                        echo "<br>";
                        echo $kategori['0'];
                        echo "<br>";
                        echo $harga['0'];
                        echo "<br>";
                        if ($stok == $stok[0] || $stok[1]) {
                            echo "Available";
                            ?>
                                <button>Buy now!</button>
                            <?php
                        }
                        else {
                            echo "Sold out";
                        }
                        echo "<br>";
                    ?>
            <div class="div">
                <img src="Iconic_1.webp" width="200">
                    <?php
                        echo "<br>";
                        echo $nama['3'];
                        echo "<br>";
                        echo $kategori['0'];
                        echo "<br>";
                        echo $harga['0'];
                        echo "<br>";
                        if ($stok == $stok[0] || $stok[1]) {
                            echo "Available";
                            ?>
                                <button>Buy now!</button>
                            <?php
                        }
                        else {
                            echo "Sold out";
                        }
                        echo "<br>";
                    ?>
                <img src="JaxAniMEGAZnew.webp" width="200">
                    <?php
                        echo "<br>";
                        echo $nama['4'];
                        echo "<br>";
                        echo $kategori['1'];
                        echo "<br>";
                        echo $harga['1'];
                        echo "<br>";
                        if ($stok == $stok[0] || $stok[1]) {
                            echo "Available";
                            ?>
                                <button>Buy now!</button>
                            <?php
                        }
                        else {
                            echo "Sold out";
                        }
                        echo "<br>";
                    ?>
                <img src="AniMEGAZ_Ribbit_Render1.webp" width="200">
                    <?php
                        echo "<br>";
                        echo $nama['5'];
                        echo "<br>";
                        echo $kategori['1'];
                        echo "<br>";
                        echo $harga['1'];
                        echo "<br>";
                        if ($stok == $stok[0] || $stok[1]) {
                            echo "Available";
                            ?>
                                <button>Buy now!</button>
                            <?php
                        }
                        else {
                            echo "Sold out";
                        }
                        echo "<br>";
                    ?>
            </div>  
            </div>
        </body>
    </html>