<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Creative - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style type="text/css">
            section.produk{
                background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url("assets/img/bg-masthead-2.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-size: cover;
            }
            div.produk{
                background-image: url("img/produk.jpg");
                background-color: #cccccc;
            }
        </style>>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Glowing Art</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Glowing Art Decoration</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Hanya di Glowing Art Decoration, anda bisa menemukan Event Organizer yang ramah, murah, dan berkualitas</p>
                        <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Moto dari Usaha Kami</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Desain yang mewah</h3>
                            <p class="text-muted mb-0">EO kami memakai dekorasi yang eksklusif sehingga anda tidak akan kecewa!!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Selalu tepat waktu</h3>
                            <p class="text-muted mb-0">Tim kami akan selalu bisa mengelola acara dengan tepat waktu dan profesional!!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Ready to Publish</h3>
                            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Dokumentasi Eksklusif</h3>
                            <p class="text-muted mb-0">Ingin mendokumentasikan saat penting dalam hidup anda?? kami siap mengabadikan momen tersebut!!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section produk" id="produk">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col text-center">
                        <h2 class="text-light mt-0">Produk kami</h2>
                        <hr class="divider divider-light" />
                            <div class="row justify-content-around">
                                <div class="col-sm-3">
                                    <h5><b style="color: white;"><?= $produk[0]['nama']?></b></h5>
                                    <br>

                                    <?php
                                    $nama1 = $produk[0]['id'];
                                    $sql2 = "SELECT * FROM produk WHERE id_kategori = $nama1";
                                    $row = $db->prepare($sql2);
                                    $row->execute();
                                    $detail_1 = $row->fetchAll();
                                    $i=0;
                                    foreach ($detail_1 as $a) {
                                    ?>
                                    <p><?php echo '<b style="color: white;">'.$a['nama'].'</b>';
                                    $i++;
                                    if($i>3){
                                        break;
                                    }
                                    }?></p>
                                    <a href="#" style="color: black; background-color: lightgrey;"><u>Selengkapnya!!</u></a>
                                </div>
                                <div class="col-sm-3">
                                    <h5><b style="color: white;"><?= $produk[1]['nama']?></b></h5>
                                    <br>

                                    <?php
                                    $nama1 = $produk[0]['id'];
                                    $sql2 = "SELECT * FROM produk WHERE id_kategori = $nama1";
                                    $row = $db->prepare($sql2);
                                    $row->execute();
                                    $detail_1 = $row->fetchAll();
                                    $i=0;
                                    foreach ($detail_1 as $a) {
                                    ?>
                                    <p><?php echo '<b style="color: white;">'.$a['nama'].'</b>';
                                    $i++;
                                    if($i>3){
                                        break;
                                    }
                                    }?></p>
                                    <a href="#" style="color: black; background-color: lightgrey;"><u>Selengkapnya!!</u></a>
                                </div>
                                <div class="col-sm-3">
                                    <h5><b style="color: white;"><?= $produk[2]['nama']?></b></h5>
                                    <br>

                                    <?php
                                    $nama1 = $produk[0]['id'];
                                    $sql2 = "SELECT * FROM produk WHERE id_kategori = $nama1";
                                    $row = $db->prepare($sql2);
                                    $row->execute();
                                    $detail_1 = $row->fetchAll();
                                    $i=0;
                                    foreach ($detail_1 as $a) {
                                    ?>
                                    <p><?php echo '<b style="color: white;">'.$a['nama'].'</b>';
                                    $i++;
                                    if($i>3){
                                        break;
                                    }
                                    }?></p>
                                    <a href="#" style="color: black; background-color: lightgrey;"><u>Selengkapnya!!</u></a>
                                </div>
                            </div>
                            <br>
                        <a class="btn btn-light btn-xl" href="tampilan_produk.php">Get More Our Product!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0 text-center">
                <br>
                <h2 class="text-dark mt-0">Testimoni dari beberapa pelanggan kami</h2>
                <div class="row g-0">
                    <?php
                    $sql1 = "SELECT * FROM testimoni WHERE id_ket = 0";
                    $row = $db->prepare($sql1);
                    $row->execute();
                    $testimoni = $row->fetchAll();
                    $a=1;
                    foreach ($testimoni as $b) {
                    ?>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="#" title="Project Name">
                            <img class="img-fluid" src="img/<?= $b['gambar']?>" alt="..." style="width: 400px; height: 250px"/>
                            <div class="portfolio-box-caption">
                                <div class="project-name"><?= $b['nama']?></div>
                            </div>
                        </a>
                    </div>
                    <?php
                    if($a==6){
                        break;
                    }
                    $a++;
                    }
                    ?>
                    
                <center><br><a class="btn btn-primary btn-xl" href="#services" style="width: 17%">Lihat lebih banyak!</a></center>
                </div>
            </div>
        </div>
        <br>
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Tentang kami</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Danastri Decoration merupakan bisnis perseorangan yang bergerak dalam bidang penyediaan jasa persewaan dekorasi. Danastri Decoration sendiri didirikan di Tuban pada 31 Desember 2020. Danastri hadir untuk mewujudkan mimpi para konsumen yang tidak ditemukan di persewaan lainnya. Danastri sendiri memiliki arti yaitu anak yang cantik, dimana arti tersebut bermakna bahwa Danastri Decoration akan mempercantik momen penting dan bahagia para konsumen. Danastri akan mewujudkan seluruh keinginan konsumen sebaik mungkin dan menjadi kenangan yang tidak akan terlupakan.</p>
                        <a class="btn btn-light btn-xl" href="rating.php">Berikan ulasan!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-017Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Berminat? silahkan isi form dibawah agar pesanan anda dapat kami layani</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form class="user" action="" method="POST">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nama" name="nama" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="alamat" name="alamat" type="text" placeholder="Paket yang dipilih..."/>
                                <label for="email">Alamat</label>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="jenis_paket" name="jenis_paket" type="text" placeholder="Paket yang dipilih..."/>
                                <label for="email">Paket</label>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="no_wa" name="no_wa" type="text" placeholder="083183828491" data-sb-validations="required" />
                                <label for="phone">No Whatsapp</label>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="deskripsi" name="deskripsi" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Pesan</label>
                            </div>
                            
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><input type="submit" name="register" class="btn btn-primary btn-xl" value="Kirim!!"></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+62 882 1707 1996</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
        </footer>
        <!-- Bootstrap core JS-->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        
    </body>
</html>
