<?php
include_once("header.php")
?>

    <div class="ps-main">
        <div class="gap-2"></div>
        <div class="container">
            <!-- START: Indhold -->

            <div id="main">
                <H1>Links</H1>
                <div class="white-space">
                    <p>Her er en side med links</p>
                    <p>For at kunne linke til en anden side på interwebbet, skal man bruge html-elementet kaldet anchor. <code>&lt;a href=""&gt;&lt;/a&gt;</code></p>
                    <p>inde i (href="") Skrive man så linket til den respektive side man vil linke til.</p>
                    <p>I vores tilfælde vil vi gerne linke til min wordpress som hedder "http://r18-patrick.it.slotshaven.dk/wordpress"</p> 
                    <p>(Det er rigtig vigtigt at huske http:// eller https:// foran adressen ellers vil den ikke linke til en anden side, men prøve at finde den i det lokale miljø.)</p>
                </div>
            
            <a href="http://r18-patrick.it.slotshaven.dk/wordpress" target="_blank">Link til min blog</a>
            
            </div>

            <!-- END: Indhold -->
        </div>
        <div class="gap-4"></div>

<?php
include_once("footer.php")
?>