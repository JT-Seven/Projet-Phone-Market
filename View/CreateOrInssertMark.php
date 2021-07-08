

<div class="container-sell">
    <div class="information">
        <div class="overlay"></div>
        <img src="img/iphone12.png" class="mobile" alt="">
        <div id="circle">
            <div class="feature one">
                <img src="img/mark.png" id="mark" alt="">
                <div>
                    <h3>Mark</h3>
                    <p>Apple</p>
                </div>
            </div>
            <div class="feature two">
                <img src="img/model.png" id="model"alt="">
                <div>
                    <h3>Model</h3>
                    <p>IPhone 12</p>
                </div>
            </div>
            <div class="feature three">
                <img src="img/capacite.png" id="capacity"  alt="">
                <div>
                    <h3>Capacity</h3>
                    <p>512GO</p>
                </div>
            </div>
            <div class="feature four">
                <img src="img/tache.png" id="tache" alt="">
                <div>
                    <h3>Color</h3>
                    <p>Black</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-informations-sell">
        <div class="container-create-phone">
            <form method="GET" action="index.php">
                <h3>Do you want to sell your phone ?</h3>
                <p>It's easy, just click on sell my phone and follow the sales steps by selecting and entering all the necessary information about the phone.</p>
                <input type="submit" class="button" name="action" value="Sell Smartphone" />
            </form>
        </div>
    </div>
    <div class="controls">  
        <img src="img/arrow.png" id="upBtn" alt="">
        <h3>Features</h3>
        <img src="img/arrow.png" id="downBtn" alt="">
    </div>

</div>

<?php
include('Css/CreateOrInssertMark.php');
include('js/controls-feature.php');
