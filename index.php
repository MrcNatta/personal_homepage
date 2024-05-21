<?php include 'config.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>homepage_nathanaelmiracle</title>

</head>

<body>
    <div class="wrapper">
        <div class="kotak">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>


        <header>

            <div class="header">
                <a href="#default" class="logo">Natta</a>

                <div class="header-kanan">
                    <ul class="navbar-list">
                        <a href="#home">About</a>
                        <a href="#gallery">Gallery</a>
                        <a href="#blog">Blog</a>
                        <a href="#contact">Contact</a>
                    </ul>
                </div>
            </div>


    </div>


    <section id="home">
        <div class="home-content">
            <h2>Hi.</h2>
            <h1>I'm <span class="first-text">Nathan<br>
                </span>a

                <span class="second-text">3D Designer
            </h1></span>

            <p>I'm an aspiring 3D artist, eager to explore digital creativity. Join me as I grow and evolve in
                the
                world of 3D artistry.
            </p>
        </div>

        <script src="script.js"></script>

        <div class="img-box">
            <img src="pict/nataganteng.jpg">
        </div>

    </section>

    </header>

    <main>
        <section id="gallery">
            <div class="heading">
                <h3>Gallery</h3>
            </div>
            <div class="box">
                <div class="kolom">
                    <img src="pict\img1.jpg">
                    <img src="pict\img2.png">
                    <img src="pict\img3.jpg">
                    <img src="pict\img4.jpg">
                </div>

                <div class="kolom">
                    <img src="pict\img5.jpg">
                    <img src="pict\img6.jpg">
                    <img src="pict\img7.jpg">
                    <img src="pict\img8.jpg">
                </div>

                <div class="kolom">
                    <img src="pict\img9.jpg">
                    <img src="pict\img10.jpg">
                    <img src="pict\img11.jpg">
                    <img src="pict\img12.jpg">
                </div>

            </div>

            </div>
            <!-- Isi kumpulan foto-foto disini -->
        </section>

        <section id="blog">
            <div class="heading">
                <h1>Blog</h1>
            </div>
            <div class="article-container">
                <article class="article-child">
                    <h2><?php echo $title1 ?></h2>
                    <p><?php echo $desc1 ?>
                    </p>


                    <br>selengkapnya bisa dilihat di sini <a
                        href="<?php echo $url1 ?>"
                        target="_blank">3 Fakta Adobe Generative Fill </a>
                </article>


                <article class="article-child">
                    <h2><?php echo $title2 ?></h2>
                    <p><?php echo $desc2 ?>
                        <br>
                        <br>selengkapnya bisa dilihat di sini <a
                            href="<?php echo $url2 ?>"
                            target="_blank">Mengenal game Valorant </a>
                    </p>
                </article>

                <article class="article-child">
                    <h2><?php echo $title3 ?></h2>
                    <p><?php echo $desc2 ?>
                        <br>
                        <br>selengkapnya bisa dilihat di sini <a
                            href="<?php echo $url2 ?>"
                            target="_blank">Dampak AI dalam Pekerjaan seni di Indonesia </a>
                    </p>
                </article>
        </section>


        <section id="contact">
            <div class="heading">
                <h1>Contact</h1>
            </div>
            <div class="kontak">
                <a href="https://wa.me/6289529674019" class="fa fa-whatsapp"></a>
                <a href="https://www.instagram.com/natthnishere_/" class="fa fa-instagram"></a>
                <a href="https://www.linkedin.com/in/nathanael-miracle-14299a272/" class="fa fa-linkedin"></a>
            </div>
        </section>


    </main>

    <footer>
        <!-- Footer -->
    </footer>
</body>

</html>
