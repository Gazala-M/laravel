<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
         <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
</head>
<body>
<div class="background">
  <nav class="navbar h-nav-resp">
    <div class="logo">
      <img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="logo">
    </div>
    <ul class="nav-list v-class-resp">
      <li><a href="/"> Home </a></li>
      <li><a href="about"> About </a></li>
      <li><a href="service"> Services </a></li>
      <li><a href="contact"> Contact Us </a></li>
    </ul>


    <div class="burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
  </nav>
  <div class="firstsection" id="home">
    <div class="box-main">
      <h4 class="heading-sm aos-init aos-animate" data-aos="fade-right">Let Us Take Care Of</h4>
      <h1 class="heading-bg aos-init aos-animate" data-aos="fade-left">Your App & Website Needs.</h1>
      <p class="text-small">We are masters at converting your app or Website Idea to a Real Product</p>
      <div class="button">
        <button class="butn">Get In Touch</button>
      </div>
    </div>
  </div>
</div>

<div class="about-section global-section">
  <div class="get container">
    <div class="row">
      <div class="col-12">
        <h5 data-aos="fade-right" class="aos-init aos-animate">It Solutions Services.</h5>
        <p data-aos="fade-left" class="aos-init aos-animate"> " Our team of knowledgeable consultants is here to help you every step of the way, whether you are a well-established firm looking to innovate and optimize, or a start-up hoping to introduce an inventive new product. With years of expertise in cloud computing, AI/ML solutions, mobile app development, and web development, Appligent Technologies is your go-to partner for transforming your company digitally. " 

        </p>
        <!-- <button data-aos="zoom-in" class="aos-init aos-animate">Contact Us</button> -->
      </div>
    </div>
  </div>
</div>

<div class="get-section global-section">
  <div class="get container">
    <div class="row">
      <div class="col-12">
        <h5 data-aos="fade-right" class="aos-init aos-animate">Get in touch with us.</h5>
        <p data-aos="fade-left" class="aos-init aos-animate">If you have any projects or questions, kindly contact our
          team. We reply fast.</p>
        <button data-aos="zoom-in" class="aos-init aos-animate">Contact Us</button>
      </div>
    </div>
  </div>
</div>



<div class="contact-section" id="contact-section">
  <div class="contact-us-section">
    <div class="first-half">
      <img src="<?php echo e(asset('assets/images/contact-banner.png')); ?>" alt="contact">
    </div>
    <div class="second-half">

      <div class="contact-form">
        <h2 class="form-title">Send us a message</h2>
        <p class="form-p">Let us hear your ideas. Contact us and let's start working together</p>
        <form action="#" id="form" class="mt-4">
          <div class="formfield">
            <label for="firstName">First Name</label>
            <input name="firstName" id="first" type="text" placeholder="First Name" value>
            <div class="error"></div>
          </div>

          <div class="formfield"><label for="lastName">Last Name</label>
            <input name="lastName" id="last" type="text" placeholder="Last Name" value>
            <div class="error"></div>
          </div>

          <div class="formfield"><label for="email">Email Address</label>
            <input name="email" id="email" type="email" placeholder="Email Address" value>
            <div class="error"></div>
          </div>

          <div class="formfield"><label for="description">Description</label>
            <textarea name="description" id="description" rows="3"
              placeholder="Please Send us a Brief message to step a 15 min private consultation" value>
             </textarea>
            <div class="error"></div>
          </div>

          <div class="formfield">
            <label for="category"> Please Specify the category for the app </label>

            <select name="category" id="category">
              <option value selected>Select Category</option>
              <option value="category1">Category A</option>
              <option value="category2">Category B</option>
              <option value="category3">Category C</option>
              <option value="category4">Category D</option>
            </select>
            <div class="error"></div>
          </div>
          <div class="mt-4 text-end">
            <button class="main-btn" id="btn" type="submit">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



<footer class="footer global-section pb-0 ">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 left_section">
        <div class="footer_logo mb-4 mt-4"><img alt="app expedition logo" loading="lazy" width="155" height="65"
            decoding="async" data-nimg="1" style="color:transparent" src="<?php echo e(asset('assets/images/logo.png')); ?>">
        </div>
        <div class="location d-flex align-items-center"><svg aria-hidden="true" focusable="false" data-prefix="fas"
            data-icon="location-dot" class="svg-inline--fa fa-location-dot location_icon" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
            <path fill="currentColor"
              d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
            </path>
          </svg>
          <p>1968 south coast Hwy STE 1496 <br> Laguna Beach 92651</p>
        </div>
        <div class="email d-flex align-items-center mt-4">
          <svg aria-hidden="true" focusable="false" data-prefix="fas"
            data-icon="envelope" class="svg-inline--fa fa-envelope email_icon" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor"
              d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z">
            </path>
          </svg><a href="mailto:Info@appexpedition.com">Info@appexpedition.com</a></div>
      </div>
      <div class="col-lg-3">
        <div class="footer_heading">
          <h2>Company</h2>
          <ul class="footer_links ps-0">
            <li><a href="/">Home</a></li>
            <li><a href="about">About us</a></li>
            <li><a href="#privacy-policy">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="footer_heading">
          <h2>Services</h2>
          <ul class="footer_links ps-0">
            <li><a href="#project">Web Development</a></li>
            <li><a href="#project">App Development</a></li>
            <li><a href="#project">UI/UX Design</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <hr>
    </div>
    <div class="row sub_footer text-center py-4"><span>© 2023 appexpedition All rights reserved.
    </span></div>
  </div>
</footer> 


<script src="https://code.jquery.com/jquery-3.6.0.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
<script src="script.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"> </script>
<script type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="/bootstrap-5.3.3-dist/js/bootstrap.js"> </script>

</script>
</body>
</html><?php /**PATH E:\example-app\resources\views/service.blade.php ENDPATH**/ ?>