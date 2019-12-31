<?php
include_once("header.php")
?>

    <div class="ps-main">
        <div class="gap-2"></div>
        <div class="container">
            <!-- START: Indhold -->

            <div id="main">
                <div>
                    <h1>Dette er HTML</h1>
                    <p>Hypertext Markup Language er en simpel måde at formattere tekst på, så den er opdelt efter typografiske standarder: verskrifter, afsnit, citater osv osv.</p>
                        <p>Her er et meget flot billede.</p>
                        <img id="html-pic" class="float-left" src="assets/images/html.png">  
                    <h2>Hypertext</h2>
                    <p>Den grundlæggende tanke bag Hypertext var denne: tænk hvis man læste i en bog og stødte på et eller andet som fangede ens interesse, men som bogen ikke beskrev. Tænk hvis man nu kunne springe direkte ind i en helt anden bog, som handlede om lige netop det?</p>
                    <p>Den udfordring løser Hypertekst - eller "linket" tekst, som er grundlaget for Internettet som vi kender det i dag. </p>            
                    <!-- <p><a href="2.html">Her er et link til side to.</a> For at skabe et link indrammer man teksten med et "a" tag.</p>
                    <p><a href="3.html">Til side 3 hehehehehe</a> Her er et link til side tre</p> -->
                </div>                    
                <hr id="divider">                    
                <div>
                    <h2>Udbredelse</h2>
                    <p>Internettet har vundet nærmest ufattelig udbredelse på hele kloden i de 25 år det har eksisteret. I dag har godt 50% af alle mennesker direkte adgang til nette gennem egen telefon eller computer. Selvom teknologien er fantastisk, indeholder et så udbredt informationsnetværk også sine store problemer:</p>
                    <blockquote cite="https://www.brainyquote.com/quotes/quotes/e/edwardsnow523849.html"> I can't in good conscience allow the U.S. government to destroy privacy, internet freedom and basic liberties for people around the world with this massive surveillance machine they're secretly building.
                        <br> Edward Snowden
                        <p>Read more at: <a href="https://www.brainyquote.com/quotes/quotes/e/edwardsnow523849.html">https://www.brainyquote.com/quotes/quotes/e/edwardsnow523849.html</a></p>
                    </blockquote>
                </div>            
                <hr>            
                <div>
                    <h2>Lyd</h2>
                    <p>For at indsætte lydelementer bruger man tagget audio. Inden i audio elementet skal der være et "source" element, som peger på den fil der skal afspilles. Fordi forskellige browsere understøtter forskellige lydformater, skal der helst være et link til både en .ogg og en .mp3 fil.</p>
                    <audio class="center" controls>
                        <source src="assets/sound-video-files/horse.ogg" type="audio/ogg">
                        <source src="assets/sound-video-files/horse.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>           
                <hr>            
                <div>
                    <h2>Video</h2>
                    <p>Her er en video.</p>
                    <video class="center" width="320" height="240" controls>
                        <source src="assets/sound-video-files/mov_bbb.mp4">
                        <source src="assets/sound-video-files/mov_bbb.ogv">
                    </video>
                </div>            
                <div>
                    <h2>Iframe</h2>
                    <p>Her en HTML side i en HTML side.</p>
                    <iframe class="content" src="https://dk.wikipedia.org/wiki/html" frameborder="0" width="100%" height="400px" ></iframe>
                </div>            
            </div>

            <!-- END: Indhold -->
        </div>
        <div class="gap-4"></div>

<?php
include_once("footer.php")
?>