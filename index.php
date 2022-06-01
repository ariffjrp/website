<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
       <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
        <header style="background-position: 50% -125px;">
                <nav class="navbar">
                        <div class="navbar-header">
                            <a href="#" class="navbar-brand"><img src="img/logo-web.png" alt=""></a>
                            
                                <ul class="nav">
                                    <li><a href="#Home">Home</a></li>
                                    <li><a href="#About">About</a></li>
                                    <li><a href="#faq">FAQ</a></li> 
                                </ul>
                        </div>
                </nav>
        </header>
        <!--Menu Home-->
        
    <main>
    <article class="home" id="Home">
        <article class="home-text">
            <h1>Hi, I'm <span><?php function greetings($nama){
                echo $nama;
            }
            greetings("Arif Fajar Pangestu"); ?></span>
                <br>A Web Developer</h1>
            <h2> I'm a Web Developer, I love to create beautiful websites.</h2>
            <a href="https://drive.google.com/file/d/1jJyWLRUdgpEPZ1NLxxulqYf4nyGKLDHs/view?usp=sharing" class="btn">Download CV!!</a>
        </article>
    </article>
            <!--Menu About-->
    <article class="about" id="About">
            <aside class="about-text">
                <br>
                <br>
                <br>
                <br>
                <h2>About Me</h2>
            </aside>
            <a class="foto"><img src="img/fotoku.jpeg" alt=""></a>
            <br>
            <article class="pelengkap">
                <aside><p>Saya adalah mahasiswa teknik informatika angkatan 2020 dari Universitas Pembangunan Nasional "Veteran" Jawa Timur. 
                Saya memiliki minat dan kesan di bidang teknologi seperti hal coding dan desain. Saya memiliki sikap untuk bertanggung 
                jawab dan disiplin.</p>
                <h3>Arif Fajar P.</h3></aside>
            </article>
            <br>
            <h4 class="stat-title">My Education</h4>
            <article class="timeline">
                <article class="timeline-item">
                    <p class="tl-duration">2017 - 2020</p>
                    <h5>SMK Senopati</h5>
                    <p>
                        SMK Senopati merupakan sekolah kejurusan swasta favorit yang terletak di daerah sidaorjo yang dapat meningkatkan skill yang diminati
                    </p>
                </article>
                <article class="timeline-item">
                    <p class="tl-duration">2020 - Present</p>
                    <h5>UPN Veteran Jawa Timur</h5>
                    <p>
                        Universitas Pembangunan Nasional "Veteran" Jawa Timur merupakan Universitas yang berorientasi Bela Negara dan berjunjung tinggi bernegaraan
                    </p>
                </article>
            </article>
            <br>
            <div class="about-stats">
                <h4 class="stat-title">My Skills</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">html5</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">css3</p>
                        <div class="progress-con">
                            <p class="prog-text">95%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Adobe photoshop</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="photoshop"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Adobe Ilustrator</p>
                        <div class="progress-con">
                            <p class="prog-text">60%</p>
                            <div class="progress">
                                <span class="Ilustrator"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </article>
    <section class="portofolio" style="background: linear-gradient(#e5ded9,#e5ddd8);">
        <?php 
             $portofolio = array("<b>Chatbot</b>", "<b>Toko Online</b>", "<b>Diary App</b>", "<b>Generator Password</b>");
             $waktu = array("21 Desember 2021", "28 Febuary 2022", "15 April 2022", "14 Febuary 2022");
             $penjelas = array("Chatbot merupakan Artificial Intelligence yang diharapkan dapat membantu masyarakat sekitar dalam memilih makanan", "Diary ini digunakan untuk mencatat hal hal yang penting dimana target pasar mahasiswa", "Generator Password merupakan software dimana memiliki rekomendasi password yang susah di bobol oleh oknum oknum yang tidak bertanggung jawab", "Pada Web E-Commerce ini digunakan dalam penjualan baju, sepatu dan celana yang berorientasi dengan framework laravel");
             sort($portofolio);
             sort($waktu);
             $semua = count($portofolio);
             $semua = count($waktu);
             $semua = count($penjelas);
        ?>
        <table border="0" cellspacing="0" style="margin-left : 35px">
            <h2 style="margin-left: 50px; font-size: 25px; color: rgb(31, 29, 29); text-transform: uppercase; letter-spacing: 6px; margin-bottom: 21px; text-align: center;">Portofolio</h2>
            <?php for($x = 0; $x < $semua; $x++) { ?>
                <tr>
                    <td><?php echo $portofolio[$x] . "<br>" . $waktu[$x] . "<br>" . $penjelas[$x] ."<hr/>" . "<br>"; ?></td>
                </tr>
	        <?php } ?>
        </table>
</section>
</main>

<section id="faq" class="faq">

    <h1 class="heading">FAQ</h1>
    
    <div class="row">
    
            <div class="image">
                <img src="img/gambar 1.png" alt="">
            </div>
    
        <div class="accordion-container">
            
            <div class="accordion">
                <div class="accordion-header">
                <span>+</span>
                <h3>Motivasi anda ?</h3>
                </div>
                <div class="accordion-body">
                <p>Belajar web</p>
                </div>
            </div>

            <div class="accordion">
                <div class="accordion-header">
                <span>+</span>
                <h3>Usia anda</h3>
                </div>
                <div class="accordion-body">
                <p>20 tahun</p>
                </div>
            </div>

            <div class="accordion">
                <div class="accordion-header">
                <span>+</span>
                <h3>tujuan hidup</h3>
                </div>
                <div class="accordion-body">
                <p>membangun perusahaan</p>
                </div>
            </div>

            <div class="accordion">
                <div class="accordion-header">
                <span>+</span>
                <h3>hobi</h3>
                </div>
                <div class="accordion-body">
                <p>jogging</p>
                </div>
            </div>
    
        </div>
    
    </div>
    
    </section>

 <footer class="footer">
     
           <div class="share">
              <a href="#" class="fab fa-facebook-f"></a>
              <a href="#" class="fab fa-twitter"></a>
              <a href="#" class="fab fa-linkedin"></a>
              <a href="#" class="fab fa-instagram"></a>
              <a href="#" class="fab fa-youtube"></a>
           </div>
     
           <h2 class="credit">&copy; copyright @ <?php echo date("Y");?> by <span>Arif Fajar Pangestu</span> | all rights reserved!</h2>

     
     </footer>
     <!-- jquery file link  -->
     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="js/script.js"></script>
</body>
</html>