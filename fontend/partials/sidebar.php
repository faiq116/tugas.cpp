 <?php
    // require_once('../../config/connection.php');
    require_once(__DIR__ . '/../../config/connection.php');

    $qAbout = "SELECT * FROM abouts";
    $about = mysqli_query($connect, $qAbout) or die(mysqli_error($connect));
    $dataAbout = mysqli_fetch_assoc($about);
    ?>

 <body class="index-page">

     <header id="header" class="header dark-background d-flex flex-column">
         <i class="header-toggle d-xl-none bi bi-list"></i>

         <div class="profile-img">
             <img src="../storages/about/<?= $dataAbout['image'] ?>" alt="" class="img-fluid rounded-circle">
         </div>

         <a href="index.html" class="logo d-flex align-items-center justify-content-center">
             <!-- Uncomment the line below if you also wish to use an image logo -->
             <!-- <img src="../fontend/templates_user/assets/img/logo.png" alt=""> -->
             <h1 class="sitename"><?= $dataAbout['name'] ?></h1>
         </a>

         <?php
            include(__DIR__ . '/../pages/socmeds.php');
            ?>

         <nav id="navmenu" class="navmenu" style="overflow-y: hidden; padding: 0; margin: 0;">
             <ul>
                 <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
                 <li><a href="#about"><i class="bi bi-person navicon"></i> Tentang Saya</a></li>
                 <li><a href="#blog"><i class="bi bi-newspaper navicon"></i> Blog Saya</a></li>
                 <li><a href="#skills"><i class="bi bi-wrench navicon"></i> Skil</a></li>
                 <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
                 <li><a href="#portfolio"><i class="bi bi-images navicon"></i>Projek</a></li>
                 <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Servis</a></li>
                 <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Kontak</a></li>
             </ul>
         </nav>

     </header>

     <main class="main">