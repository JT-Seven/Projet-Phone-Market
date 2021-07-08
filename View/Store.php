

<h2 class="title-all-smartphones">All Smartphones</h2>

<section class="page-smartphone">
	<section class="zone-filtre">
		<div class="container-filter">
			<div class="contents">
				<form action="" class="filter" method="GET">
					<div class="elements select">
						<select name="order-by" id="order-by">
							<option value="mark" selected disabled>Sort by</option>
							<option value="mark">Mark</option>
							<option value="color">Color</option>
							<option value="capacity">Capacity</option>
							<option value="increasing">Increasing price</option>
							<option value="decreasing">Decreasing price</option>
						</select>
					</div>
					<div class="elements product-found">
						<span><?php if(isset($stock) && !empty($stock)) { echo sizeof($stock); } else { echo "0"; } ?></span><p>product-found</p>
					</div>
					<div class="elements mark">
						<h3>Mark</h3>
						<div class="zone">
							<label for="apple">
								<input id="apple" name="apple" type="checkbox">
								Apple
							</label>
						</div>
						<div class="zone">
							<label for="samsung">
								<input id="samsung" name="samsung" type="checkbox">
								Samsung
							</label>
						</div><div class="zone">
							<label for="google">
								<input id="google" name="google" type="checkbox">
								Google
							</label>
						</div>
						<div class="zone">
							<label for="sony">
								<input id="sony" name="sony" type="checkbox">
								Sony
							</label>
						</div>
						<div class="zone">
							<label for="huawei">
								<input id="huawei" name="huawei" type="checkbox">
								Huawei
							</label>
						</div>
						<div class="zone">
							<label for="xiaomi">
								<input id="xiaomi" name="xiaomi" type="checkbox">
								Xiaomi
							</label>
						</div>
						
					</div>
					<div class="elements color">
						<h3>Colors</h3>
						<div class="zone">
							<label for="black">
								<input id="black" name="black" type="checkbox">
								Black
							</label>
						</div>
						<div class="zone">
							<label for="grey">
								<input id="grey" name="grey" type="checkbox">
								Grey
							</label>
						</div>
						<div class="zone">
							<label for="red">
								<input id="red" name="red" type="checkbox">
								Red
							</label>
						</div>
						<div class="zone">
							<label for="blue">
								<input id="blue" name="blue" type="checkbox">
								Blue
							</label>
						</div>
						<div class="zone">
							<label for="white">
								<input id="white" name="white" type="checkbox">
								White
							</label>
						</div>
						<div class="zone">
							<label for="green">
								<input id="green" name="green" type="checkbox">
								Green
							</label>
						</div>
						<div class="zone">
							<label for="purple">
								<input id="purple" name="purple" type="checkbox">
								Purple
							</label>
						</div>
						<div class="zone">
							<label for="gold">
								<input id="gold" name="gold" type="checkbox">
								Gold
							</label>
						</div>
					</div>
					<div class="elements capacity">
						<h3>Capacity</h3>
						<div class="zone">
							<label for="8go">
								<input id="8go" name="8go" type="checkbox">
								8GO
							</label>
						</div>
						<div class="zone">
							<label for="16go">
								<input id="16go" name="16go" type="checkbox">
								16GO
							</label>
						</div>
						<div class="zone">
							<label for="32go">
								<input id="32go" name="32go" type="checkbox">
								32GO
							</label>
						</div>
						<div class="zone">
							<label for="64go">
								<input id="64go" name="64go" type="checkbox">
								64GO
							</label>
						</div>
						<div class="zone">
							<label for="128go">
								<input id="128go" name="128go" type="checkbox">
								128GO
							</label>
						</div>
						<div class="zone">
							<label for="256go">
								<input id="256go" name="256go" type="checkbox">
								256GO
							</label>
						</div>
						<div class="zone">
							<label for="512go">
								<input id="512go" name="512go" type="checkbox">
								512GO
							</label>
						</div>
					</div>
					<div class="elements price">
						<h3>Price</h3>
						<div class="zone">
								<div class="values">
									<span id="range1">
										0
									</span>
									<span> &dash; </span>
									<span id="range2">
										100
									</span>
								</div>
								<div class="container">
									<div class="slider-track"></div>
									<input type="range" min="0" name="price" max="2000" value="0" id="slider-1" oninput="slideOne()">
									<input type="range" min="0" name="price2" max="2000" value="2000" id="slider-2" oninput="slideTwo()">
								</div>
						</div>
					</div>
                    <div class="elements submit">
                        <input type="submit" name="action" value="Filter"/>
                    </div>
				</form>
			</div>
			
		</div>
	</section>


	<section class="zone-search">
		<div class="container-cards">
			<div class="cards">
				<?php if($stock != false) { ?>
					<?php foreach($stock as $products) { ?>
						<div class="show-card">
							<?php echo '<img class="view-img" src="data:'.$products['TYPE'].';base64,'.base64_encode($products['IMAGE']).'" />';?>
							<div class="card card1">
								<div class="details">
									<h3><?php echo $products['NAME']; ?></h3>
									<div class="color">
										<h4>Color :</h4><p class="text-color"><?php echo $products['COLOR']; ?></p>
									</div>
									<div class="capacity">
										<h4>Capacity :</h4>
										<span><?php echo $products['CAPACITY']; ?></span>
									</div>
									<div class="price">
										<span>$</span>
										<span><?php echo $products['PRICE']; ?></span>
									</div>
                                    <?php
                                    if (isset($_SESSION['User']) && $products['USERS_IDUSERS'] != $_SESSION['User'] || !isset($_SESSION['User'])) { ?>
									<div class="container-btn">
										<button class="btn-card"><a href="index.php?action=ShowProduct&id=<?php echo $products['IDSMARTPHONES']; ?>&Mark=<?php echo $products['IDMARK']; ?>"><span>Show Now</span></a></button>
									</div>
                                        <?php  } ?>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php } else { ?>
					<div class="error-message">
						<h2>No result :(</h2>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
</section>

<?php 
require_once("Css/Store.php");
include_once('js/range.php'); 
?>
