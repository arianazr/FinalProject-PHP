<?php
include_once("Registration/config.php");
?>
<!DOCTYPE html>
<html id="scrolltop" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/73603c0753.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.cdnfonts.com/css/circular-std" rel="stylesheet" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="img/favicon-32x32.png"
    />
    <style>
    .btn3 {
      position: relative;
      display: inline-flex;
      align-items: center;
      background: none;
      border: none;
      cursor: pointer;
      padding: 0;
    }

    .menu__label {
      position: absolute;
      white-space: nowrap;
      transform-origin: 50% 50%;
    }
  </style>
    <title>ThriftOnline | Vintage Online Store</title>
  </head>
  <body id="bodyoverflow">
    
    <nav>
      <div class="nav__background"></div>
        <button id="nav-toggle-btn" class="btn">
          <svg width="33px" height="33px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 6H20M4 12H14M4 18H9" stroke="#000000" stroke-width="0.696" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
      <text class="hoverPOPUP">Menu</text>
        </button>
        <?php if(empty($_SESSION["email"])) {?>
         
          <button id="nav-toggle-btn" class="btn2">
            <svg width="33px" height="33px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#000000" stroke-width="0.696" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            <text class="hoverPOPUP">Login</text> 
      </button>
      <button id="nav-toggle-btn" class="btn3">
        <svg width="33px" height="33px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 18L17 18M17 18L14 18M17 18V15M17 18V21M11 21H4C4 17.134 7.13401 14 11 14C11.695 14 12.3663 14.1013 13 14.2899M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z" stroke="#000000" stroke-width="0.696" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        <text class="hoverPOPUP">Sign Up</text>
      </button>
        <?php } else {?>
          <a id="nav-toggle-btn" href="profile.php?id=<?= $_SESSION["id"];?>" class="profileBtn">
            <svg width="33px" height="33px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#000000" stroke-width="0.696" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            <text class="hoverPOPUP"><?php echo $_SESSION["username"];?></text> 
        </a>
      <?php }?>
      <div class="nav__wrapper" aria-expanded="false">
        <div style="transform: none" id="transform">
          <div id="nav-links">
            <a class="nav-link" href="#">
              <h2 id="active" class="nav-link-label rubik-font">Home</h2>
              <img class="nav-link-image" src="img/home-src.png" />
            </a>
            <a class="nav-link" href="store/store.php">
              <h2 class="nav-link-label rubik-font">Store</h2>
              <img class="nav-link-image" src="img/store-nav.png" />
            </a>
            <a class="nav-link" href="about/about.php">
              <h2 class="nav-link-label rubik-font">About</h2>
              <img class="nav-link-image" src="img/about-scr.png" />
            </a>
            <a class="nav-link" href="contact/contact.php">
              <h2 class="nav-link-label rubik-font">Contact</h2>
              <img class="nav-link-image" src="img/about-nav.png" />
            </a>
            <a class="nav-link" href="team/team.html">
              <h2 class="nav-link-label rubik-font">team</h2>
              <img class="nav-link-image" src="img/jobs.jpg" />
            </a>
          </div>
        </div>
      </div>
    </nav>
    <h1 class="page-logo">To.</h1>
    <main style="position: relative">
      <section class="row nav__Row">
        <div class="main-bg">
          <div class="main">
            <div class="img__wrapper">
              <h2>we offer</h2>
              <h2>vintage</h2>
              <div style="margin-left: 2rem">
                <h2>clothes</h2>
              </div>
              <h2>online</h2>
              <h1 class="page-titles">
                THRIFTONLINE <br /><span>Most reliable online shop.</span>
              </h1>
            </div>
            <div class="img__wrapper-right">
              <p>
                We believe our industry is blinded by numbers. While buying
                decisions are based on emotion.
              </p>
              <button class="main__button">Shop All</button>
            </div>
          </div>
        </div>
        <div class="container carousel__container">
          <div class="left2">
            <div
              style="
                background: url(img/header-img3.jpg),
                  linear-gradient(to bottom, rgba(0 0 0 / 30%), transparent);
                background-size: cover;
                background-position: center;
              "
              class="carousel"
            >
              <div class="carousel__left">
                <h1 class="weekly__hottest-logo">ThriftOnline</h1>
                <h1 class="weekly__hottest-title">
                  <span>ZARA</span> · Colorful in black
                </h1>
              </div>
            </div>
            <div
              style="
                background: url(img/header-img1.jpg),
                  linear-gradient(to bottom, rgba(0 0 0 / 30%), transparent);
                background-size: cover;
                background-position: center;
              "
              class="carousel"
            >
              <div class="carousel__left">
                <h1 class="weekly__hottest-logo">ThriftOnline</h1>
                <h1 class="weekly__hottest-title">
                  <span>DIOR</span> · Saddle dior bag
                </h1>
              </div>
            </div>
          </div>
          <div class="right2">
            <div
              style="
                background: url(img/header-img2.jpg),
                  linear-gradient(to bottom, rgba(0 0 0 / 30%), transparent);
                background-size: cover;
                background-position: center;
              "
              class="carousel"
            >
              <div class="carousel__left">
                <h1 class="weekly__hottest-logo">ThriftOnline</h1>
                <h1 class="weekly__hottest-title">
                  <span>VOGUE</span> · Superman's cape
                </h1>
              </div>
            </div>
            <div
              style="
                background: url(img/header-img4.jpg),
                  linear-gradient(to bottom, rgba(0 0 0 / 30%), transparent);
                background-size: cover;
                background-position: center;
              "
              class="carousel"
            >
              <div class="carousel__left">
                <h1 class="weekly__hottest-logo">ThriftOnline</h1>
                <h1 class="weekly__hottest-title">
                  <span>Louis Vuitton</span> · Classy and vintage
                </h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="row header__row">
        <div class="container header__container">
          <div class="header__titel-container">
            <h2>PRODUCTS</h2>
          </div>
          <div class="content__container">
            <div class="header__content">
              <div class="flex header__content-main">
                <div class="header__content-img-cnt">
                  <img class="header__img" src="img/tops2.jpg" />
                </div>
              </div>
              <div class="header__content-container">
                <h1 class="header__content-label">TOPS</h1>
                <span
                  ><p>
                    In 2009, three people started the Secrid adventure:
                    Marianne, René and Paul. Thirteen years later, our creative
                    family consists of more than 100 colleagues and we keep
                    growing steadily.
                  </p></span
                >
              </div>
            </div>
            <div class="header__content">
              <div class="flex header__content-main">
                <div class="header__content-img-cnt">
                  <img
                    style="height: 24vw"
                    class="header__img"
                    src="img/jeans3.jpg"
                  />
                </div>
              </div>
              <div class="header__content-container">
                <h1 class="header__content-label">BOTTOMS</h1>
                <span
                  ><p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Dicta alias explicabo, recusandae nulla animi mollitia?
                  </p></span
                >
              </div>
            </div>
            <div class="header__content">
              <div class="flex header__content-main">
                <div class="header__content-img-cnt">
                  <img
                    style="height: 19vw"
                    class="header__img"
                    src="img/chuck70s2.jpg"
                  />
                </div>
              </div>
              <div class="header__content-container">
                <h1 class="header__content-label">FOOTWEAR</h1>
                <span
                  ><p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Esse eos commodi enim libero quis! Quibusdam dolorem maiores
                    voluptas repellat atque officia. Aperiam, deleniti facere.
                    Ad quidem alias quaerat porro pariatur!
                  </p></span
                >
              </div>
            </div>
            <div class="header__content">
              <div class="flex header__content-main">
                <div class="header__content-img-cnt">
                  <img
                    style="height: calc(100% - 10rem)"
                    class="header__img"
                    src="img/jewelry2.jpg"
                  />
                </div>
              </div>
              <div class="header__content-container">
                <h1 class="header__content-label">accesories</h1>
                <span
                  ><p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Inventore, voluptates ea a incidunt quod recusandae
                    doloremque quis tempore mollitia ullam provident, ad eaque
                    hic.
                  </p></span
                >
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="carousel__section">
        <div class="row carousel__row">
          <div class="carousel__header">
            <div class="carousel__title-container">
              <div class="carousel__title">THIS</div>
              <div class="carousel__title">WEEKS</div>
              <div class="carousel__title">HOTTEST</div>
            </div>
            <div class="carousel__subtitle">
              <p>
                Keep up with the hottest fashion designer all across the world.
                Picked with love by our staff.
              </p>
              <a class="main__button" href="store.php">SHOP ALL</a>
            </div>
          </div>
          <div class="container carousel__container">
            <div class="left">
              <div
                style="
                  background: url(img/header4.jpg),
                    linear-gradient(to bottom, rgba(0 0 0 / 30%), transparent);
                  background-size: cover;
                  background-position: center;
                "
                class="carousel"
              >
                <div class="carousel__left">
                  <h1 class="weekly__hottest-logo">ThriftOnline</h1>
                  <h1 class="weekly__hottest-title">
                    <span>GUCCI</span> · Experiment with gucci
                  </h1>
                </div>
              </div>
              <div
                style="
                  background: url(img/header1.jpg),
                    linear-gradient(to bottom, rgba(0 0 0 / 30%), transparent);
                  background-size: cover;
                  background-position: center;
                "
                class="carousel"
              >
                <div class="carousel__left">
                  <h1 class="weekly__hottest-logo">ThriftOnline</h1>
                  <h1 class="weekly__hottest-title">
                    <span>BERSHKA</span> · Basic but stylish
                  </h1>
                </div>
              </div>
            </div>
            <div class="right">
              <div
                style="
                  background: url(img/header2.jpg),
                    linear-gradient(to bottom, rgba(0 0 0 / 30%), transparent);
                  background-size: cover;
                  background-position: center;
                "
                class="carousel"
              >
                <div class="carousel__left">
                  <h1 class="weekly__hottest-logo">ThriftOnline</h1>
                  <h1 class="weekly__hottest-title">
                    <span>NORDSTORM</span> · See the world different
                  </h1>
                </div>
              </div>
              <div
                style="
                  background: url(img/header3.jpg),
                    linear-gradient(to bottom, rgba(0 0 0 / 30%), transparent);
                  background-size: cover;
                  background-position: center;
                "
                class="carousel"
              >
                <div class="carousel__left">
                  <h1 class="weekly__hottest-logo">ThriftOnline</h1>
                  <h1 class="weekly__hottest-title">
                    <span>RICKOWENS</span> · Differently stlylistic
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="carousel__section">
        <div class="row carousel__row">
          <div class="carousel__header">
            <div class="carousel__title-container">
              <div class="carousel__title">BACK</div>
              <div class="carousel__title">IN STOCK</div>
              <div class="carousel__title">AGAIN</div>
            </div>
            <div class="carousel__subtitle">
              <p>
                Missed a drop? dont worry we got you coverd. We refill our stock
                every month.
              </p>
              <a class="main__button" href="store.php">SHOP ALL</a>
            </div>
          </div>
          <div class="container carousel__container">
            <div class="left">
              <div
                style="
                  background: url(img/header5.jpg),
                    linear-gradient(to bottom, rgba(0 0 0 / 30%), transparent);
                  background-size: cover;
                  background-position: center;
                "
                class="carousel"
              >
                <div class="carousel__left">
                  <h1 class="weekly__hottest-logo">ThriftOnline</h1>
                  <h1 class="weekly__hottest-title">
                    <span>DIOR</span> · Saddle dior bag
                  </h1>
                </div>
              </div>
              <div
                style="
                  background: url(img/header6.jpg),
                    linear-gradient(to bottom, rgba(0 0 0 / 30%), transparent);
                  background-size: cover;
                  background-position: center;
                "
                class="carousel"
              >
                <div class="carousel__left">
                  <h1 class="weekly__hottest-logo">ThriftOnline</h1>
                  <h1 class="weekly__hottest-title">
                    <span>VOGUE</span> · Superman's cape
                  </h1>
                </div>
              </div>
            </div>
            <div class="right">
              <div
                style="
                  background: url(img/header7.jpg),
                    linear-gradient(to bottom, rgba(0 0 0 / 30%), transparent);
                  background-size: cover;
                  background-position: center;
                "
                class="carousel"
              >
                <div class="carousel__left">
                  <h1 class="weekly__hottest-logo">ThriftOnline</h1>
                  <h1 class="weekly__hottest-title">
                    <span>ZARA</span> · Orange is the new black
                  </h1>
                </div>
              </div>
              <div
                style="
                  background: url(img/header8.jpg),
                    linear-gradient(to bottom, rgba(0 0 0 / 30%), transparent);
                  background-size: cover;
                  background-position: center;
                "
                class="carousel"
              >
                <div class="carousel__left">
                  <h1 class="weekly__hottest-logo">ThriftOnline</h1>
                  <h1 class="weekly__hottest-title">
                    <span>Louis Vuitton</span> · Classy and vintage
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="carousel__section">
        <div class="row carousel__row">
          <div class="carousel__header">
            <div class="carousel__title-container">
              <div class="carousel__title">SHARE</div>
              <div class="carousel__title">YOUR</div>
              <div class="carousel__title">THOUGHTS</div>
            </div>
            <div class="carousel__subtitle">
              <p>
                We believe our industry is blinded by numbers. While buying
                decisions are based on emotion.
              </p>
              <a class="main__button" href="signup.html">SHARE YOUR OPINION</a>
            </div>
          </div>
          <div class="container carousel__container">
            <div class="left">
              <div
                style="
                  background: url(img/carousel1.jpg),
                    linear-gradient(to bottom, rgba(0 0 0 / 80%), transparent);
                  background-size: cover;
                  background-position: center;
                "
                class="carousel"
              >
                <div class="carousel__left">
                  <h1 class="carousel__profil-title">Jona James</h1>
                  <p>
                    <q>
                      There is only what you need, and nothing beyond that.
                    </q>
                  </p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="carousel__svg"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"
                    />
                    <path
                      d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"
                    />
                  </svg>
                  <p class="svg__tooltip">Share your experience!</p>
                </div>
              </div>
              <div
                style="
                  background: url(img/carousel2.jpg),
                    linear-gradient(to bottom, rgba(0 0 0 / 80%), transparent);
                  background-size: cover;
                  background-position: center;
                "
                class="carousel"
              >
                <div class="carousel__left">
                  <h1 class="carousel__profil-title">Greta Morent</h1>
                  <p>
                    <q>
                      When I found ThriftOnline clothes, everything was in one
                      place.</q
                    >
                  </p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="carousel__svg"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"
                    />
                    <path
                      d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"
                    />
                  </svg>
                  <p class="svg__tooltip">Share your experience!</p>
                </div>
              </div>
            </div>
            <div class="right">
              <div
                style="
                  background: url(img/carousel3.jpg),
                    linear-gradient(to bottom, rgba(0 0 0 / 80%), transparent);
                  background-size: cover;
                  background-position: center;
                "
                class="carousel"
              >
                <div class="carousel__left">
                  <h1 class="carousel__profil-title">Hannah Jenkins</h1>
                  <p>
                    <q
                      >The thing I love most about ThriftOnline is just how
                      divers they are.
                    </q>
                  </p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="carousel__svg"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"
                    />
                    <path
                      d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"
                    />
                  </svg>
                  <p class="svg__tooltip">Share your experience!</p>
                </div>
              </div>
              <div
                style="
                  background: url(img/carousel4.jpg),
                    linear-gradient(to bottom, rgba(0 0 0 / 80%), transparent);
                  background-size: cover;
                  background-position: center;
                "
                class="carousel"
              >
                <div class="carousel__left">
                  <h1 class="carousel__profil-title">Steven Adams</h1>
                  <p>
                    <q>
                      I just love their shipping, nice to just have them
                      delivered to the door.
                    </q>
                  </p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="carousel__svg"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"
                    />
                    <path
                      d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"
                    />
                  </svg>
                  <p class="svg__tooltip">Share your experience!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer>
        <div class="footer__left">
          <div class="footer__container-h3">
            <h3>We have high standars for our emails too.</h3>
          </div>
        </div>
        <div class="footer__right">
          <div class="footer__container-h3 footer__container-h3-rsp">
            <h3>We have high standars for our emails too.</h3>
          </div>
          <form class="form__container" style="position: relative" action="#">
            <input
              type="email"
              class="footer__input"
              placeholder="Enter your email"
            />
            <button class="main__button" type="submit">Subscribe</button>
          </form>
          <div class="footer__contact input__contact">
            <ul class="footer__social">
              <li>
                <a href="#" class="footer__links flex"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="currentColor"
                    class="bi bi-facebook"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#" class="footer__links flex">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="currentColor"
                    class="bi bi-instagram"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#" class="footer__links flex">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="currentColor"
                    class="bi bi-twitter"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#" class="footer__links flex">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="currentColor"
                    class="bi bi-youtube"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#" class="footer__links flex">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="currentColor"
                    class="bi bi-pinterest"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"
                    />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="footer__bottom-container">
            <p class="footer__bottom-left">
              From Arian with care © 2023 ThriftOnline
            </p>
            <p class="footer__bottom-right">
              Terms and conditions / Privacy Policy
            </p>
          </div>
        </div>
      </footer>
    </main>
    <div class="loginModal" aria-expanded="false" >
      <div class="loginContainer">
        <div class="loginDesc">
          <h1>Login</h1>
          <p>Log in to your ThriftOnline account to buy, sell, comment, and more.</p>
        </div>
        <div class="socialMediaLogin">
        <a class="add__button flex" style="gap: 10px">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            fill="currentColor"
            class="bi bi-apple"
            viewBox="0 0 16 16"
          >
            <path
              d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"
            />
            <path
              d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"
            />
          </svg>
          Continue with Apple
        </a>
        <a class="add__button flex" style="gap: 10px">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            fill="currentColor"
            class="bi bi-google"
            viewBox="0 0 16 16"
          >
            <path
              d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"
            />
          </svg>
          Continue with Google
        </a>
        <a class="add__button flex" style="gap: 10px">
          <svg  
          width="32"
          height="32"
          fill="currentColor" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M21.95 5.005l-3.306-.004c-3.206 0-5.277 2.124-5.277 5.415v2.495H10.05v4.515h3.317l-.004 9.575h4.641l.004-9.575h3.806l-.003-4.514h-3.803v-2.117c0-1.018.241-1.533 1.566-1.533l2.366-.001.01-4.256z"></path></g></svg>
          Continue with Facebook
        </a>
        </div>
        <div class="userLogin">
          <a class="loginInBtn" href="Registration/Login.php">Log in with email</a>
          <p>Dont have an account? <a href="">Sign Up</a></p>
        </div>
      </div>
    </div>
    <div class="signInModal" aria-expanded="false" >
      <div class="loginContainer">
        <div class="loginDesc">
          <h1>Sign In</h1>
          <p>Sign in to your ThriftOnline account to buy, sell, comment, and more.</p>
        </div>
        <div class="socialMediaLogin">
        <a class="add__button flex" style="gap: 10px">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            fill="currentColor"
            class="bi bi-apple"
            viewBox="0 0 16 16"
          >
            <path
              d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"
            />
            <path
              d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"
            />
          </svg>
          Continue with Apple
        </a>
        <a class="add__button flex" style="gap: 10px">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            fill="currentColor"
            class="bi bi-google"
            viewBox="0 0 16 16"
          >
            <path
              d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"
            />
          </svg>
          Continue with Google
        </a>
        <a class="add__button flex" style="gap: 10px">
          <svg  
          width="32"
          height="32"
          fill="currentColor" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M21.95 5.005l-3.306-.004c-3.206 0-5.277 2.124-5.277 5.415v2.495H10.05v4.515h3.317l-.004 9.575h4.641l.004-9.575h3.806l-.003-4.514h-3.803v-2.117c0-1.018.241-1.533 1.566-1.533l2.366-.001.01-4.256z"></path></g></svg>
          Continue with Facebook
        </a>
        </div>
        <div class="userLogin">
          <a class="loginInBtn" href="Registration/Signup.php">Sign in with email</a>
          <p>Already have an account? <a href="Registration/Login.php">Login</a></p>
        </div>
      </div>
    </div>
    <script src="js/main.js"></script>
  </body>
</html>
