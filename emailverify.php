<?php 
include_once 'elements/head.inc.php';
?>
<body class="container">

<style>
    body{
        background-color: black;
    }
    h1{
        font-family: "Lemonada", cursive;
    }
    p{
        font-family: "Inconsolata", monospace;
    }
    #main{
        border-radius: 50%;
        border-color: white;
    }
</style>

    <div class="container-fluid">
        <header style="margin-bottom: 100px;">
            <?php for ($i=0; $i < 100; $i++) { 
                echo '💥 💥 💥';
            }  ?>
        </header>
    </div>

    <div class="container" id="main">
        <h1 class="text-center text-light">PelisBoom 💥</h1>
        <div>
            <p class="text-center text-primary">
                You must verify your account, please go to your email and click the link that we
                sent to you. 
            </p>
        </div>
    </div>

    <footer style="margin-top: 100px;">
    <?php for ($i=0; $i < 200; $i++) { 
                echo '💥 💥 💥';
            }  ?>
    </footer>
</body>
</html>