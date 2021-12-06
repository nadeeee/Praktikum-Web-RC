<?php
session_start();
if (!isset($_SESSION['userID'])) {
    header("Location: index.php");
}
?>

<?php require_once('app/db/Koneksi.php');
$db = new Koneksi();
$conn = $db->connect();

$posts = $conn->query("SELECT * FROM post")->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/homepage.css">
    <!-- modal iklan styling -->
    <link rel="stylesheet" href="./assets/iklan/iklan.css">
</head>



<body>
<header class="header">
        <nav class="navbar">
            <a href="#" class="nav-logo">auau.</a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link-log">Logout</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <section class="base">
        <main>
            <?php foreach ($posts as $item) { ?>

                <div style="width: 50%;">
                    <div class="card" data-id="<?= $item['id']; ?>" onclick="addHist(this)">
                        <div class="container">
                            <h3 class="card-head"><?= $item['judul']; ?></h3>
                            <p class="card-body"><?= $item['isi']; ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </main>

        <aside>
            <h2>History</h2>
            <div id="history_buck">
            </div>
            <button class="button" onclick="clearhistory()">clear history</button>
        </aside>
    </section>

<?php
if (!isset($_COOKIE['tolak']) || $_COOKIE['tolak'] !== 'yes'){
    echo'<script src="./assets/iklan/iklan.js"></script>';
}
?>

<script src="./history.js"></script>
<script src="./ham.js"></script>
</body>

</html>
<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">nadecorp <i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nulla aut eos esse, provident quod animi, non reiciendis, beatae porro repellat excepturi labore ipsum ex illo veritatis. Provident, recusandae totam.</p>
          </div>
        </div>
        <br>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div>
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">nadecorp</a>.
            </p>
          </div>
        </div>
      </div>
</footer>
