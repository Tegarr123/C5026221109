<html>
  <head>
    <title>Evaluasi Tengah Semester</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
  </head>
  <body>
    <div class="container">
      <div class="box">
        <nav>
          <div class="logo"><img src="images/logo.png" alt="" /></div>
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active show" data-toggle="tab" href="#tab1"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab2">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab4"
                >Testimonials</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab3"
                >Files</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab5">Contact Me</a>
            </li>
          </ul>
        </nav>

        <div class="tab-content">
          <div class="tab-pane in active show" id="tab1">
            <div class="container">
              <div class="box-tab d-flex flex-column align-items-center pt-3">
                <h1>Welcome to my Website</h1>
                <h2>
                  This is my personal website, hopefully you are doing well
                </h2>
                <div class="clock d-inline-flex mt-2">
                  <div class="time">
                    <h3 id="time"></h3>
                  </div>
                  <div class="meridem">
                    <h3 id="day"></h3>
                  </div>
                  <script>
                    setInterval(() => {
                      let date = new Date();
                      let hours = date.getHours();
                      let minutes = date.getMinutes();
                      let seconds = date.getSeconds();

                      let day;
                      day = hours < 12 ? "AM" : "PM";
                      hours = hours > 12 ? hours - 12 : hours;

                      hours = hours < 10 ? "0" + hours : hours;
                      minutes = minutes < 10 ? "0" + minutes : minutes;
                      seconds = seconds < 10 ? "0" + seconds : seconds;

                      const time = document.querySelector("#time");
                      const d = document.querySelector("#day");

                      time.textContent =
                        hours + " : " + minutes + " : " + seconds;
                      d.textContent = day;
                    });
                  </script>
                </div>
                <div class="subscribe pt-3">
                  <h4>Subscribe now to get the latest updates!</h4>
                  <form method="post" role="form" class="email-form">
                    <div class="subscribe-form">
                      <input type="email" name="email" required />
                      <input type="submit" />
                    </div>
                  </form>
                </div>
                <div class="my-social-links">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"
                    ><i class="bi bi-facebook"></i
                  ></a>
                  <a href="#" class="instagram"
                    ><i class="bi bi-instagram"></i
                  ></a>
                  <a href="#" class="linkedin"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab2">
            <div class="container">
              <div class="box-tab">
                <div class="row">
                  <div class="col-5 person float-left p-0">
                    <img src="images/person.jpg" alt="" />
                  </div>
                  <div class="col-7 aboutme bg-dark p-0">
                    <h3 class="pt-0 font-weight-light pl-2">
                      Neque officiis dolore maiores et exercitationem quae est
                      seda lidera pat claero
                    </h3>
                    <ul class="nav nav-tabs pl-2">
                      <li class="nav-item">
                        <a
                          class="nav-link active show"
                          data-toggle="tab"
                          href="#aboutme1"
                          >LOREM IPSUM</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#aboutme2"
                          >DOLOR SITEMA</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#aboutme3"
                          >SED UT PERSPICIATIS</a
                        >
                      </li>
                    </ul>
                    <div class="tab-content pl-2">
                      <div class="tab-pane fade show active" id="aboutme1">
                        <p>
                          Voluptatum deleniti atque corrupti quos dolores et
                          quas molestias excepturi sint occaecati cupiditate non
                          provident
                        </p>
                        <p>
                          Voluptatum deleniti atque corrupti quos dolores et
                          quas molestias excepturi sint occaecati cupiditate non
                          provident
                        </p>
                        <p>
                          Voluptatum deleniti atque corrupti quos dolores et
                          quas molestias excepturi sint occaecati cupiditate non
                          provident
                        </p>
                        <p>
                          Voluptatum deleniti atque corrupti quos dolores et
                          quas molestias excepturi sint occaecati cupiditate non
                          provident
                        </p>
                      </div>
                      <div class="tab-pane fade show" id="aboutme2">
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum dolore eu fugiat nulla pariatur
                        </p>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum dolore eu fugiat nulla pariatur
                        </p>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum dolore eu fugiat nulla pariatur
                        </p>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum dolore eu fugiat nulla pariatur
                        </p>
                      </div>
                      <div class="tab-pane fade show" id="aboutme3">
                        <p>
                          Minim veniam, quis nostrud exercitation ullamco
                          laboris nisi ut aliquip ex ea commodo consequat tarad
                          limino ata
                        </p>
                        <p>
                          Minim veniam, quis nostrud exercitation ullamco
                          laboris nisi ut aliquip ex ea commodo consequat tarad
                          limino ata
                        </p>
                        <p>
                          Minim veniam, quis nostrud exercitation ullamco
                          laboris nisi ut aliquip ex ea commodo consequat tarad
                          limino ata
                        </p>
                        <p>
                          Minim veniam, quis nostrud exercitation ullamco
                          laboris nisi ut aliquip ex ea commodo consequat tarad
                          limino ata
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab3">
            <div class="container">
              <div class="box-tab">
                <div class="row mt-5">
                  <div class="col-10 d-inline-flex align-items-center justify-content-center flex-row">
                    <a class="text-center p-1 invisible" href=""><button type="submit">margin</button></a>
                    <a class="text-center p-1" href="/pertemuan1"><button type="submit">pertemuan-1</button></a>
                    <a class="text-center p-1" href="/pertemuan2"><button type="submit">pertemuan-2</button></a>
                    <a class="text-center p-1" href="/pertemuan3"><button type="submit">pertemuan-3</button></a>
                    <a class="text-center p-1" href="/Tugas1"><button type="submit">Tugas1</button></a>
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="col-10 d-inline-flex align-items-center justify-content-center flex-row">
                    <a class="text-center p-1 invisible" href=""><button type="submit">margin</button></a>
                    <a class="text-center p-1" href="/bootstrap1"><button type="submit">bootstrap-1</button></a>
                    <a class="text-center p-1" href="/bootstrap2"><button type="submit">bootstrap-2</button></a>
                    <a class="text-center p-1" href="/Javascript1"><button type="submit">Javascript-1</button></a>
                    <a class="text-center p-1" href="/Javascript2"><button type="submit">Javascript-2</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab4">
            <div class="container">
              <div class="box-tab">
                <div id="testimonial" class="carousel slide" data-ride="carousel">

                  <ul class="carousel-indicators">
                    <li data-target="#testimonial" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonial" data-slide-to="1"></li>
                    <li data-target="#testimonial" data-slide-to="2"></li>
                  </ul>

                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="testimonial-item mt-4">
                        <img src="images/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Sara Willson</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus <br> Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="testimonial-item mt-4">
                        <img src="images/testimonials-2.jpg" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla <br> quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="testimonial-item mt-4">
                        <img src="images/testimonials-3.jpg" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam <br> tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam <br> esse veniam culpa fore nisi cillum quid.
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#testimonial" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#testimonial" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>

                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab5">
            <div class="container">
              <div class="box-tab contact">
                <div class="row">
                  <div class="col-7 d-flex align-items-stretch">
                    <div class="info">
                      <div class="address">
                        <h5>Location:</h5>
                        <p>Jl. Keputih GgIII, Surabaya, Jawa Timur</p>
                      </div>

                      <div class="my-contact d-flex">
                        <div>
                          <h5>Email:</h5>
                          <p>fadhino987@gmail.com</p>
                        </div>
                        <div class="pl-5">
                          <h5>Call:</h5>
                          <p>+62 81234034850</p>
                        </div>
                      </div>

                      <iframe
                        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d831.9735377900515!2d112.79864323844188!3d-7.2912799824390016!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1697853933420!5m2!1sen!2sid"
                        width="430"
                        height="250"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                      ></iframe>
                    </div>
                  </div>
                  <div class="col-5 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form method="post" role="form" class="email-form">
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="name">Your Name</label>
                          <input
                            type="text"
                            name="name"
                            class="form-control"
                            id="name"
                            placeholder="Enter your name"
                            required
                          />
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                          <label for="name">Your Email</label>
                          <input
                            type="email"
                            class="form-control"
                            name="email"
                            id="email"
                            placeholder="Enter your email"
                            required
                          />
                        </div>
                      </div>
                      <div class="form-group mt-1">
                        <label for="name">Subject</label>
                        <input
                          type="text"
                          class="form-control"
                          name="subject"
                          id="subject"
                          placeholder="Enter the subject"
                          required
                        />
                      </div>
                      <div class="form-group mt-3">
                        <label for="name">Message</label>
                        <textarea
                          class="form-control"
                          name="message"
                          rows="5"
                          placeholder="Enter your message"
                          required
                        ></textarea>
                      </div>
                      <div class="text-center">
                        <button type="submit">Send Message</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
