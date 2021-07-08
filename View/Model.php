<?php
include_once('Model/Sell.php');
include_once('Css/Model.php');
?>

<div class="container-model">
    <div class="content">
        <form class="btn-back" action="" method="GET">
            <img src="img/back.svg" alt="">
            <input class="back" type="submit" name="action" value="Sell Smartphone">
        </form>
        <div class="line"></div>
        <div class="container-step-progress">
            <ul class="progressbar">
                <li data-step="1">Choose my Mark</li>
                <li data-step="2" class="active">Choose my Model</li>
                <li data-step="3">Phone information</li>
            </ul>
        </div>
        <h3>Choose my model</h3>
        <div class="choose-model">
            <form method="GET" action="index.php">
                <label for="select">Model</label>
                <select id="select" name="Model" required>
                    <option value="">Choose a option</option>
                    <?php
                        $Configuration = searchConfiguration($_GET['Mark']);
                        foreach ($Configuration as $model) {
                            echo '<option value=' . $model['IDMODEL'] . '>' . $model['NAME'] . '</option>';
                        }
                    ?>
                </select><br>
                <input class="button" type="submit" name="action" value="Next"/>
            </form>
        </div>
    </div>
    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#161520" fill-opacity="1" d="M0,160L48,138.7C96,117,192,75,288,69.3C384,64,480,96,576,128C672,160,768,192,864,197.3C960,203,1056,181,1152,144C1248,107,1344,53,1392,26.7L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</div>