<?php
include_once('Model/Sell.php');
?>

<div class="container-information">
    <div class="content">
        <div class="btn-back">
            <a href="javascript:history.go(-1)"><img src="img/back.svg" alt=""></a>
        </div>
        <div class="line"></div>
        <div class="container-step-progress">
            <ul class="progressbar">
                <li data-step="1">Choose my Mark</li>
                <li data-step="2">Choose my Model</li>
                <li data-step="3" class="active">Phone information</li>
            </ul>
        </div>
        <h3>Phone information</h3>
        <div class="phone-information">
            <form method="POST" enctype="multipart/form-data" action="index.php?action=SELL">            
                <label for="select">Capacity</label>
                <select id="select" name="Capacity" required>
                    <option value=""> Choose a option</option>
                    <?php
                        $Configuration = searchConfiguration2($_GET['Model']);
                        $Capacities = explode(',',$Configuration[0]['CAPACITY']);
                        foreach($Capacities as $capacity){
                            echo '<option value=' . $capacity . '>' . $capacity . '</option>';
                        }
                    ?>
                </select>

                <label>State</label>
                <select id="select" name="State" required>
                    <option value=""> Choose a option</option>
                    <?php
                        $Configuration = state();
                        foreach ($Configuration['STATE'] as $model => $value) {
                            echo '<option value=' . $value . '>' . $value . '</option>';
                        }
                    ?>
                </select>

                <label>Color</label>
                <select id="select" name="Color" required>
                    <option value=""> Choose a option</option>
                    <?php
                        $Configuration = state();
                        foreach ($Configuration['COLOR'] as $model => $value) {
                            echo '<option value=' . $value . '>' . $value . '</option>';
                        }
                    ?>
                </select>

                <label>Description</label>
                <textarea name="Description" required placeholder="Enter the name model..." maxlength="500"></textarea>
                <p>The description must contain less than 500 characters.</p>

                <label>Price</label>
                <input type="number" name="Price" required placeholder="Enter the price" min="5" max="2000" />
                <p>Min= 5  Max= 2000</p>

                <input type="file" class="upload-box" name="image"/>

                <input class="button" type="submit" value="to put up for sale"/>
            </form>
        </div>
    </div>
    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#161520" fill-opacity="1" d="M0,160L48,138.7C96,117,192,75,288,69.3C384,64,480,96,576,128C672,160,768,192,864,197.3C960,203,1056,181,1152,144C1248,107,1344,53,1392,26.7L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</div>

<?php
include('Css/Sell.php');

