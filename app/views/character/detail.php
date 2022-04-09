<?php $data = $data['character'] 


?>


<section>
	<div class="row py-sm-5 mt-5 mb-sm-5 character-detail ">
		<div class="col-sm-1"></div>
		<div class="col-sm-4  align-items-center visual-container"  onmousedown="return false" oncontextmenu="return false" onselectstart="return false" >
			<img class="img-fluid img-detail" src="<?= BASEURL ?>img/potrait/<?= $data['portrait'] ?>" >
			<div class="detail-container">
				<h1 class=" detail-name ms-5 bg-rpimary d-sm-none"><?= $data['name'] ?></h1>
				<p class="detail-title d-sm-none"><?= $data['title'] ?></p>
			</div>

		</div>

		<div class="col-sm-7   character-desc  px-5">
					<h1 class=" detail-name-2  "><?= $data['name'] ?></h1>
					<p class="  detail-title2 genshin"><?= $data['title'] ?></p>
					<h3 class="mt-5">INGFO</h3>
					<div class="detail-icon mt-3">
 							<div class="feature btn btn-outline-dark text-white rounded-3 element-icon">
 								<img class="img-fluid element-dark" alt="<?= $data['element'] ?>"  src="<?= BASEURL ?>/img/icon/elements/<?= $data['element'] ?>.png">
 								<img class="img-fluid element-light d-none" src="<?= BASEURL ?>/img/icon/elements/<?= $data['element'] ?>_light.png">
                            </div>		
    
 							<div class="feature btn btn-outline-dark text-white rounded-3 weapon-icon">
 								<img class="img-fluid weapon-dark " src="<?= BASEURL ?>/img/icon/weapons/icon_<?= $data['weapon_type'] ?>.png">
 								<img class="img-fluid weapon-light d-none" src="<?= BASEURL ?>/img/icon/weapons/<?= $data['weapon_type'] ?>.png">
                            </div>		
    
 							<div class="feature btn btn-outline-dark text-white rounded-3 region-icon">
 								<img class="img-fluid region-dark" src="<?= BASEURL ?>/img/icon/regions/<?= $data['region'] ?>.png">
 								<img class="img-fluid d-none region-light" src="<?= BASEURL ?>/img/icon/regions/<?= $data['region'] ?>_light.png">
                            </div>		
    						
 								<h1 class="feature btn btn-outline-dark  rounded-3 rarity"><?= $data['rarity'] ?></h1>
    			</div>
				<div class="mt-5">
					<h4>DESCRIPTION</h4>
					<p class="mt-2 genshin"><?= $data['description'] ?></p>
				</div>
			<a class="btn btn-sm btn-outline-dark btn-sm px-4 me-sm-3 mt-3"  href="<?= NEWURL ?>Character">Back</a>

		</div>
	</div>
</section>
