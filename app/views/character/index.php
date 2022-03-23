<!-- Pricing section-->
        <section class="bg-light py-5 border-bottom">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">All Character</h2>
                </div>
                <div class="row gx-5 justify-content-center">
            <!-- Pricing card free-->
<?php foreach ($data['character'] as $d ) : ?>                   
                            <div class="col-md-5 mt-5">
                                    <div class="profile-card-6"><img src="<?= BASEURL ?>/img/card/<?= $d['image'] ?>" class="img img-responsive">
                                        <div class="profile-name"><?= $d['name'] ?></div>
                                        <div class="profile-position"><?= $d['title'] ?></div>
                                        <div class="profile-overview">
                                            <div class="profile-overview">
                                                <div class="row text-center">
                                                    <div class="col-xs-4">
                                                        <h3><?= $d['rarity'] ?></h3>
                                                        <p>Rarity</p>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <h3>50</h3>
                                                        <p>Matches</p>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <h3>35</h3>
                                                        <p>Goals</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<?php endforeach ;  ?>

    
                </div>
            </div>
        </section>
