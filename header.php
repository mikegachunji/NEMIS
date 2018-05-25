<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/background.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
    <a class="navbar-brand" href="MainIndex.php"><h1>National Education Management Information System</h1><br/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div style="text-align: center">


        <?php
        session_start();


        if (isset($_SESSION['username'])) {
            if ($_SESSION['access_level'] == 1) {
                echo '	<p><strong>  <a href = "MOEindex.php"> '.$_SESSION['name'] . ' </strong></p></a>';
            }

            if ($_SESSION['access_level'] == 2) {
                echo '<p> <strong>	<a href = "SchoolAdminIndex.php"> ' . $_SESSION['name'] . ' </strong></p></a>';
            }

            if ($_SESSION['access_level'] == 3) {
                echo '	<p> <strong> <a href = "KNECindex.php">' . $_SESSION['name'] . ' </strong></p></a>';
            }
//            echo '';
        }
        ?>
        <br/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <?php
                if (isset($_SESSION['username'])) {
                    echo '<a href="logout.php">Logout</a>';
                    header("MainIndex.php");



                } else {
                    echo '<a href="MainIndex.php">Login</a>';
                }
                ?>
            </div>
        </div>
    </div>


    


</nav>

<br/>