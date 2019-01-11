<div id="gtco-features">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>Ford Transit</h2>
            </div>
        </div>

        <div class="row row-pb-md">
            <div class="col-md-4 animate-box" data-animate-effect="slideInLeft">
                <a onclick="showPics();"><img src="images/minibus-along-mountain-coast-sea.jpg" alt="kisbusz" style="width:100%;"></a>
            </div>
            <div class="col-md-8 animate-box" data-animate-effect="slideInRight">
                <h4 class="font-weight-bold">Kisbuszaink</h4>
                <p>- Ford Transit, 9 személyes, diesel üzemű, 6 sebességes váltó, kedvező fogyasztás (6-8l) </p>

                <h4 class="font-weight-bold">Felszereltség:</h4>
                <p>- tempomat, állófűtés, sötétített üveg, MP3-lejátszás, AUX kimenet, kormányról vezérelhető multimédia rendszer, dupla klíma, hátul külön állítható fűtés-hűtés, ISOFIX ülések, visszagurulás gátló, centrálzár, elektromos tükrök, fűthető-hűthető szélvédő, vonóhorog</p>
            </div>
        </div>
        <div class="row-pb-md">
            <?php
            for ($i=1; $i<=17;$i++) {
                echo '<div class="col-lg-3 col-md-4 thumb my-4">';
                echo '<a href="images/tranzit/pic'.$i.'.jpg" class="fancybox" rel="ligthbox">';
                echo '<img src="images/tranzit/pic'.$i.'.jpg" alt="kisbusz" class=" img-fluid zoom">';
                echo '</a></div>';
            }
            ?>
        </div>
    </div>
</div>


