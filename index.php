<?php
require 'connect.php';

if( isset($_POST["tambah"]) ) {
	if( message($_POST) > 0 ) {
		echo "<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			  </script>";
	} else {
		echo "<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			  </script>";
	}
}
  $photos = query("SELECT * FROM tb_admingallery");
  $videos = query("SELECT * FROM tb_adminvideo");
  $portofolio = query("SELECT * FROM tb_adminportofolio");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="skinswitcher.css">
  <link rel="stylesheet" href="colors.css">
  <title>Document</title>
</head>
<body>
  <!-- preloader -->
  <div class="preloader">
    <div class="loader"></div>
  </div>
  <!-- Mian container -->
  <div class="main-container">
    <!-- aside -->
    <div class="aside">
      <!-- nav toggler btn -->
      <div class="nav-toggler">
        <span></span>
      </div>
      <div class="aside-inner">
      <!-- logo -->
      <div class="logo">
        <a href="#">Rizaldifa</a>
      </div>
      <!-- end logo -->
      <!-- nav -->
      <ul class="nav">
        <li><a href="#home" class="active"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="#about"><i class="fa fa-user"></i>About me</a></li>
        <li><a href="#portofolio"><i class="fa fa-briefcase"></i>Portfolio</a></li>
        <li><a href="#contact"><i class="fa fa-comments"></i>Contact</a></li>
      </ul>
      <!-- end nav -->
      <div class="date">
        <h4>
          <?= date('l,');?>
        </h4>
        <h1>
          <?= date('jS');?>
        </h1>
        <h4>
          <?= date('F Y');?>
        </h4>
      </div>
      <!-- copyright -->
      <div class="copyright-text">&copy; 2020 All rights reserved.</div>
    </div>
    </div>
    <!-- end aside -->
    <!-- main content -->
    <div class="main-content">
      <!-- home section -->
      <section class="home bg section active" id="home">
        <div class="container">
          <div class="intro">
            <img src="profile1.png" height="160px" alt="profile">
            <h1>Rizaldi Fathan Qorib</h1>
            <p>I'm a Web Developer</p>
            <div class="social-link">
              <a href="https://free.facebook.com/rizaldi.fathan/"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/rizaldifaa/"><i class="fa fa-instagram"></i></a>
              <a href="https://wa.me/qr/XIN5OPOPFFK2P1"><i class="fa fa-whatsapp"></i></a>
              <a href="https://telegram.org/dl"><i class="fa fa-telegram"></i></a>
            </div>
          </div>
        </div>
      </section>
      <!-- end home section -->
      <!-- about section -->
      <section class="about section" id="about">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>About Me</h2>
            </div>
          </div>
          <div class="row">
            <div class="about-content padd-15">
              <div class="row">
                <div class="about-text padd-15">
                  <h3>I'm Rizaldi Fathan Qorib and <span>Web Developer</span></h3>
                  <p>Work hard and do better than ever, that's the sentence I've always instilled in my life. I am the first of four children who are currently studying at one of the universities in Yogyakarta, now I am in the 3rd semester with a GPA while 3.7 I majored in informatics and ambitious to be able to create a startup in the future to open jobs in my birthplace especially. I also enjoy organizing and participating in competitions to fill my free time.</p>
                </div>
              </div>
              <div class="row">
                <div class="personal-info padd-15">
                  <div class="row">
                    <div class="info-item padd-15">
                      <p>Birthplace : <span>Indramayu, Indonesia</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Age : <span>19</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Birthday : <span>25 September 2001</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Website : <span>www.tagarjogja.com</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Blog : <span class="long">brandallokaexperience.blogspot.com</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Email : <span class="long">rizaldy.fathan.rfa@gmail.com</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Phone : <span>+62 813 2440 2653</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Hoby : <span>Hiking</span></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="button padd-15">
                      <a href="#" class="btn">Download CV</a>
                    </div>
                  </div>
                </div>
                <div class="skills padd-15">
                  <div class="row">
                    <div class="skill-item padd-15">
                      <h5>Javascript</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 50%"></div>
                        <div class="skill-percent">50%</div>
                      </div>
                    </div>
                    <div class="skill-item padd-15">
                      <h5>HTML</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 80%"></div>
                        <div class="skill-percent">80%</div>
                      </div>
                    </div>
                    <div class="skill-item padd-15">
                      <h5>CSS</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 80%"></div>
                        <div class="skill-percent">80%</div>
                      </div>
                    </div>
                    <div class="skill-item padd-15">
                      <h5>PHP</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 60%"></div>
                        <div class="skill-percent">60%</div>
                      </div>
                    </div>
                    <div class="skill-item padd-15">
                      <h5>JAVA</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 50%"></div>
                        <div class="skill-percent">50%</div>
                      </div>
                    </div>
                    <div class="skill-item padd-15">
                      <h5>C++</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 60%"></div>
                        <div class="skill-percent">60%</div>
                      </div>
                    </div>
                    <div class="skill-item padd-15">
                      <h5>Bootstrap</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 40%"></div>
                        <div class="skill-percent">40%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="educations padd-15">
                  <h3 class="title">Education</h3>
                  <div class="row">
                    <div class="timeline-box padd-15">
                      <div class="timeline shadow-dark">
                        <div class="timeline-item">
                        <div class="circle-dot"></div>
                        <h6 class="timeline-date">
                          <i class="fa fa-calendar"></i> 2019 - now
                        </h6>
                        <h4 class="timeline-title">Study At University of Technology Yogyakarta</h4>
                        <p class="timeline-text">Majoring in informatics program S1, third semester with temporary GPA 3.7
                        </p>
                        </div>
                        <div class="timeline-item">
                        <div class="circle-dot"></div>
                        <h6 class="timeline-date">
                          <i class="fa fa-calendar"></i> 2016 - 2019
                        </h6>
                        <h4 class="timeline-title">Studied At Anjatan 1 Public Senior High School</h4>
                        <p class="timeline-text">Have many academic and non-academic achievements, ranging from district to national level
                        </p>
                        </div>
                        <div class="timeline-item">
                        <div class="circle-dot"></div>
                        <h6 class="timeline-date">
                          <i class="fa fa-calendar"></i> 2013 - 2016
                        </h6>
                        <h4 class="timeline-title">Studied At Haurgeulis 1 Public Junior High School</h4>
                        <p class="timeline-text">Have many academic and non-academic achievements, ranging from district to national level and scored the fifth highest national exam in the school
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="experience padd-15">
                  <h3 class="title">Organisation</h3>
                  <div class="row">
                    <div class="timeline-box padd-15">
                      <div class="timeline shadow-dark">
                        <div class="timeline-item">
                        <div class="circle-dot"></div>
                        <h6 class="timeline-date">
                          <i class="fa fa-calendar"></i> 2019 - Now
                        </h6>
                        <h4 class="timeline-title">HIMATIKA UTY as Sekretary</h4>
                        <p class="timeline-text">Become the core administrator in terms of secretarial and become a committee in campus to national activities</p>
                        </div>
                        <div class="timeline-item">
                        <div class="circle-dot"></div>
                        <h6 class="timeline-date">
                          <i class="fa fa-calendar"></i> 2019 - Now
                        </h6>
                        <h4 class="timeline-title">Robotika UTY as Member</h4>
                        <p class="timeline-text">Conducting research and training on robotics and conducting activities both on campus and outside the campus</p>
                        </div>
                        <div class="timeline-item">
                        <div class="circle-dot"></div>
                        <h6 class="timeline-date">
                          <i class="fa fa-calendar"></i> 2017 - 2018
                        </h6>
                        <h4 class="timeline-title">OSIS Senior High School as Treasurer</h4>
                        <p class="timeline-text">Become the core administrator in terms of finance and become the organizer of events in schools and national workshop seminars and hold provincial-level competitions</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      
        <section class="gallery">
          <div class="container">
          <div class="row padd-15">
            <h2 class="title">Galerry</h2>
          </div>
          <div class="row padd-15">
            <h3 class="title">My Photos</h3>
          </div>
            
            <div class="row">
            <?php foreach ( $photos as $photo) :?>
              <div class="gallery-item padd-15">
                <div class="gallery-item-inner shadow-dark">
                  <div class="gallery-img">
                    <img src="<?= $photo["name"]?>.<?= $photo["type"]?>" alt="gallery">
                  </div>
                  <div class="gallery-info">
                    <h4>Klik untuk memperbesar gambar</h4>
                    <div class="icon">
                      <i class="fa fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach;?>
            </div>
            <div class="row padd-15">
              <h3 class="title vid">My Videos</h3>
            </div>
            <?php foreach ( $videos as $video) :?>
            <div class="gallery-video">
              <video controls><source src="<?= $video["name"]?>.<?= $video["type"]?>" type="video/<?= $video["type"]?>"></video>
            </div>
            <?php endforeach;?>
          </div>
        </section>
        </section>
      <section class="portofolio section" id="portofolio">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>Portofolio</h2>
            </div>
          </div>
          <div class="row">
            <div class="portofolio-filter padd-15">
              <button  type="button" class="active" data-filter='all'>All</button>
              <button type="button" data-filter='web-design'>Web Design</button>
              <button type="button" data-filter='logo-design'>Logo Design</button>
              <button type="button" data-filter='photography'>Photography</button>
            </div>
          </div>
          <div class="row">
          <?php foreach ( $portofolio as $type) :?>
            <div class="portofolio-item padd-15" data-category="<?= $type["portofolio_type"]?>">
              <div class="portofolio-item-inner shadow-dark">
                <div class="portofolio-img">
                  <img src="<?= $type["file_name"]?>.<?= $type["file_type"]?>" alt="portofolio">
                </div>
                <div class="portofolio-info">
                  <h4><?= $type["type_title"]?></h4>
                  <div class="icon">
                    <i class="fa fa-search"></i>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach;?>
          </div>
        </div>
      </section>
      
      <section class="contact section" id="contact">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>Contact</h2>
            </div>
          </div>
          <div class="row">
            <div class="contact-info-item padd-15">
              <div class="icon"><i class="fa fa-phone"></i></div>
              <h4>Call Me On</h4>
              <p>+62 813 2440 3653</p>
            </div>
            <div class="contact-info-item padd-15">
              <div class="icon"><i class="fa fa-envelope"></i></div>
              <h4>E-Mail</h4>
              <p class="long">rizaldy.fathan.rfa@gmail.com</p>
            </div>
            <div class="contact-info-item padd-15">
              <div class="icon"><i class="fa fa-map-marker"></i></div>
              <h4>Home</h4>
              <p>Remaja Street, Indramyu Indonesia</p>
            </div>
          </div>

          <div class="row">
            <form action="" method="POST" class="contact-form padd-15">
              <div class="row">
                <div class="form-item col-6 padd-15">
                  <div class="form-group">
                    <input type="text" class="form-control" name="nama" placeholder="Name *" required>
                  </div>
                </div>
                <div class="form-item col-6 padd-15">
                  <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email *" required>
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="form-item col-12 padd-15">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject *" required>
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="form-item col-12 padd-15">
                  <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Your Message...." required></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 padd-15">
                    <button type="submit" name="tambah" class="btn">Send Message</button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </section>
      <!-- about section end -->
    </div>
    <!-- end main content -->
  </div>
  <!-- main container end -->
  <!-- Light box -->
  <div class="lightbox">
    <div class="lightbox-content">
      <div class="lightbox-close">&times; </div>
      <img src="" alt="portofolio" class="lightbox-img" onclick="nextItem()">
      <div class="lightbox-caption">
        <div class="caption-text"></div>
        <div class="caption-counter"></div>
      </div>
    </div>
    <div class="lightbox-control">
      <div class="prev-item" onclick="prevItem()"><i class="fa fa-angle-left"></i></div>
      <div class="next-item" onclick="nextItem()"><i class="fa fa-angle-right"></i></div>
    </div>
  </div>

  <div class="panelbox">
    <div class="panelbox-content">
      <div class="panelbox-close">&times; </div>
      <img src="" alt="gallery" class="panelbox-img" onclick="nextItems()">
      <div class="panelbox-caption">
        <div class="caption-text">Photos</div>
        <div class="caption-counter"></div>
      </div>
    </div>
    <div class="panelbox-control">
      <div class="prev-item" onclick="prevItems()"><i class="fa fa-angle-left"></i></div>
      <div class="next-item" onclick="nextItems()"><i class="fa fa-angle-right"></i></div>
    </div>
  </div>
  <!-- Light box end -->

  <div class="style-switcher">
    <div class="toggle-style-switcher">
      <i class="fa fa-cog"></i>
    </div>
    <h4>Style Body Skin</h4>
    <label for="light">
      <input type="radio" id="light" class="body-skin" name="body-style" value="light" checked="true">
      Light
    </label>
    <label for="dark">
      <input type="radio" id="dark" class="body-skin" name="body-style" value="dark">
      Dark
    </label>
  </div>
  <!-- tamplate js -->
  <script src="darkmode.js"></script>
  <script src="script.js"></script>
</body>
</html>