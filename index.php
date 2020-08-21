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
                <div class="row text-light p-2 movieContainer col-lg-12" id="moviePremieres">
                    <div class="row topicHeader">
                        <h6 class="p-1">Premieres</h6>
                        <a href="#">See everything</a>
                    </div>


                </div>  
            </section>
            
            <section>
                <div class="row text-light p-2 movieContainer" id="movieClassics">
                    <div class="row topicHeader">
                        <h6 class="p-1">Classics</h6>
                        <a href=""></a>
                    </div>
                </div>  
            </section>

            <section>
                <div class="row text-light p-2 movieContainer" id="movieReleases">
                    <div class="row topicHeader">
                        <h6 class="p-1">Next releases</h6>
                        <a href=""></a>
                    </div>
                </div>  
            </section>

        </div>

    </section>
</div>

<?php include_once 'elements/footer.inc.php'?>

    <!----TippyJS--->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>

    <!-- Production -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!----Scripts--->
    <script src="scripts/main.js"></script>
</body>
</html>