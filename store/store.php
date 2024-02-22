<?php
include_once("../Registration/config.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="store.css" />
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
    <link href="https://fonts.cdnfonts.com/css/circular-std" rel="stylesheet" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="../img/favicon-32x32.png"
    />
    <link rel="manifest" href="/site.webmanifest" />
    <title>Store | ThriftOnline</title>
  </head>
  <body id="bodyoverflow">
    <header>
      <h1 class="page-logo">To.</h1>
      <h1 class="page-titles">
        THRIFTONLINE <br /><span>Most reliable online shop.</span>
      </h1>
    </header>
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
          <a id="nav-toggle-btn" href="../profile.php?id=<?= $_SESSION["id"];?>" class="profileBtn">
            <svg width="33px" height="33px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#000000" stroke-width="0.696" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            <text class="hoverPOPUP"><?php echo $_SESSION["username"];?></text> 
        </a>
      <?php }?>
      <div class="nav__wrapper" aria-expanded="false">
        <div style="transform: none" id="transform">
          <div id="nav-links">
            <a class="nav-link" href="../index.php">
              <h2  class="nav-link-label rubik-font">Home</h2>
              <img class="nav-link-image" src="../img/home-src.png" />
            </a>
            <a class="nav-link" href="#">
              <h2 id="active" class="nav-link-label rubik-font">Store</h2>
              <img class="nav-link-image" src="../img/store-nav.png" />
            </a>
            <a class="nav-link" href="../about/about.php">
              <h2 class="nav-link-label rubik-font">About</h2>
              <img class="nav-link-image" src="../img/about-scr.png" />
            </a>
            <a class="nav-link" href="../contact/contact.php">
              <h2 class="nav-link-label rubik-font">Contact</h2>
              <img class="nav-link-image" src="../img/about-nav.png" />
            </a>
            <a class="nav-link" href="../team/team.html">
              <h2 class="nav-link-label rubik-font">team</h2>
              <img class="nav-link-image" src="../img/jobs.jpg" />
            </a>
          </div>
        </div>
      </div>
    </nav>
    <aside class="fileter__section">
      <div aria-expanded="false" id="filter-wrp" class="fileter__wrapper">
        <div class="filter__container">
          <div
            style="width: 100%; display: flex; justify-content: center"
            class="filter-cancel__button-container"
          >
            <button
              style="margin-top: 1.3125rem"
              class="filter__button filter-btn"
              id="filter-toggle"
            >
              <span
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="18"
                  height="18"
                  fill="currentColor"
                  class="bi bi-x-lg"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"
                  />
                </svg>
              </span>
              <span class="filter__button-label">Close filters</span>
            </button>
          </div>
          <ul class="filter__list">
            <li class="filter__listed-items">
              <input type="checkbox" class="filter__check" id="filter-check" />
              <label class="labels" id="button-height-toggle" for="filter-check"
                ><p class="title__sizes">Size</p>
                <svg
                  width="18"
                  height="18"
                  viewBox="0 0 24 24"
                  id="caret-down"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.1416 9.92896L12.7776 16.2929C12.3871 16.6834 11.7539 16.6834 11.3634 16.2929L4.99946 9.92895"
                    stroke="#000000"
                    stroke-linecap="round"
                  />
                </svg>
              </label>
              <div class="size__filter" style="height: 0px">
                <p class="size__title">Pick Your Size</p>
                <ul class="sizes__list">
                  <li>
                    <input type="checkbox" name="XXS" id="XXS" />
                    <label for="XXS">XXS/40</label>
                  </li>
                  <li>
                    <input type="checkbox" name="XS" id="XS" />
                    <label for="XS">XS/42</label>
                  </li>
                  <li>
                    <input type="checkbox" name="S" id="S" />
                    <label for="S">S/44-46</label>
                  </li>
                  <li>
                    <input type="checkbox" name="M" id="M" />
                    <label for="M">M/48-50</label>
                  </li>
                  <li>
                    <input type="checkbox" name="L" id="L" />
                    <label for="L">L/52-54</label>
                  </li>
                  <li>
                    <input type="checkbox" name="XL" id="XL" />
                    <label for="XL">XL/56</label>
                  </li>
                  <li>
                    <input type="checkbox" name="XXL" id="XXL" />
                    <label for="XXL">XXL/58</label>
                  </li>
                </ul>
              </div>
            </li>
            <li class="filter__listed-items">
              <input type="checkbox" class="filter__check" id="filter-check2" />
              <label
                id="button-height-toggle"
                class="labels"
                for="filter-check2"
                ><p class="title__sizes">Designer</p>
                <svg
                  width="18"
                  height="18"
                  viewBox="0 0 24 24"
                  id="caret-down"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.1416 9.92896L12.7776 16.2929C12.3871 16.6834 11.7539 16.6834 11.3634 16.2929L4.99946 9.92895"
                    stroke="#000000"
                    stroke-linecap="round"
                  />
                </svg>
              </label>
              <div class="size__filter" style="height: 0px">
                <div class="form__container-searchbar">
                  <form action="#" class="searchbar__container">
                    <i
                      class="fa-solid fa-magnifying-glass"
                      id="searchbar-icon"
                    ></i>
                    <input
                      type="text"
                      name="searchbar"
                      id="searchbar"
                      class="searchbar"
                      placeholder="Search Desginers"
                    />
                  </form>
                </div>
                <ul class="sizes__list">
                  <li>
                    <input type="checkbox" id="Vintage" />
                    <label for="Vintage">Vintage</label>
                  </li>
                  <li>
                    <input type="checkbox" id="Streetwear" />
                    <label for="Streetwear">Streetwear</label>
                  </li>
                  <li>
                    <input type="checkbox" id="JapaneseBrand" />
                    <label for="JapaneseBrand">Japanese Brand</label>
                  </li>
                  <li>
                    <input type="checkbox" id="BandTees" />
                    <label for="BandTees">Band Tees</label>
                  </li>
                  <li>
                    <input type="checkbox" id="BandTees" />
                    <label for="BandTees">Band Tees</label>
                  </li>
                  <li>
                    <input type="checkbox" id="nike" />
                    <label for="nike">Nike</label>
                  </li>
                  <li>
                    <input type="checkbox" id="Supreme" />
                    <label for="Supreme">Supreme</label>
                  </li>
                  <li>
                    <input type="checkbox" id="Adidas" />
                    <label for="Adidas">Adidas</label>
                  </li>
                </ul>
              </div>
            </li>
            <li class="filter__listed-items">
              <input type="checkbox" class="filter__check" id="filter-check3" />
              <label
                id="button-height-toggle"
                class="labels"
                for="filter-check3"
                ><p class="title__sizes">Price</p>
                <svg
                  width="18"
                  height="18"
                  viewBox="0 0 24 24"
                  id="caret-down"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.1416 9.92896L12.7776 16.2929C12.3871 16.6834 11.7539 16.6834 11.3634 16.2929L4.99946 9.92895"
                    stroke="#000000"
                    stroke-linecap="round"
                  />
                </svg>
              </label>
              <div class="size__filter" style="height: 0px">
                <div class="prices__container">
                  <div class="min" style="position: relative">
                    <i class="fa-solid fa-dollar-sign" id="dollar-sign"></i>
                    <input
                      type="number"
                      name="min"
                      id="min"
                      placeholder="MIN"
                      class="price__selector"
                    />
                  </div>
                  <div class="max" style="position: relative">
                    <i class="fa-solid fa-dollar-sign" id="dollar-sign"></i>
                    <input
                      type="number"
                      name="max"
                      id="max"
                      placeholder="MAX"
                      class="price__selector"
                    />
                  </div>
                </div>
              </div>
            </li>
            <li class="filter__listed-items">
              <input type="checkbox" class="filter__check" id="filter-check4" />
              <label
                id="button-height-toggle"
                class="labels"
                for="filter-check4"
              >
                <p class="title__sizes">Condition</p>
                <svg
                  width="18"
                  height="18"
                  viewBox="0 0 24 24"
                  id="caret-down"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.1416 9.92896L12.7776 16.2929C12.3871 16.6834 11.7539 16.6834 11.3634 16.2929L4.99946 9.92895"
                    stroke="#000000"
                    stroke-linecap="round"
                  />
                </svg>
              </label>
              <div class="size__filter" style="height: 0px">
                <ul class="sizes__list">
                  <li>
                    <input type="checkbox" name="new" id="new" />
                    <label for="new">New/Never Worn</label>
                  </li>
                  <li>
                    <input type="checkbox" name="gentle" id="gentle" />
                    <label for="gentle">Gently Used</label>
                  </li>
                  <li>
                    <input type="checkbox" name="used" id="used" />
                    <label for="used">Used</label>
                  </li>
                  <li>
                    <input type="checkbox" name="very" id="very" />
                    <label for="very">Very Worn</label>
                  </li>
                  <li>
                    <input
                      type="checkbox"
                      name="notspecified"
                      id="notspecified"
                    />
                    <label for="notspecified">Not Specified</label>
                  </li>
                </ul>
              </div>
            </li>
            <li class="filter__listed-items">
              <input type="checkbox" class="filter__check" id="filter-check5" />
              <label
                id="button-height-toggle"
                class="labels"
                for="filter-check5"
              >
                <p class="title__sizes">Filter By Keyword</p>
                <svg
                  width="18"
                  height="18"
                  viewBox="0 0 24 24"
                  id="caret-down"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.1416 9.92896L12.7776 16.2929C12.3871 16.6834 11.7539 16.6834 11.3634 16.2929L4.99946 9.92895"
                    stroke="#000000"
                    stroke-linecap="round"
                  />
                </svg>
              </label>
              <div class="size__filter" style="height: 0px">
                <div class="form__container-searchbar">
                  <form action="#" class="searchbar__container">
                    <i
                      class="fa-solid fa-magnifying-glass"
                      id="searchbar-icon"
                    ></i>
                    <input
                      type="text"
                      name="searchbar"
                      id="searchbar"
                      class="searchbar"
                      placeholder="Filter by keyword"
                    />
                  </form>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </aside>
    <main style="position: relative">
      <section class="row nav__Row">
        <div class="main-bg">
          <div id="main-height" style="position: relative" class="main">
            <div class="img__wrapper">
              <div class="header-allClothes__wrapper">
                <button id="allClothes-button">All clothes</button
                ><span style="font-size: 10px">></span>
                <p id="header-title-smll"></p>
              </div>
              <h2 class="header__title"></h2>
              <div
                id="garanteHeader"
                style="display: none; width: 370px"
                class="garante__container"
              >
                <ul class="garante__list">
                  <li class="garante__listed-items">
                    <svg
                      fill="#000000"
                      width="44px"
                      height="44px"
                      viewBox="0 0 30 30"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g
                        id="SVGRepo_tracerCarrier"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></g>
                      <g id="SVGRepo_iconCarrier">
                        <path
                          d="M15.48 12c-.13.004-.255.058-.347.152l-2.638 2.63-1.625-1.62c-.455-.474-1.19.258-.715.712l1.983 1.978c.197.197.517.197.715 0l2.995-2.987c.33-.32.087-.865-.367-.865zM.5 16h3c.277 0 .5.223.5.5s-.223.5-.5.5h-3c-.277 0-.5-.223-.5-.5s.223-.5.5-.5zm0-4h3c.277 0 .5.223.5.5s-.223.5-.5.5h-3c-.277 0-.5-.223-.5-.5s.223-.5.5-.5zm0-4h3c.277 0 .5.223.5.5s-.223.5-.5.5h-3C.223 9 0 8.777 0 8.5S.223 8 .5 8zm24 11c-1.375 0-2.5 1.125-2.5 2.5s1.125 2.5 2.5 2.5 2.5-1.125 2.5-2.5-1.125-2.5-2.5-2.5zm0 1c.834 0 1.5.666 1.5 1.5s-.666 1.5-1.5 1.5-1.5-.666-1.5-1.5.666-1.5 1.5-1.5zm-13-1C10.125 19 9 20.125 9 21.5s1.125 2.5 2.5 2.5 2.5-1.125 2.5-2.5-1.125-2.5-2.5-2.5zm0 1c.834 0 1.5.666 1.5 1.5s-.666 1.5-1.5 1.5-1.5-.666-1.5-1.5.666-1.5 1.5-1.5zm-5-14C5.678 6 5 6.678 5 7.5v11c0 .822.678 1.5 1.5 1.5h2c.676.01.676-1.01 0-1h-2c-.286 0-.5-.214-.5-.5v-11c0-.286.214-.5.5-.5h13c.286 0 .5.214.5.5V19h-5.5c-.66 0-.648 1.01 0 1h7c.66 0 .654-1 0-1H21v-9h4.227L29 15.896V18.5c0 .286-.214.5-.5.5h-1c-.654 0-.654 1 0 1h1c.822 0 1.5-.678 1.5-1.5v-2.75c0-.095-.027-.19-.078-.27l-4-6.25c-.092-.143-.25-.23-.422-.23H21V7.5c0-.822-.678-1.5-1.5-1.5z"
                        ></path>
                      </g>
                    </svg>
                    <p class="garante__subtitle">Return policy</p>
                  </li>
                  <li class="garante__listed-items">
                    <svg
                      width="44px"
                      height="44px"
                      viewBox="0 0 1024 1024"
                      fill="#000000"
                      class="icon"
                      version="1.1"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g
                        id="SVGRepo_tracerCarrier"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></g>
                      <g id="SVGRepo_iconCarrier">
                        <path
                          d="M800.8 952c-31.2 0-56-24.8-56-56s24.8-56 56-56 56 24.8 56 56-25.6 56-56 56z m-448 0c-31.2 0-56-24.8-56-56s24.8-56 56-56 56 24.8 56 56-25.6 56-56 56zM344 792c-42.4 0-79.2-33.6-84-76l-54.4-382.4-31.2-178.4c-2.4-19.2-19.2-35.2-37.6-35.2H96c-13.6 0-24-10.4-24-24s10.4-24 24-24h40.8c42.4 0 80 33.6 85.6 76l31.2 178.4 54.4 383.2C309.6 728 326.4 744 344 744h520c13.6 0 24 10.4 24 24s-10.4 24-24 24H344z m40-128c-12.8 0-23.2-9.6-24-22.4-0.8-6.4 1.6-12.8 5.6-17.6s10.4-8 16-8l434.4-32c19.2 0 36-15.2 38.4-33.6l50.4-288c1.6-13.6-2.4-28-10.4-36.8-5.6-6.4-12.8-9.6-21.6-9.6H320c-13.6 0-24-10.4-24-24s10.4-24 24-24h554.4c22.4 0 42.4 9.6 57.6 25.6 16.8 19.2 24.8 47.2 21.6 75.2l-50.4 288c-4.8 41.6-42.4 74.4-84 74.4l-432 32c-1.6 0.8-2.4 0.8-3.2 0.8z"
                          fill=""
                        ></path>
                      </g>
                    </svg>
                    <p class="garante__subtitle">Variety products</p>
                  </li>
                  <li class="garante__listed-items">
                    <svg
                      fill="#000000"
                      width="64px"
                      height="64px"
                      viewBox="0 0 96 96"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g
                        id="SVGRepo_tracerCarrier"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></g>
                      <g id="SVGRepo_iconCarrier">
                        <title></title>
                        <g id="Verified">
                          <path
                            d="M64.91,37.61A4.17,4.17,0,0,0,66.44,35a4.17,4.17,0,0,0-1.53-2.64,4.56,4.56,0,0,1-1.17-1.59,4.71,4.71,0,0,1,.22-2,4.08,4.08,0,0,0,0-3,4.18,4.18,0,0,0-2.61-1.49,4.74,4.74,0,0,1-1.85-.81,4.67,4.67,0,0,1-.81-1.85A4.13,4.13,0,0,0,57.21,19a4.06,4.06,0,0,0-3,0,4.75,4.75,0,0,1-2,.22A4.56,4.56,0,0,1,50.61,18,4.17,4.17,0,0,0,48,16.5,4.17,4.17,0,0,0,45.33,18a4.56,4.56,0,0,1-1.59,1.17,4.71,4.71,0,0,1-2-.22,4.13,4.13,0,0,0-3,0,4.18,4.18,0,0,0-1.49,2.61,4.74,4.74,0,0,1-.81,1.85,4.67,4.67,0,0,1-1.85.81A4.13,4.13,0,0,0,32,25.73a4.13,4.13,0,0,0,0,3,4.71,4.71,0,0,1,.22,2A4.56,4.56,0,0,1,31,32.33,4.17,4.17,0,0,0,29.5,35,4.17,4.17,0,0,0,31,37.61,4.56,4.56,0,0,1,32.2,39.2a4.75,4.75,0,0,1-.22,2,4.11,4.11,0,0,0,0,3,4.13,4.13,0,0,0,2.61,1.49,4.74,4.74,0,0,1,1.85.81,4.74,4.74,0,0,1,.81,1.85A4.13,4.13,0,0,0,38.73,51a2.42,2.42,0,0,0,1.27.28V78.84a.52.52,0,0,0,.25.44.49.49,0,0,0,.51,0l7.74-4.62,7.74,4.62a.48.48,0,0,0,.26.07.57.57,0,0,0,.25-.06.52.52,0,0,0,.25-.44V51.07l.21-.1a4.13,4.13,0,0,0,1.49-2.61,4.74,4.74,0,0,1,.81-1.85,4.74,4.74,0,0,1,1.85-.81A4.13,4.13,0,0,0,64,44.21a4.06,4.06,0,0,0,0-3,4.75,4.75,0,0,1-.22-2A4.56,4.56,0,0,1,64.91,37.61Zm-16.15,36a.52.52,0,0,0-.52,0L41,78V51.12l.71-.16a7.45,7.45,0,0,1,1.59-.27,2,2,0,0,1,.44.05,4.56,4.56,0,0,1,1.59,1.17A4.17,4.17,0,0,0,48,53.44a4.17,4.17,0,0,0,2.64-1.53,4.56,4.56,0,0,1,1.59-1.17,4.75,4.75,0,0,1,2,.22,8.5,8.5,0,0,0,1.76.29V78Zm14-34.7A5.29,5.29,0,0,0,63,41.47a3.51,3.51,0,0,1,.11,2.24c-.3.53-1.18.78-2,1a5.32,5.32,0,0,0-2.27,1.07,5.32,5.32,0,0,0-1.07,2.27c-.25.84-.5,1.72-1,2a1.14,1.14,0,0,1-.37.11,1.2,1.2,0,0,1-.28,0h-.18l-.36,0h-.09c-.31,0-.64-.13-1-.21A11.35,11.35,0,0,0,53,49.72a3,3,0,0,0-1,.06,5.1,5.1,0,0,0-2,1.41c-.65.61-1.32,1.25-2,1.25s-1.3-.64-1.95-1.25a5.1,5.1,0,0,0-2-1.41,2.46,2.46,0,0,0-.67-.08h-.14a6.36,6.36,0,0,0-.75.08l-.11,0c-.29.05-.58.11-.86.18s-.71.17-1,.22h0a1.85,1.85,0,0,1-1.19-.1c-.52-.3-.78-1.18-1-2a5.21,5.21,0,0,0-1.07-2.27,5.32,5.32,0,0,0-2.27-1.07c-.84-.25-1.72-.5-2-1A3.51,3.51,0,0,1,33,41.47a5.29,5.29,0,0,0,.21-2.53,5.1,5.1,0,0,0-1.41-2c-.61-.65-1.25-1.32-1.25-2s.64-1.3,1.25-1.95a5.1,5.1,0,0,0,1.41-2A5.29,5.29,0,0,0,33,28.47a3.51,3.51,0,0,1-.11-2.24c.3-.52,1.18-.78,2-1a5.21,5.21,0,0,0,2.27-1.07,5.21,5.21,0,0,0,1.07-2.27c.25-.84.51-1.72,1-2a3.51,3.51,0,0,1,2.24.11,5.29,5.29,0,0,0,2.53.21,5.1,5.1,0,0,0,2-1.41c.65-.61,1.32-1.25,1.95-1.25s1.3.64,2,1.25a5.1,5.1,0,0,0,2,1.41A5.29,5.29,0,0,0,54.47,20a3.51,3.51,0,0,1,2.24-.11c.53.3.78,1.18,1,2a5.32,5.32,0,0,0,1.07,2.27,5.21,5.21,0,0,0,2.27,1.07c.84.25,1.72.51,2,1A3.51,3.51,0,0,1,63,28.47,5.29,5.29,0,0,0,62.78,31a5.1,5.1,0,0,0,1.41,2c.61.65,1.25,1.32,1.25,1.95s-.64,1.3-1.25,2A5.1,5.1,0,0,0,62.78,38.94Z"
                          ></path>
                          <path
                            d="M55.34,31.67a.51.51,0,0,0-.71-.05L45.7,39.27,42,34.37a.5.5,0,0,0-.7-.1.51.51,0,0,0-.1.7l4,5.33h0s0,0,0,0l.11.08.06,0a.54.54,0,0,0,.21,0h0a.55.55,0,0,0,.28-.09H46l9.33-8A.51.51,0,0,0,55.34,31.67Z"
                          ></path>
                          <path
                            d="M48,23a12.45,12.45,0,0,1,1.84.14h.08a.5.5,0,0,0,.07-1A13.13,13.13,0,0,0,48,22h0a.48.48,0,0,0-.48.5A.51.51,0,0,0,48,23Z"
                          ></path>
                          <path
                            d="M36,31.64a.39.39,0,0,0,.15,0,.5.5,0,0,0,.48-.34,12,12,0,0,1,.71-1.74.5.5,0,0,0-.22-.68.51.51,0,0,0-.67.22A13,13,0,0,0,35.62,31,.51.51,0,0,0,36,31.64Z"
                          ></path>
                          <path
                            d="M37.87,28.18a.5.5,0,0,0,.4-.21,12,12,0,0,1,1.22-1.43.5.5,0,0,0-.7-.71,13.1,13.1,0,0,0-1.33,1.55.5.5,0,0,0,.12.7A.45.45,0,0,0,37.87,28.18Z"
                          ></path>
                          <path
                            d="M40.63,25.41a.53.53,0,0,0,.29-.1,13.26,13.26,0,0,1,1.6-1,.5.5,0,1,0-.45-.89,12.89,12.89,0,0,0-1.74,1.07.51.51,0,0,0-.11.7A.52.52,0,0,0,40.63,25.41Z"
                          ></path>
                          <path
                            d="M44.1,23.62a.45.45,0,0,0,.16,0,12.51,12.51,0,0,1,1.83-.44.49.49,0,0,0,.41-.57.5.5,0,0,0-.57-.42,13.29,13.29,0,0,0-2,.48.5.5,0,0,0-.32.63A.49.49,0,0,0,44.1,23.62Z"
                          ></path>
                          <path
                            d="M59.4,31.25a11.37,11.37,0,0,1,.45,1.83.5.5,0,0,0,.49.42h.08a.49.49,0,0,0,.41-.57,12.53,12.53,0,0,0-.48-2,.49.49,0,0,0-.63-.31A.5.5,0,0,0,59.4,31.25Z"
                          ></path>
                          <path
                            d="M51.67,23.57a11,11,0,0,1,1.74.72.64.64,0,0,0,.23.05.51.51,0,0,0,.45-.27.5.5,0,0,0-.22-.67A13.43,13.43,0,0,0,52,22.62a.5.5,0,0,0-.63.32A.49.49,0,0,0,51.67,23.57Z"
                          ></path>
                          <path
                            d="M58.68,29.51a.49.49,0,0,0,.44.27.46.46,0,0,0,.23-.05.51.51,0,0,0,.21-.68,13.43,13.43,0,0,0-1.07-1.73.5.5,0,1,0-.81.59A13.34,13.34,0,0,1,58.68,29.51Z"
                          ></path>
                          <path
                            d="M56.46,26.49a.5.5,0,0,0,.35.14.47.47,0,0,0,.35-.15.48.48,0,0,0,0-.7,12.15,12.15,0,0,0-1.55-1.32.49.49,0,0,0-.7.11.51.51,0,0,0,.11.7A11.07,11.07,0,0,1,56.46,26.49Z"
                          ></path>
                          <path
                            d="M60.05,38.39a.49.49,0,0,0-.63.32,13.86,13.86,0,0,1-.72,1.74.5.5,0,0,0,.21.67.64.64,0,0,0,.23.05.51.51,0,0,0,.45-.27A13.32,13.32,0,0,0,60.37,39,.5.5,0,0,0,60.05,38.39Z"
                          ></path>
                          <path
                            d="M48,47a12.83,12.83,0,0,1-1.86-.14.51.51,0,0,0-.58.41.5.5,0,0,0,.42.57A12.32,12.32,0,0,0,48,48h0a.5.5,0,0,0,.5-.5A.5.5,0,0,0,48,47Z"
                          ></path>
                          <path
                            d="M36,35a12.7,12.7,0,0,1,.14-1.85.5.5,0,0,0-1-.16A13.5,13.5,0,0,0,35,35v0a.48.48,0,0,0,.5.48A.5.5,0,0,0,36,35Z"
                          ></path>
                          <path
                            d="M51.72,46.41a11.61,11.61,0,0,1-1.83.44.51.51,0,0,0-.42.57.51.51,0,0,0,.5.43H50a13.42,13.42,0,0,0,2-.48.5.5,0,0,0,.32-.63A.51.51,0,0,0,51.72,46.41Z"
                          ></path>
                          <path
                            d="M60.5,34.47A.52.52,0,0,0,60,35a11.82,11.82,0,0,1-.15,1.88.51.51,0,0,0,.42.57h.08a.49.49,0,0,0,.49-.42A12.45,12.45,0,0,0,61,35v0A.48.48,0,0,0,60.5,34.47Z"
                          ></path>
                          <path
                            d="M57.71,42.05a12,12,0,0,1-1.22,1.43.5.5,0,0,0,0,.71.49.49,0,0,0,.35.15.51.51,0,0,0,.36-.15,13,13,0,0,0,1.32-1.55.5.5,0,0,0-.81-.59Z"
                          ></path>
                          <path
                            d="M55.06,44.71a12,12,0,0,1-1.6,1,.5.5,0,0,0,.22,1,.46.46,0,0,0,.23-.06,13.54,13.54,0,0,0,1.74-1.07.5.5,0,1,0-.59-.8Z"
                          ></path>
                          <path
                            d="M44.31,46.42a10.62,10.62,0,0,1-1.74-.72.5.5,0,1,0-.46.89,13,13,0,0,0,1.89.78.4.4,0,0,0,.15,0,.5.5,0,0,0,.16-1Z"
                          ></path>
                          <path
                            d="M37.31,40.47a.49.49,0,0,0-.67-.22.51.51,0,0,0-.22.67,12.89,12.89,0,0,0,1.07,1.74.51.51,0,0,0,.41.2.52.52,0,0,0,.29-.09.5.5,0,0,0,.11-.7A13.26,13.26,0,0,1,37.31,40.47Z"
                          ></path>
                          <path
                            d="M36.59,38.73a12.83,12.83,0,0,1-.44-1.83.5.5,0,0,0-1,.16,13.29,13.29,0,0,0,.48,2,.5.5,0,0,0,.48.34.39.39,0,0,0,.15,0A.5.5,0,0,0,36.59,38.73Z"
                          ></path>
                          <path
                            d="M39.53,43.5a.5.5,0,0,0-.71,0,.5.5,0,0,0,0,.7,13.1,13.1,0,0,0,1.55,1.33.53.53,0,0,0,.3.09.5.5,0,0,0,.29-.9A12,12,0,0,1,39.53,43.5Z"
                          ></path>
                        </g>
                      </g>
                    </svg>
                    <p class="garante__subtitle">Authentic items</p>
                  </li>
                </ul>
              </div>
              <img
                class="store-logo"
                style="padding-bottom: 5rem"
                src="../img/Component 1.png"
                alt="All clothes Thrift Online Store"
              />
            </div>
            <div class="xcVq">
              <div class="img__wrapper-left">
                <div class="img__wrapper-left__inner">
                  <ul class="wrapper__items">
                    <li id="tops-button" class="wrapper__items-listed">
                      <a href="#" class="wrapper__links">
                        <div class="wrapper__svg">
                          <svg
                            width="64"
                            height="64"
                            viewBox="0 -9.89 80.819 80.819"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <g
                              id="Group_116"
                              data-name="Group 116"
                              transform="translate(-314.973 -274.638)"
                            >
                              <g id="Group_42" data-name="Group 42">
                                <g id="Group_41" data-name="Group 41">
                                  <path
                                    id="Path_23"
                                    data-name="Path 23"
                                    d="M314.995,305.6l1.615,16.244a3.26,3.26,0,0,0,.628,1.526l.718,3.5a.973.973,0,0,0,.987.718,30.4,30.4,0,0,1,7.449,0h.18a.862.862,0,0,0,.808-.628l.718-3.321a3.59,3.59,0,0,0,.9-2.333l.359-19.116,2.513.359c-.09,3.68-.359,19.386.808,28.9h0c.18,1.346.359,2.513.539,3.59a.781.781,0,0,0,.9.628c.09,0,9.424-.9,21.181-.9s21.091.808,21.181.9h.09a.851.851,0,0,0,.808-.718,30.761,30.761,0,0,0,.538-3.59h0c1.167-9.513.9-25.219.808-28.9l2.513-.359.359,19.027a4.013,4.013,0,0,0,.808,2.244h0l.718,3.321a.862.862,0,0,0,.808.628h.179a30.239,30.239,0,0,1,7.449,0,.889.889,0,0,0,.987-.718l.718-3.5a2.341,2.341,0,0,0,.628-1.526l1.885-15.975a3.118,3.118,0,0,0-.539-2.154L383.652,284.6a2.475,2.475,0,0,0-1.167-.987l-4.757-2.154h0l-14-6.282a2.257,2.257,0,0,0-1.257-.538H362.2a2.344,2.344,0,0,0-1.8.9,11.406,11.406,0,0,1-10.052,0,2.341,2.341,0,0,0-1.8-.9h-.269a3.16,3.16,0,0,0-1.257.538l-14,6.282h0l-4.757,2.154a2.485,2.485,0,0,0-1.167.987l-11.577,18.847A3.02,3.02,0,0,0,314.995,305.6Zm47.747-28.63a8.423,8.423,0,0,1-1.167,3.321,7.435,7.435,0,0,1-12.386,0,8.436,8.436,0,0,1-1.167-3.321.594.594,0,0,1,.538-.628h.09a.517.517,0,0,1,.539.538,7.98,7.98,0,0,0,.987,2.782,5.841,5.841,0,0,0,5.2,2.782,5.569,5.569,0,0,0,5.2-2.782,7.365,7.365,0,0,0,1.077-2.872.58.58,0,0,1,.539-.539h.09A.62.62,0,0,1,362.742,276.969Zm-7.36,1.346a14.881,14.881,0,0,0,4.308-.718,4.4,4.4,0,0,1-.538,1.167,4.051,4.051,0,0,1-3.77,1.974,3.959,3.959,0,0,1-3.769-1.974,3.413,3.413,0,0,1-.539-1.167A14.881,14.881,0,0,0,355.382,278.315Zm20.912,4.308a28.135,28.135,0,0,0-2.064,12.924c.359,3.41,1.167,5.654,2.423,6.641.18.09.269.18.449.269.09,3.321.359,18.488-.718,28-2.6-.18-10.949-.808-21.091-.808s-18.488.628-21.091.808c-1.077-9.513-.718-24.681-.718-28,.18-.09.269-.18.449-.269,1.257-.987,2.064-3.141,2.423-6.641.628-5.475-1.257-10.86-2.064-12.924l11.847-5.3a10.656,10.656,0,0,0,1.436,3.77,8.63,8.63,0,0,0,7.718,4.128,8.73,8.73,0,0,0,7.718-4.128,10.649,10.649,0,0,0,1.436-3.77Zm17.77,22.8-1.615,16.245a.329.329,0,0,1-.09.269,17.494,17.494,0,0,0-8.706.09,2.61,2.61,0,0,1-.18-.808l-.359-20.014V289.534a.9.9,0,1,0-1.794,0v10.949l-3.41.449c-.18-.09-1.436-.628-1.974-5.564a28,28,0,0,1,1.885-12.026l3.949,1.8a.7.7,0,0,1,.359.359l11.578,18.847A1.572,1.572,0,0,1,394.064,305.419ZM384.909,325.7l-.538-2.154a16.013,16.013,0,0,1,7.27,0l-.359,2.154A36.838,36.838,0,0,0,384.909,325.7Zm-50.169,8.257c-.09-.539-.18-1.167-.269-1.8,2.6-.18,10.86-.808,20.911-.808s18.219.628,20.911.808c-.09.628-.179,1.257-.269,1.8-2.513-.18-10.68-.808-20.642-.808S337.253,333.69,334.74,333.959ZM319.483,325.7l-.449-2.154a16.116,16.116,0,0,1,7.27,0l-.449,2.154A36.825,36.825,0,0,0,319.483,325.7ZM316.7,305.419a2.136,2.136,0,0,1,.269-1.077l11.578-18.847c.09-.18.269-.269.359-.359l3.949-1.8a28.023,28.023,0,0,1,1.885,12.026c-.538,4.936-1.8,5.475-1.974,5.564l-3.41-.449V289.533a.9.9,0,0,0-.9-.9.848.848,0,0,0-.9.9V301.2l-.359,20.014a2.622,2.622,0,0,1-.18.808,17.494,17.494,0,0,0-8.706-.09c0-.09-.09-.18-.09-.269Z"
                                    fill="#1e1e1c"
                                  />
                                </g>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <div class="wrapper__label-container">
                          <h2 class="wrapper-card-title">TOPS</h2>
                          <ul class="wrapper-card-listings">
                            <li>Listings</li>
                            <li>12.609</li>
                          </ul>
                        </div>
                      </a>
                    </li>
                    <li id="bottoms-button" class="wrapper__items-listed">
                      <a href="#" class="wrapper__links">
                        <div class="wrapper__svg">
                          <svg
                            width="64"
                            height="64"
                            viewBox="-11.04 0 61.385 61.385"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <g
                              id="Pants"
                              transform="translate(-125.1 -367.571)"
                            >
                              <g id="Group_95" data-name="Group 95">
                                <path
                                  id="Path_72"
                                  data-name="Path 72"
                                  d="M156.556,428.956c-7.447,0-7.762-.316-8.066-.622-.288-.292-.61-.619-3.992-32.189-3.046,31.409-3.128,31.669-3.165,31.786-.254.8-.307.963-8.478.963-7.144,0-7.24-.187-7.56-.807-.389-.752-.078-27.814-.074-28.088.225-18.553.674-28.935,1.332-30.86a1.385,1.385,0,0,1,.684-.848c1.12-.518,4.633-.72,12.529-.72l4.96.009,5.063-.009c9.716,0,11.963.284,12.709.81.609.43,1.09.769,1.587,30.129.2,11.864.373,28.834.3,29.286C164.225,428.711,164.183,428.956,156.556,428.956Zm-6.522-2.179c1.012.1,3.41.179,6.522.179,2.808,0,4.878-.068,5.866-.149.065-6.6-.519-52.034-1.315-56.861-1.106-.24-4.922-.375-11.318-.375l-5.063.009-4.96-.009c-6.332,0-10.156.148-11.388.44-1.087,4.536-1.486,49.888-1.246,56.762.891.061,2.733.121,5.723.121,3.072,0,5.515-.064,6.62-.138.468-4.4,2.747-27.837,3.981-40.6a1,1,0,0,1,.991-.9h0a1,1,0,0,1,.994.894C147.009,400.94,149.416,422.971,150.034,426.777Z"
                                  fill="#231f20"
                                />
                              </g>
                              <g id="Group_96" data-name="Group 96">
                                <path
                                  id="Path_73"
                                  data-name="Path 73"
                                  d="M127.8,379.557a3.85,3.85,0,0,1-1.593-.335.5.5,0,0,1,.411-.912c3.84,1.733,9.707-5.986,9.766-6.064a.5.5,0,0,1,.8.6C136.954,373.153,132.085,379.557,127.8,379.557Z"
                                  fill="#231f20"
                                />
                              </g>
                              <g id="Group_97" data-name="Group 97">
                                <path
                                  id="Path_74"
                                  data-name="Path 74"
                                  d="M161.33,379.557c-4.285,0-9.152-6.4-9.383-6.71a.5.5,0,0,1,.8-.6c.059.078,5.921,7.8,9.765,6.064a.5.5,0,0,1,.411.912A3.847,3.847,0,0,1,161.33,379.557Z"
                                  fill="#231f20"
                                />
                              </g>
                              <g id="Group_98" data-name="Group 98">
                                <rect
                                  id="Rectangle_14"
                                  data-name="Rectangle 14"
                                  width="1"
                                  height="17.748"
                                  transform="translate(143.62 368.504) rotate(-0.738)"
                                  fill="#231f20"
                                />
                              </g>
                              <g id="Group_99" data-name="Group 99">
                                <path
                                  id="Path_75"
                                  data-name="Path 75"
                                  d="M146.781,370.627a.807.807,0,0,1-.808.806h0a.8.8,0,0,1-.8-.806h0a.8.8,0,0,1,.8-.8h0a.806.806,0,0,1,.808.8Z"
                                  fill="#231f20"
                                />
                              </g>
                              <g id="Group_100" data-name="Group 100">
                                <rect
                                  id="Rectangle_15"
                                  data-name="Rectangle 15"
                                  width="34.947"
                                  height="1"
                                  transform="translate(127.091 371.744)"
                                  fill="#231f20"
                                />
                              </g>
                              <g id="Group_101" data-name="Group 101">
                                <path
                                  id="Path_76"
                                  data-name="Path 76"
                                  d="M133.414,372.744a.5.5,0,0,1-.5-.5v-3.121a.5.5,0,0,1,1,0v3.121A.5.5,0,0,1,133.414,372.744Z"
                                  fill="#231f20"
                                />
                              </g>
                              <g id="Group_102" data-name="Group 102">
                                <path
                                  id="Path_77"
                                  data-name="Path 77"
                                  d="M155.039,372.744a.5.5,0,0,1-.5-.5v-3.121a.5.5,0,0,1,1,0v3.121A.5.5,0,0,1,155.039,372.744Z"
                                  fill="#231f20"
                                />
                              </g>
                            </g>
                          </svg>
                        </div>
                        <div class="wrapper__label-container">
                          <h2 class="wrapper-card-title">BOTTOMS</h2>
                          <ul class="wrapper-card-listings">
                            <li>Listings</li>
                            <li>21.308</li>
                          </ul>
                        </div>
                      </a>
                    </li>
                    <li id="footwear-button" class="wrapper__items-listed">
                      <a href="#" class="wrapper__links">
                        <div class="wrapper__svg">
                          <svg
                            fill="#000000"
                            height="64px"
                            width="64px"
                            version="1.1"
                            id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512"
                            xml:space="preserve"
                          >
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g
                              id="SVGRepo_tracerCarrier"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></g>
                            <g id="SVGRepo_iconCarrier">
                              <g>
                                <g>
                                  <path
                                    d="M97.174,195.039c-28.807,0-52.244,23.437-52.244,52.245c0,28.808,23.437,52.245,52.244,52.245 c28.808,0,52.246-23.437,52.246-52.245C149.42,218.476,125.982,195.039,97.174,195.039z M97.174,278.631 c-17.285,0-31.346-14.062-31.346-31.347c0-17.285,14.061-31.347,31.346-31.347c17.286,0,31.348,14.062,31.348,31.347 C128.522,264.569,114.46,278.631,97.174,278.631z"
                                  ></path>
                                </g>
                              </g>
                              <g>
                                <g>
                                  <path
                                    d="M486.633,285.446c-15.381-11.405-35.923-16.252-61.93-22.389c-5.661-1.335-11.516-2.717-17.609-4.237 c-0.001,0-0.003-0.001-0.004-0.001c-35.362-8.827-65.669-19.06-91.131-30.842c1.095-5.039-1.672-10.233-6.655-12.032 c-4.173-1.508-8.671-0.186-11.421,2.97c-7.685-4.187-14.832-8.552-21.456-13.098c1.375-4.471-0.385-9.471-4.569-12.002 c-3.514-2.13-7.78-1.93-11.029,0.141c-6.066-5.13-11.553-10.469-16.463-16.022c2.32-4.102,1.642-9.4-1.952-12.762 c-2.704-2.53-6.392-3.336-9.731-2.485c-4.314-6.566-7.941-13.403-10.883-20.521c2.922-2.695,4.174-6.94,2.845-10.959 c-1.317-3.982-4.798-6.628-8.703-7.089c-1.958-8.093-3.16-16.508-3.602-25.267c-0.281-5.559-4.869-9.922-10.435-9.922H10.449 C4.678,88.929,0,93.608,0,99.378v313.245c0,5.77,4.678,10.449,10.449,10.449h491.102c5.77,0,10.449-4.679,10.449-10.449v-65.482 C512,317.884,503.939,298.279,486.633,285.446z M406.035,280.082c4.774,1.168,9.384,2.257,13.869,3.315 c44.992,10.615,67.476,15.919,70.772,53.295H377.245c0.517-6.263,1.502-12.207,2.96-17.745 C386.566,294.777,400.149,283.83,406.035,280.082z M20.898,109.827h171.376c0.762,6.802,1.96,13.432,3.575,19.896l-9.018,2.981 c-2.561-1.633-5.593-2.592-8.849-2.592c-9.11,0-16.523,7.412-16.523,16.523c0,9.112,7.412,16.524,16.523,16.524 c7.027,0,13.027-4.417,15.411-10.614l8.968-2.964c3.912,9.516,8.856,18.61,14.821,27.268l-5.708,6.101 c-0.366-0.024-0.728-0.056-1.1-0.056c-9.11,0-16.523,7.413-16.523,16.524s7.412,16.523,16.523,16.523s16.523-7.412,16.523-16.523 c0-0.745-0.067-1.472-0.162-2.192l3.575-3.82c5.642,6.237,11.89,12.212,18.744,17.916l-5.889,9.729 c-8.012,1.136-14.2,8.021-14.2,16.341c0,9.112,7.413,16.524,16.523,16.524s16.523-7.413,16.523-16.524 c0-1.937-0.353-3.79-0.969-5.519l4.803-7.935c7.47,5.082,15.53,9.939,24.206,14.578l-4.446,12.314 c-6.417,2.271-11.034,8.381-11.034,15.566c0,9.112,7.412,16.523,16.523,16.523s16.523-7.413,16.523-16.523 c0-3.096-0.871-5.984-2.358-8.464l3.65-10.108c21.006,9.574,45.09,18.148,72.568,25.839c-7.99,8.46-16.557,21.268-21.48,39.965 c-1.903,7.231-3.146,14.956-3.717,23.066l-335.382-0.002V109.827z M491.102,402.174H20.898v-44.584h470.204V402.174z"
                                  ></path>
                                </g>
                              </g>
                              <g>
                                <g>
                                  <path
                                    d="M195.353,368.817h-4.678c-5.77,0-10.449,4.678-10.449,10.449c0,5.77,4.679,10.449,10.449,10.449h4.678 c5.77,0,10.449-4.679,10.449-10.449C205.802,373.495,201.123,368.817,195.353,368.817z"
                                  ></path>
                                </g>
                              </g>
                              <g>
                                <g>
                                  <path
                                    d="M156.872,368.817H55.38c-5.77,0-10.449,4.678-10.449,10.449c0,5.77,4.679,10.449,10.449,10.449h101.492 c5.77,0,10.449-4.679,10.449-10.449C167.321,373.495,162.642,368.817,156.872,368.817z"
                                  ></path>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <div class="wrapper__label-container">
                          <h2 class="wrapper-card-title">FOOTWEAR</h2>
                          <ul class="wrapper-card-listings">
                            <li>Listings</li>
                            <li>7.639</li>
                          </ul>
                        </div>
                      </a>
                    </li>
                    <li id="accesories-button" class="wrapper__items-listed">
                      <a href="#" class="wrapper__links">
                        <div class="wrapper__svg">
                          <svg
                            fill="#000000"
                            height="64"
                            width="64"
                            version="1.1"
                            id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512"
                            xml:space="preserve"
                          >
                            <g transform="translate(0 1)">
                              <g>
                                <path
                                  d="M366.824,192.844c-0.904-10.369-7.574-18.652-16.957-21.801V7.533c0-5.12-3.413-8.533-8.533-8.533H307.2
                             c-5.12,0-8.533,3.413-8.533,8.533v163.509c-9.619,3.228-16.387,11.853-17.014,22.59c-21.299,6.951-41.318,19.7-57.023,36.347
                             c-2.916-3.538-6.795-6.226-11.296-7.737V7.533c0-5.12-3.413-8.533-8.533-8.533h-34.133c-5.12,0-8.533,3.413-8.533,8.533v214.709
                             c-9.62,3.228-16.388,11.854-17.014,22.591C89.433,262.922,51.2,315.108,51.2,374.467C51.2,449.56,112.64,511,187.733,511
                             c44.271,0,83.791-21.359,108.779-54.276c9.251,1.879,18.503,3.076,27.754,3.076c75.093,0,136.533-61.44,136.533-136.533
                             C460.8,263.888,422.541,211.686,366.824,192.844z M265.703,262.019c6.593-6.171,14.224-11.482,22.321-15.373
                             c4.631,5.176,11.414,8.354,19.176,8.354h34.133c7.62,0,14.705-3.458,19.482-9.033c29.531,14.355,48.785,44.713,48.785,77.3
                             c0,46.933-38.4,85.333-85.333,85.333c-1.366,0-2.827-0.003-4.341-0.031c2.832-10.91,4.341-22.338,4.341-34.102
                             C324.267,328.743,301.577,287.277,265.703,262.019z M315.733,16.067H332.8v153.6h-17.067V16.067z M298.667,195.267
                             c0-5.12,3.413-8.533,8.533-8.533h34.133c5.12,0,8.533,3.413,8.533,8.533v4.267v29.013c0,1.707-0.853,2.56-0.853,3.413
                             c-0.278,0.833-0.456,1.663-0.552,2.467c-1.458,2.201-3.966,3.506-7.128,3.506H307.2c-3.2,0-5.734-1.334-7.184-3.584
                             c-0.106-0.561-0.268-1.08-0.496-1.536c-0.505-1.01-0.708-1.718-0.792-2.307c-0.037-0.36-0.061-0.727-0.061-1.107v-29.013V195.267z
                              M280.747,210.627v17.92v0.853c-11.83,5.915-21.984,13.509-31.296,22.772c-5.152-2.657-10.505-5.009-16.039-7.028
                             C246.972,230.851,263.022,219.067,280.747,210.627z M271.429,391.028c-20.151-16.092-32.496-40.849-32.496-66.908
                             c0-5.312,0.663-10.955,1.779-16.517c20.037,16.167,32.354,40.802,32.354,66.864C273.067,380.13,272.495,385.666,271.429,391.028z
                              M170.667,306.2h18.209c-0.756,6.183-1.142,12.242-1.142,17.92c0,44.167,22.609,86.133,59.045,111.778
                             c-15.36,14.773-36.182,23.902-59.045,23.902c-46.933,0-85.333-38.4-85.333-85.333c0-32.67,19.349-63.102,49.008-76.717
                             C156.041,302.982,162.857,306.2,170.667,306.2z M225.28,297.667c-2.56,8.533-3.413,17.067-3.413,25.6
                             c0,33.28,17.067,64.853,44.373,83.627c-2.56,5.973-5.12,10.24-8.533,15.36c-32.427-21.333-52.907-58.88-52.907-98.987
                             c0-5.973,0-11.093,0.853-17.067c5.41,0,9.971-1.7,13.986-4.79c1.71-1.219,3.272-2.643,4.643-4.243
                             c0.093,0.045,0.185,0.093,0.278,0.139C224.8,297.667,225.28,297.667,225.28,297.667z M179.2,16.067h17.067v204.8H179.2V16.067z
                              M162.133,246.467c0-5.12,3.413-8.533,8.533-8.533H204.8c5.12,0,8.533,3.413,8.533,8.533v4.267v29.013
                             c0,1.707-0.853,2.56-0.853,3.413c-0.322,0.965-0.643,1.929-0.827,2.848c-1.488,1.968-3.879,3.125-6.853,3.125h-34.133
                             c-3.2,0-5.734-1.334-7.184-3.584c-0.106-0.561-0.268-1.08-0.496-1.536c-0.505-1.01-0.708-1.718-0.792-2.307
                             c-0.037-0.36-0.061-0.727-0.061-1.106v-29.013V246.467z M187.733,493.933c-65.707,0-119.467-53.76-119.467-119.467
                             c0-49.493,30.72-93.867,76.8-111.787v17.92v0v0.853c-35.84,16.213-59.733,52.907-59.733,93.013c0,56.32,46.08,102.4,102.4,102.4
                             c31.167,0,59.193-14.117,78.014-36.266c0.194-0.154,0.367-0.301,0.492-0.427c1.127-1.378,2.206-2.803,3.26-4.251
                             c12.939-17.147,20.633-38.446,20.633-61.456c0-40.107-23.893-76.8-59.733-93.013V280.6v-17.803
                             c6.024,2.329,11.714,5.204,17.067,8.416c0.562,0.281,1.028,0.463,1.466,0.589c35.593,21.438,58.268,60.154,58.268,102.664
                             c0,13.279-2.198,26.068-6.244,38.026c-0.21,0.385-0.408,0.789-0.583,1.227c-1.207,3.622-2.637,7.239-4.234,10.786
                             C277.118,465.4,235.599,493.933,187.733,493.933z M324.267,442.733c-5.828,0-11.656-0.813-17.484-1.645
                             c2.924-5.19,5.522-10.586,7.759-16.162c3.242,0.731,6.484,0.74,9.725,0.74c56.32,0,102.4-46.08,102.4-102.4
                             c0-40.107-23.893-76.8-59.733-93.013V229.4v-17.92c46.08,17.92,76.8,62.293,76.8,111.787
                             C443.733,388.973,389.973,442.733,324.267,442.733z"
                                />
                              </g>
                            </g>
                          </svg>
                        </div>
                        <div class="wrapper__label-container">
                          <h2 class="wrapper-card-title">Accesories</h2>
                          <ul class="wrapper-card-listings">
                            <li>Listings</li>
                            <li>1.789</li>
                          </ul>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="img__wrapper-right">
                <p>
                  A good quality item is never too expensive. You'll get more
                  for your money.
                </p>
                <button class="main__button">Follow</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="filter__header-nav">
        <ul class="filter__header-nav-items">
          <li class="filter__header-nav-listed-items">
            <button class="filter__button" id="filter-toggle">
              <span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-sliders"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"
                  />
                </svg>
              </span>
              <span class="filter__button-label">All filters</span>
            </button>
          </li>
          <li class="filter__header-nav-listed-items">
            <button
              class="filter__button filter__button-label"
              id="filter-toggle"
            >
              Size
            </button>
          </li>
          <li class="filter__header-nav-listed-items">
            <button
              class="filter__button filter__button-label"
              id="filter-toggle"
            >
              Designer
            </button>
          </li>
          <li class="filter__header-nav-listed-items">
            <button
              class="filter__button filter__button-label"
              id="filter-toggle"
            >
              Price
            </button>
          </li>
          <li class="filter__header-nav-listed-items">
            <button id="sortby-toggle" class="filter__button">
              <span class="filter__button-label">Sort By</span>
              <span>
                <svg
                  class="sortBySvg"
                  width="16"
                  height="16"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.1416 9.92896L12.7776 16.2929C12.3871 16.6834 11.7539 16.6834 11.3634 16.2929L4.99946 9.92895"
                    stroke="#000000"
                    stroke-linecap="round"
                  />
                </svg>
              </span>
            </button>
            <ul aria-hidden="false" class="sortby__ul">
              <li class="sortby__items">
                <span class="sortby__icon"
                  ><svg
                    fill="#000000"
                    width="16"
                    height="16"
                    viewBox="0 0 1920 1920"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g
                      id="SVGRepo_tracerCarrier"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></g>
                    <g id="SVGRepo_iconCarrier">
                      <path
                        d="M1306.181 1110.407c-28.461 20.781-40.32 57.261-29.477 91.03l166.136 511.398-435.05-316.122c-28.686-20.781-67.086-20.781-95.66 0l-435.05 316.122 166.25-511.623c10.842-33.544-1.017-70.024-29.591-90.805L178.577 794.285h537.825c35.351 0 66.523-22.701 77.365-56.245l166.25-511.51 166.136 511.397a81.155 81.155 0 0 0 77.365 56.358h537.939l-435.276 316.122Zm609.77-372.819c-10.956-33.656-42.014-56.244-77.365-56.244h-612.141l-189.064-582.1C1026.426 65.589 995.367 43 960.017 43c-35.351 0-66.523 22.588-77.365 56.245L693.475 681.344H81.335c-35.351 0-66.41 22.588-77.366 56.244-10.842 33.657 1.017 70.137 29.591 90.918l495.247 359.718-189.29 582.211c-10.842 33.657 1.017 70.137 29.704 90.918 14.23 10.39 31.059 15.586 47.661 15.586 16.829 0 33.657-5.195 47.887-15.699l495.248-359.718 495.02 359.718c28.575 20.894 67.088 20.894 95.775.113 28.574-20.781 40.433-57.261 29.59-91.03l-189.289-582.1 495.247-359.717c28.687-20.781 40.546-57.261 29.59-90.918Z"
                        fill-rule="evenodd"
                      ></path>
                    </g></svg></span
                ><span class="sortby__button-label">New</span>
              </li>
              <li class="sortby__items">
                <span class="sortby__icon"
                  ><svg
                    fill="#000000"
                    width="16px"
                    height="16px"
                    viewBox="0 0 32 32"
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    style="rotate: 180deg"
                  >
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g
                      id="SVGRepo_tracerCarrier"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></g>
                    <g id="SVGRepo_iconCarrier">
                      <title>arrow-down-left</title>
                      <path
                        d="M26.432 5.57c-0.136-0.136-0.324-0.22-0.531-0.22s-0.395 0.084-0.531 0.22v0l-18.519 18.519v-12.331c0-0.414-0.336-0.75-0.75-0.75s-0.75 0.336-0.75 0.75v0 14.143c0.001 0.099 0.021 0.193 0.057 0.279l-0.002-0.005 0.001 0.013 0.002 0.002c0.056 0.121 0.139 0.221 0.242 0.295l0.002 0.002c0.022 0.017 0.047 0.034 0.072 0.049l0.003 0.002c0.106 0.068 0.234 0.109 0.371 0.113l0.001 0h14.142c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-12.331l18.52-18.52c0.135-0.136 0.218-0.323 0.218-0.53s-0.083-0.394-0.218-0.53l0 0z"
                      ></path>
                    </g></svg></span
                ><span class="sortby__button-label">Highest price</span>
              </li>
              <li class="sortby__items">
                <span class="sortby__icon"
                  ><svg
                    fill="#000000"
                    width="16px"
                    height="16px"
                    viewBox="0 0 32 32"
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g
                      id="SVGRepo_tracerCarrier"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></g>
                    <g id="SVGRepo_iconCarrier">
                      <title>arrow-down-left</title>
                      <path
                        d="M26.432 5.57c-0.136-0.136-0.324-0.22-0.531-0.22s-0.395 0.084-0.531 0.22v0l-18.519 18.519v-12.331c0-0.414-0.336-0.75-0.75-0.75s-0.75 0.336-0.75 0.75v0 14.143c0.001 0.099 0.021 0.193 0.057 0.279l-0.002-0.005 0.001 0.013 0.002 0.002c0.056 0.121 0.139 0.221 0.242 0.295l0.002 0.002c0.022 0.017 0.047 0.034 0.072 0.049l0.003 0.002c0.106 0.068 0.234 0.109 0.371 0.113l0.001 0h14.142c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-12.331l18.52-18.52c0.135-0.136 0.218-0.323 0.218-0.53s-0.083-0.394-0.218-0.53l0 0z"
                      ></path>
                    </g>
                  </svg>
                </span>
                <span class="sortby__button-label">Lowest price</span>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="container carousel__container">
       <?php 

          include_once('../Registration/config.php');

        $getUsers = $conn->prepare("SELECT * FROM products");

          $getUsers->execute();

          $users = $getUsers->fetchAll();

        ?>

       <div class="card__container-N">
        <?php foreach($users as $user) { ?>
          <a href="purchase.php?id=<?= $user["id"];?>" id="<?= $user["category_id"];?>" class="card">
            <div class="card__img__container">
              <div class="card__img__wrapper">
                <img
                  src="<?= $user['img'] ?>"
                  class="card__img"
                  alt="<?= $user["id"]; ?>"
                  onclick="openModal(this)"
                />
              </div>
            </div>
            <div class="card__description">
              <div class="card__price">3 hour ago <span>·</span> <?= $user['Price'] ?></div>
              <div class="card__label"><?= $user['name'] ?></div>
              <div class="card__details">
                Shipping <br />
                +3 colors <br />
                Denim, Kintted
              </div>
            </div> 
              </a>
          <?php };?>
        </div>
      </div>

      <footer style="margin: 0;">
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
          <a class="loginInBtn" href="../Registration/Login.php">Log in with email</a>
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
          <a class="loginInBtn" href="../Registration/Signup.php">Sign in with email</a>
          <p>Already have an account? <a href="Registration/Login.php">Login</a></p>
        </div>
      </div>
    </div>
    <script src="../js/main.js"></script>
    <script src="../js/store.js"></script>
  </body>
</html>
