<!-- Header-->
        <header>
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center py-5 mt-6">
                            <p class="display-5 fw-bolder text-white ia mb-1">INGFOBASE</p>
                            <p class="lead mb-5 genshin ">Simple mvc website about Genshin Impact database</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-dark btn-lg px-4 me-sm-3" target="blank" href="https://github.com/Kazut00/IngfoBase">Github</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="<?= NEWURL ?>about">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

<!-- welcome -->
        <section class="welcome">
                <div class="container  "> 
                        <div class="text-center row"> 
                        <div class="col-md-2"></div>

                            <div class="col-md-8 mb-5 mb-lg-0">
                            <h2 class=" fw-bolder fs-1  ">Welcome</h2>
                            <p class="mt-3 genshin ">Halo bang welcome di website watashi, btw tau g bang waifu watashi itu rem  wangy banget gile :v</p>
                        </div>
                          <div class="col-md-2"></div>
                        </div>
                </div>
         </section>
<!-- welcome -->

<!-- Features section-->
        <section class="py-5 border-bottom border-top" id="features">
            <div class="container px-4 py-1 ">

                <h2 class="text-center fw-bolder mb-5 fs-1 ">Features</h2>
            
                <div class="row gx-5 mt-6">        
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="d-grid gap-3 d-flex justify-content-center">
                            <div class="feature bg-dark text-white rounded-3 mb-3 px-4">
                                <i class="bi bi-collection"></i>
                            </div>
                        </div>
                            <h2 class="h4 fw-bolder text-center mb-4">Character List</h2>
                            <p class="text-center genshin">Memiliki daftar karakter dan informasi yang mendetail dari setiap karakter.
                                <br><strong>
                                <a class="text-decoration-none text-center" href="<?= NEWURL ?>Character">
                                    Liat Daftar Character
                                <i class="bi bi-arrow-right"></i>
                            </a></strong>
                            </p>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="d-grid gap-3 d-flex justify-content-center">
                            <div class="feature bg-dark  text-white rounded-3 mb-3 px-4">
                                <i class="bi bi-collection"></i>
                            </div>
                        </div>
                            <h2 class="h4 fw-bolder text-center mb-4">Coming Soon</h2>
                            <p class="text-center genshin">Ini cuman text random jangan di baca bang :v njir dah dibilangin malah dibaca.
                            <br><strong>
                                <a class="text-decoration-none text-center" href="#!">
                                    Call to action
                                <i class="bi bi-arrow-right"></i>
                            </a></strong>
                            </p>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="d-grid gap-3 d-flex justify-content-center">
                            <div class="feature bg-dark  text-white rounded-3 mb-3 px-4">
                                <i class="bi bi-collection"></i>
                            </div>
                        </div>
                                <h2 class="h4 fw-bolder text-center mb-4">Coming Soon</h2>
                            <p class="text-center genshin">Ini cuman text random jangan di baca bang :v njir dah dibilangin malah dibaca.
                            <br><strong>
                                <a class="text-decoration-none text-center" href="#!">
                                    Call to action
                                <i class="bi bi-arrow-right"></i>
                            </a></strong>
                            </p>
                    </div>
                </div>
            </div>
        </section>

<!-- Pricing section-->
        <section class="bg-light py-5 border-bottom">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">My Favorite Characters</h2>
                    <a href="<?= NEWURL ?>Character"class="lead mb-0 text-decoration-none genshin">More Character </a>
                </div>
                <div class="row gx-5 justify-content-center">
                  
 <!-- Pricing card free-->                      

                    <div class="col-md-5" onmousedown="return false" oncontextmenu="return false" onselectstart="return false">
                        <a href="<?= NEWURL ?>Character/detail/eula">
                        <div class="profile-card-6"><img src="<?= BASEURL ?>/img/card/Character_Eula_Card.png" class="img img-responsive">
                              <div class="profile-position">Lorem Ipsum Donor</div>
                                 <div class="profile-overview">
                                         <div class="row text-center">
                                         <div class="col-xs-4">
                                             <h3>Eula</h3>
                                             <p>Dance of the Shimmering Wave</p>
                                     </div>
                                 </div>
                                </div>
                                    
                            </div>
                        </a>
                        </div>
                    
                    <div class="col-md-5"onmousedown="return false" oncontextmenu="return false" onselectstart="return false">
                    <a href="<?= NEWURL ?>Character/detail/yae_miko">
                        <div class="profile-card-6"><img src="<?= BASEURL ?>/img/card/Character_Yae_Miko_Card.png" class="img img-responsive">
                                  <div class="profile-overview">
                                         <div class="row text-center">
                                         <div class="col-xs-4">
                                             <h3>Yae Miko</h3>
                                             <p>Astute Amusement</p>
                                     </div>
                                  </div>
                                </div>
                            </div>
                           </a>
                        </div>

                </div>
            </div>
        </section>
      