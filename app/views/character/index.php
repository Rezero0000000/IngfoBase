<?php
    $url = $_GET;
    $url = explode('/', $url['url']);
    if ( isset($url[2])) {
        $url = rtrim($url[2]);
    }
 ?>
<section class="bg-light  border-bottom">
    <div class="row  c-content">
        <!-- sidebar -->
         <div class="col-md-2 sidebar border-end">
                <ul class="list-unstyled text-decoration-none">
                    <p class="text-center fs-4 mt-4 " style="font-weight: 600;"><a href="<?= NEWURL ?>Character" class="text-decoration-none">All Character</a></p>
                    <li class="mt-3">
                        <a class="text-decoration-none fs-5 ms-5 mt-4" href="<?= NEWURL ?>Character/Region/Mondstadt" >Mondstadt</a>
                    </li>
                   <li class="mt-3">
                        <a class="text-decoration-none fs-5 ms-5 mt-4" href="<?= NEWURL ?>Character/Region/Liyue" >Liyue</a>
                    </li>
                   <li class="mt-3">
                        <a class="text-decoration-none fs-5 ms-5 mt-4" href="<?= NEWURL ?>Character/Region/Inazuma" >Inazuma</a>
                    </li>
                </ul>
        </div> 

            <div class=" mt-5 element container">
                    <p class="text-center fs-4 mb-4" style="font-weight: 600;">All Character</a>

                <ul class="">
                    <li>
                        <a class="text-decoration-none fs-5  mt-4  btn btn-outline-dark <?php if ($url == 'Mondstadt') echo'active'?>" href="<?= NEWURL ?>Character/Region/Mondstadt" >Mondstadt</a>

                    </li>
                    <li>
                        <a class="text-decoration-none fs-5  mt-4  btn btn-outline-dark <?php if ($url == 'Liyue') echo'active'?>" href="<?= NEWURL ?>Character/Region/Liyue" >Liyue</a>
                    </li>
                    <li>
                        <a class="text-decoration-none fs-5  mt-4  btn btn-outline-dark <?php if ($url == 'Inazuma') echo'active'?>" href="<?= NEWURL ?>Character/Region/Inazuma" >Inazuma</a>
                    </li>
                </ul>
        </div> 

    <!-- card -->
             <div class="col-md-9  container ">
                <div class="row ms-1 justify-content-center">
                    <?php foreach ($data['character'] as $d ) : ?> 
                                    <div class="col-md-3  mt-5 " onmousedown="return false" oncontextmenu="return false" onselectstart="return false">
                                        <a href="<?= NEWURL ?>Character/detail/<?= $d['id'] ?>">
                                                    <div class="profile-card-6"><img src="<?= BASEURL ?>/img/card/<?= $d['image'] ?>" class="img img-responsive">
                                                        <!-- <div class="profile-name text-dark"><?= $d['name'] ?></div> -->
                                                        <div class="profile-overview">
                                                            <div class="profile-overview">
                                                                <div class="row text-center">
                                                                    <div class="col-xs-4">
                                                                        <h3><?= $d['name'] ?></h3>
                                                                        <p class=""><?= $d['title'] ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                             </a>
                                    </div>
                    <?php endforeach ;  ?>
                 </div>
            </div>    
     </div>
</section>

        <script src="<?= BASEURL ?>/js/scripts.js"></script>
