<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #07203d; /* Warna latar belakang */
            color: #fdf3f3; /* Warna teks */
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        h2, h3 {
            color: #fdf3f3; /* Warna teks judul */
        }

        p {
            margin-bottom: 20px;
        }

        b {
            color: #1a1a1a; /* Warna teks tebal */
        }
    </style>
</head>
<body>
    <section id="blog-posts">
        <h1>Ini Blog saya,Selamat Menikmati.</h1>
        <div class="blog-container">
<?php
    $query = "SELECT * FROM blog";
    $result = mysqli_query($conn, $query);

    $no = 1;

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($no >=0) {
            ?>
            <div class="blog-post">
                <h2><?= $row["judul"] ?></h2>
                <p><?= $row["penjelasan"] ?></p>
                <a href="<?= $row["link"] ?>" class="read-more">Read more</a>
            </div>
 <?php } 
            $no++;
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    } ?>
            
        </div>
    </section>
</body>
</html>