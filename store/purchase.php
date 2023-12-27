<?php 
include_once("../Registration/config.php");

$id = $_GET["id"];
$sql = "SELECT * FROM products WHERE id=:id";
$selectUsers = $conn->prepare($sql);
$selectUsers->bindParam(':id', $id);
$selectUsers->execute();

$user_data = $selectUsers->fetch();
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
<body>
<div class="modal__container" aria-expanded="false">
      <div style="position: relative" class="modal__wrapper">
        <div style="position: fixed; inset: 0" class="button__wrapper">
          <a href="store.php" class="modal__toggle">
            <svg
              fill="#222"
              width="20px"
              height="20px"
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
                <path
                  d="M23.505 0c0.271 0 0.549 0.107 0.757 0.316 0.417 0.417 0.417 1.098 0 1.515l-14.258 14.264 14.050 14.050c0.417 0.417 0.417 1.098 0 1.515s-1.098 0.417-1.515 0l-14.807-14.807c-0.417-0.417-0.417-1.098 0-1.515l15.015-15.022c0.208-0.208 0.486-0.316 0.757-0.316z"
                ></path>
              </g>
            </svg>
            <hr class="modal__button-hr" />
            <div class="logo__wrapper">
              <h2>ThriftOnline</h2>
            </div>
            </a>
        </div>
        <div class="modal__content">
          <div class="modal__img__container">
            <svg
              fill="#222"
              width="24px"
              height="24px"
              viewBox="0 0 32 32"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              id="arrow-left"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <path
                  d="M23.505 0c0.271 0 0.549 0.107 0.757 0.316 0.417 0.417 0.417 1.098 0 1.515l-14.258 14.264 14.050 14.050c0.417 0.417 0.417 1.098 0 1.515s-1.098 0.417-1.515 0l-14.807-14.807c-0.417-0.417-0.417-1.098 0-1.515l15.015-15.022c0.208-0.208 0.486-0.316 0.757-0.316z"
                ></path>
              </g>
            </svg>
            <svg
              fill="#222"
              width="24px"
              height="24px"
              viewBox="0 0 32 32"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              id="arrow-right"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <path
                  d="M23.505 0c0.271 0 0.549 0.107 0.757 0.316 0.417 0.417 0.417 1.098 0 1.515l-14.258 14.264 14.050 14.050c0.417 0.417 0.417 1.098 0 1.515s-1.098 0.417-1.515 0l-14.807-14.807c-0.417-0.417-0.417-1.098 0-1.515l15.015-15.022c0.208-0.208 0.486-0.316 0.757-0.316z"
                ></path>
              </g>
            </svg>
            <img class="modal__img-header" src="<?php echo $user_data["img"]?>" />
          </div>
          <div class="modal__right">
            <div>
              <h2 class="modal__title"><?php echo $user_data["name"]?></h2>
              <ul class="modal__condition">
                <li class="modal__condition-listed">
                  Russell Vintage Men In Black 3 Promo Tee
                </li>
                <li class="modal__condition-listed">
                  Size
                  <span class="lightend__text"
                    ><?php echo $user_data["size"]?></span
                  >
                </li>
                <li class="modal__condition-listed">
                  Color <span class="lightend__text"><?php echo $user_data["color"]?></span>
                </li>
                <li class="modal__condition-listed">
                  Condition <span class="lightend__text"><?php echo $user_data["kondition"]?></span>
                </li>
              </ul>
            </div>
            <div class="modal__payment">
              <div class="modal__payment__container">
                <div class="color__palet">
                  <label class="visually-hidden" for="theme">Blue</label>
                  <input type="radio" name="theme" id="blue" checked />
                  <label class="visually-hidden" for="theme">Red</label>
                  <input type="radio" name="theme" id="red" />
                  <label class="visually-hidden" for="theme">Green</label>
                  <input type="radio" name="theme" id="green" />
                  <label class="visually-hidden" for="theme">Grey</label>
                  <input type="radio" name="theme" id="grey" />
                  <label class="visually-hidden" for="theme">Dark blue</label>
                  <input type="radio" name="theme" id="darkBlue" />
                </div>
                <div class="modal__payment__find-store">
                  <h2 class="final__payments-text">FIND STORE</h2>
                  <a class="final__payments-text" href="confirmBuy.php?id=<?php echo $user_data["id"]?>">PURCHASE</a>
                </div>
                <div class="seller__container">
                  Write a message to
                  <span class="seller__hover">the seller</span>
                </div>
                <div class="garante__container">
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>