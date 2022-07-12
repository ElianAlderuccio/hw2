<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Profilo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/logo.png" sizes="50x50"/>
        <link rel="stylesheet" href="<?php echo e(url('css/profilo.css')); ?>">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
        <script src="<?php echo e(url('script/profilo.js')); ?>" defer></script>
        <script>const BASE_URL = "<?php echo e(url('/')); ?>/";</script>
    </head>

    <body>
        <nav class="navbar">
            <div class="nav-logo">
                <img src="images/logo.png">
                Alicya Alderuccio
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="<?php echo e(url('home')); ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('login')); ?>" class="nav-link">Accedi</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('logout')); ?>" class="nav-link">
                        <?php echo e(Session::get('user_username')); ?> 
                        Esci
                    </a>
                </li>
            </ul>
            <div id="menuMOBILE">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
        </nav>

        <div id="cont" class="hidden">
            <div id="menuMobView">
                <ul id="nav-menu-mob">
                    <li>
                        <a href="<?php echo e(url('home')); ?>" class="nav-link">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('login')); ?>" class="nav-link">Accedi</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('logout')); ?>" class="nav-link"> 
                            <?php echo e(Session::get('user_username')); ?> 
                            Esci
                        </a>
                    </li>
                </ul>
                <span id="close">Chiudi</span>
            </div>
        </div>

        <div id="container">
            <div class="banner">
                <img src="images/imggenerica.jpg">
                <br>
                <?php echo e(Session::get('user_username')); ?>

            </div>
    
            <div class="bannerphoto">
                <img class="logo" src="images/stella.png">
                
                <div id="albumdatabase">
                    <?php for($i=0; $i < count($array); $i++): ?>
                        <img class = "photoprofilo" src="<?php echo e(print_r(((array)$array[$i])['photosrc'], true)); ?>" name="<?php echo e(print_r(((array)$array[$i])['name'], true)); ?>"/>
                    <?php endfor; ?>
                </div>
                <p>Clicca le foto per eliminarle dai preferiti</p>
            </div>
        </div>
    </body>
</html><?php /**PATH C:\Users\elian\Desktop\hw2\resources\views/profile.blade.php ENDPATH**/ ?>