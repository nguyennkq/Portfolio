<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio NK</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.4/swiper-bundle.css" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
</head>
<body>
    <i class="fa-solid fa-bars d-xl-none mobile-nav-toggle"></i>
    <header>
        <div class="d-flex flex-column">
            <div class="profile">
                <img src="https://picsum.photos/200" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="#">Khánh Nguyên</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="fa-brands fa-skype"></i></a>
                    <a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                  </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                  <li><a href="#hero" class="nav-link scrollto active"><i class="fa-solid fa-house"></i><span>Home</span></a></li>
                  <li><a href="#about" class="nav-link scrollto"><i class="fa-solid fa-user"></i><span>About</span></a></li>
                  <li><a href="#resume" class="nav-link scrollto"><i class="fa-solid fa-file"></i><span>Resume</span></a></li>
                  <li><a href="#portfolio" class="nav-link scrollto"><i class="fa-solid fa-book"></i><span>Portfolio</span></a></li>
                  <li><a href="#services" class="nav-link scrollto"><i class="fa-solid fa-server"></i><span>Services</span></a></li>
                  <li><a href="#contact" class="nav-link scrollto"><i class="fa-solid fa-envelope"></i><span>Contact</span></a></li>
                </ul>
              </nav>
              <!--! End nav-menu -->
        </div>
    </header>
    <!--! End header-->

    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
          <h1>Khánh Nguyên</h1>
          <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer"></span></p>
        </div>
      </section>
      <!--! End section-->

      <main>
        <section id="about" class="about">
          <div class="container">
            <div class="section-title">
              <h2>About</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
              <div class="col-lg-4" data-aos="fade-right">
                <img src="https://picsum.photos/500" class="img-fluid" alt="">
              </div>
              <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>UI/UX Designer &amp; Web Developer.</h3>
                <p class="">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <div class="row">
                  <div class="col-lg-6">
                    <ul>
                      <li><i class="fa-solid fa-chevron-right"></i><strong>Birthday:</strong> <span>1 May 1995</span></li>
                      <li><i class="fa-solid fa-chevron-right"></i><strong>Website:</strong> <span>www.example.com</span></li>
                      <li><i class="fa-solid fa-chevron-right"></i><strong>Phone:</strong> <span>+123 456 7890</span></li>
                      <li><i class="fa-solid fa-chevron-right"></i><strong>City:</strong> <span>New York, USA</span></li>
                    </ul>
                  </div>
                  <div class="col-lg-6">
                    <ul>
                      <li><i class="fa-solid fa-chevron-right"></i><strong>Age:</strong> <span>30</span></li>
                      <li><i class="fa-solid fa-chevron-right"></i><strong>Degree:</strong> <span>Master</span></li>
                      <li><i class="fa-solid fa-chevron-right"></i><strong>PhEmailone:</strong> <span>email@example.com</span></li>
                      <li><i class="fa-solid fa-chevron-right"></i><strong>Freelance:</strong> <span>Available</span></li>
                    </ul>
                  </div>
                </div>
                <p>
                  Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                  Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
                </p>
              </div>
            </div>
          </div>
        </section>
        <!--! End about -->

        <section id="facts" class="facts">
          <div class="container">
            <div class="section-title">
              <h2>Facts</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="row no-gutters">
              <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                <div class="count-box">
                  <i class="fa-solid fa-face-smile"></i>
                  <span data-purecounter-start="0" data-purecounter-end="268" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Happy Clients</strong> consequuntur quae</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="count-box">
                  <i class="fa-solid fa-book"></i>
                  <span data-purecounter-start="0" data-purecounter-end="204" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="count-box">
                  <i class="fa-solid fa-headset"></i>
                  <span data-purecounter-start="0" data-purecounter-end="2002" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="count-box">
                  <i class="fa-solid fa-person"></i>
                  <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--! End facts -->

        <section id="skills" class="skills section-bg">
          <div class="container">

            <div class="section-title">
              <h2>Skills</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row skills-content">

              <div class="col-lg-6" data-aos="fade-up">

                <div class="progress">
                  <span class="skill">HTML <i class="val">100%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="progress">
                  <span class="skill">CSS <i class="val">90%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="progress">
                  <span class="skill">JavaScript <i class="val">75%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

              </div>

              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                <div class="progress">
                  <span class="skill">PHP <i class="val">80%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="progress">
                  <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="progress">
                  <span class="skill">Photoshop <i class="val">55%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

              </div>

            </div>

          </div>
        </section>
        <!--! End Skill-->

        <section id="resume" class="resume">
          <div class="container">

            <div class="section-title">
              <h2>Resume</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
              <div class="col-lg-6" data-aos="fade-up">
                <h3 class="resume-title">Sumary</h3>
                <div class="resume-item pb-0">
                  <h4>Alex Smith</h4>
                  <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
                  <ul>
                    <li>Portland par 127,Orlando, FL</li>
                    <li>(123) 456-7891</li>
                    <li>alice.barkley@example.com</li>
                  </ul>
                </div>

                <h3 class="resume-title">Education</h3>
                <div class="resume-item">
                  <h4>Master of Fine Arts &amp; Graphic Design</h4>
                  <h5>2015 - 2016</h5>
                  <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                  <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
                </div>
                <div class="resume-item">
                  <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                  <h5>2010 - 2014</h5>
                  <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                  <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
                </div>
              </div>
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <h3 class="resume-title">Professional Experience</h3>
                <div class="resume-item">
                  <h4>Senior graphic design specialist</h4>
                  <h5>2019 - Present</h5>
                  <p><em>Experion, New York, NY </em></p>
                  <ul>
                    <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                    <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                    <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                    <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                  </ul>
                </div>
                <div class="resume-item">
                  <h4>Graphic design specialist</h4>
                  <h5>2017 - 2018</h5>
                  <p><em>Stepping Stone Advertising, New York, NY</em></p>
                  <ul>
                    <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                    <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                    <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                    <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </section>
        <!--! End Resume-->

        <section id="portfolio" class="portfolio section-bg">
          <div class="container">

            <div class="section-title">
              <h2>Portfolio</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row" data-aos="fade-up">
              <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-filters">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-app">App</li>
                  <li data-filter=".filter-card">Card</li>
                  <li data-filter=".filter-web">Web</li>
                </ul>
              </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="https://picsum.photos/500" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="https://picsum.photos/500" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="fa-solid fa-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="fa-solid fa-link"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="https://picsum.photos/500" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="https://picsum.photos/500" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="fa-solid fa-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="fa-solid fa-link"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="https://picsum.photos/500" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="https://picsum.photos/500" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="fa-solid fa-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="fa-solid fa-link"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="https://picsum.photos/500" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="https://picsum.photos/500" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="fa-solid fa-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="fa-solid fa-link"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="https://picsum.photos/500" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="https://picsum.photos/500" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="fa-solid fa-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="fa-solid fa-link"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="https://picsum.photos/500" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="https://picsum.photos/500" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="fa-solid fa-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="fa-solid fa-link"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="https://picsum.photos/500" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="https://picsum.photos/500" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="fa-solid fa-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="fa-solid fa-link"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="https://picsum.photos/500" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="https://picsum.photos/500" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="fa-solid fa-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="fa-solid fa-link"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="https://picsum.photos/500" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="https://picsum.photos/500" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="fa-solid fa-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="fa-solid fa-link"></i></a>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </section>
        <!--! End Portfolio -->

        <section id="services" class="services">
          <div class="container">

            <div class="section-title">
              <h2>Services</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                <div class="icon"><i class="fa-solid fa-briefcase"></i></div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="fa-solid fa-table-list"></i></div>
                <h4 class="title"><a href="">Dolor Sitema</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="fa-solid fa-chart-simple"></i></div>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="fa-solid fa-binoculars"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="fa-solid fa-sun"></i></div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <div class="icon"><i class="fa-solid fa-calendar"></i></div>
                <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
              </div>
            </div>

          </div>
        </section>
        <!--! End Services -->

        <section id="testimonials" class="testimonials section-bg">
          <div class="container">

            <div class="section-title">
              <h2>Testimonials</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item" data-aos="fade-up">
                    <p>
                      <i class="fa-solid fa-quote-left"></i>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                      <i class="fa-solid fa-quote-right"></i>
                    </p>
                    <img src="https://picsum.photos/seed/picsum/200/" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                  </div>
                </div><!--? End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                    <p>
                      <i class="fa-solid fa-quote-left"></i>
                      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                      <i class="fa-solid fa-quote-right"></i>
                    </p>
                    <img src="https://picsum.photos/seed/picsum/200/" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                  </div>
                </div><!--? End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                    <p>
                      <i class="fa-solid fa-quote-left"></i>
                      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                      <i class="fa-solid fa-quote-right"></i>
                    </p>
                    <img src="https://picsum.photos/seed/picsum/200/" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                  </div>
                </div><!--? End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                    <p>
                      <i class="fa-solid fa-quote-left"></i>
                      Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                      <i class="fa-solid fa-quote-right"></i>
                    </p>
                    <img src="https://picsum.photos/seed/picsum/200/" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                  </div>
                </div><!--? End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                    <p>
                      <i class="fa-solid fa-quote-left"></i>
                      Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                      <i class="fa-solid fa-quote-right"></i>
                    </p>
                    <img src="https://picsum.photos/seed/picsum/200/" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                  </div>
                </div><!--? End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
        </section>
        <!--! End Testimonials -->

        <section id="contact" class="contact">
          <div class="container">

            <div class="section-title">
              <h2>Contact</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row" data-aos="fade-in">

              <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                  <div class="address">
                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                    <h4>Location:</h4>
                    <p>A108 Adam Street, New York, NY 535022</p>
                  </div>

                  <div class="email">
                    <i class="fa-solid fa-envelope"></i>
                    <h4>Email:</h4>
                    <p>info@example.com</p>
                  </div>

                  <div class="phone">
                    <i class="fa-solid fa-phone"></i>
                    <h4>Call:</h4>
                    <p>+1 5589 55488 55s</p>
                  </div>

                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15126.728332494671!2d105.6484877455928!3d18.58836627029117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1683343945265!5m2!1sen!2s" width="100%" height="290px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

              </div>

              <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="" method="post" role="form">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="name">Your Name</label>
                      <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="name">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                  </div>
                  <div class="form-group">
                    <label for="name">Message</label>
                    <textarea class="form-control" name="message" rows="10" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>

            </div>

          </div>
        </section>
        <!--! End Contact -->
      </main>

      <footer id="footer">
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>Portfolio NK</span></strong>
          </div>
          <div class="credits">
            Designed by <a href="">Nguyennk</a>
          </div>
        </div>
      </footer>
      <!--! End  Footer -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up"></i></a>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
      <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
      <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.4/swiper-bundle.min.js"></script>

      <script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>
</html>
