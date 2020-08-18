<?php
include_once 'app/conection.inc.php';
include_once 'app/userRepository.inc.php';


include_once 'elements/head.inc.php';
include_once 'elements/header.inc.php';

?>


 <!-------MAIN SECTION----------->
<div class="container col-lg-10" id="mainSection">
    <section class="row p-2">

        <div class="container col-lg-2" id="mainAside">
            <aside class="container">
                <h6 class="text-light text-center">MOVIE GENRES</h5>
                <ul class="text-light text-nowrap">
                    <li>💣<a href="#">Action</a> [<span class="nMovies"></span>]</li>
                    <li>💣<a href="#">Animation</a> [<span class="nMovies"></span>]</li>
                    <li>💣<a href="#">Anime</a>     [<span class="nMovies"></span>]</li>
                    <li>💣<a href="#">Martial Arts</a> [<span class="nMovies"></span>]</li>
                    <li>💣<a href="#">Serial Killers</a> [<span class="nMovies"></span>]</li>
                    <li>💣<a href="#">Adventure</a> [<span class="nMovies"></span>]</li>
                    <li>💣<a href="#">Dance</a> [<span class="nMovies"></span>]</li>
                    <li>💣<a href="#">Warlike</a> [<span class="nMovies"></span>]</li>
                    <li>💣<a href="#">Biographical</a> [<span class="nMovies"></span>]</li>
                    <li>💣<a href="#">Catastrophe</a> [<span class="nMovies"></span>]</li>
                    <li>💣<a href="#">Science fiction</a> [<span class="nMovies"></span>]</li>
                    <li>💣<a href="#">Teen Cinema</a> [<span class="nMovies"></span>]</li>
                </ul>
            </aside>
        </div>


        <div class="container col-lg-9" id="mainSectionMovies">

            <section>
                <div class="row text-light p-2">
                    <div class="row topicHeader">
                        <h6 class="p-1">Premieres</h6>
                        <a href="#">See everything</a>
                    </div>

 
                    <div class="coverDiv">
                        <img src="img/exemple.jpeg" alt="">
                    </div>
                    <div class="coverDiv">
                        <img src="img/exemple.jpeg" alt="">
                    </div>
                    <div class="coverDiv">
                        <img src="img/exemple.jpeg" alt="">
                    </div>

                </div>  
            </section>
            
            <section>
                <div class="row text-light p-2">
                    <div class="row topicHeader">
                        <h6 class="p-1">Classics</h6>
                        <a href=""></a>
                    </div>

                    
                    <div class="coverDiv">
                        <img src="img/exemple.jpeg" alt="">
                    </div>
                    <div class="coverDiv">
                        <img src="img/exemple.jpeg" alt="">
                    </div>
                    <div class="coverDiv">
                        <img src="img/exemple.jpeg" alt="">
                    </div>

                </div>  
            </section>

            <section>
                <div class="row text-light p-2">
                    <div class="row topicHeader">
                        <h6 class="p-1">Next releases</h6>
                        <a href=""></a>
                    </div>

                    
                    <div class="coverDiv">
                        <img src="img/exemple.jpeg" alt="">
                    </div>
                    <div class="coverDiv">
                        <img src="img/exemple.jpeg" alt="">
                    </div>
                    <div class="coverDiv">
                        <img src="img/exemple.jpeg" alt="">
                    </div>

                </div>  
            </section>

        </div>

    </section>
</div>

<?php include_once 'elements/footer.inc.php'?>

</html>