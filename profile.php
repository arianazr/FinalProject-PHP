<?php
include_once("Registration/config.php");

if(empty($_SESSION['email'])) {
  header("Location: index.php");
};

$id = $_GET["id"];
$sql = "SELECT * FROM users WHERE id=:id";
$selectUsers = $conn->prepare($sql);
$selectUsers->bindParam(':id', $id);
$selectUsers->execute();

$user_data = $selectUsers->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
      src="https://kit.fontawesome.com/73603c0753.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css">
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
    <title>Profile | ThriftOnline</title>
</head>
<body>
    <nav>
      <div class="nav__background"></div>
          <a id="nav-toggle-btn" href="http://localhost/ArianPHP/Final%20Project%20PHP/Final-Project-DS/" class="profileBtn">
          <svg width="33px" height="33px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15 16C15 15.2044 14.6839 14.4413 14.1213 13.8787C13.5587 13.3161 12.7957 13 12 13C11.2044 13 10.4413 13.3161 9.87868 13.8787C9.31607 14.4413 9 15.2043 9 16V20H4L4 10L8 6.5M12 3L20 10L20 20H15" stroke="#000000" stroke-width="0.36" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
          <text class="hoverPOPUP">Home</text> 
        </a>
    </nav>
<main style="position:relative;">
<div class="profile">
    <div class="profile__container">
    <div class="profile__title">
        <h1>ThriftOnline</h1>
        <h3>Profile</h3>
          <div class="username"><span><?php echo $_SESSION["username"]?></span><svg width="33px" height="33px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.5 8.5C14.5 9.88071 13.3807 11 12 11C10.6193 11 9.5 9.88071 9.5 8.5C9.5 7.11929 10.6193 6 12 6C13.3807 6 14.5 7.11929 14.5 8.5Z" fill="#000000"></path> <path d="M15.5812 16H8.50626C8.09309 16 7.87415 15.5411 8.15916 15.242C9.00598 14.3533 10.5593 13 12.1667 13C13.7899 13 15.2046 14.3801 15.947 15.2681C16.2011 15.5721 15.9774 16 15.5812 16Z" fill="#000000" stroke="#000000" stroke-width="0.336" stroke-linecap="round" stroke-linejoin="round"></path> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.336"></circle> </g></svg></div>
      <a class="signout" href="signout.php" title="Sign out"><svg width="33px" height="33px" fill="#000000" viewBox="0 0 24 24" id="sign-out-left-2" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><polyline id="primary" points="6 15 3 12 6 9" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width:0.552;"></polyline><line id="primary-2" data-name="primary" x1="3" y1="12" x2="17" y2="12" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width:0.552;"></line><path id="primary-3" data-name="primary" d="M10,8V5a1,1,0,0,1,1-1h9a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H11a1,1,0,0,1-1-1V16" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width:0.552;"></path></g></svg> </a>  
      </div>
    <div class="profile__wrapper">
        <div class="profile__left">
            <ul class="profile__nav">
                <li class="main__button profile__listed prfactive"><a href="#">Profile</a></li>
                <li class="main__button profile__listed"><a href="store/sell.php?id=<?= $_SESSION["id"] ?>">Sell Product</a></li>
                <li class="main__button profile__listed"><a href="#">Payments</a></li>
                <li class="main__button profile__listed"><a href="#">Purchases</a></li>
                <li class="main__button profile__listed"><a href="#">Payments</a></li>
                <li class="main__button profile__listed"><a href="#">Devices</a></li>
            </ul>
        </div>
        <div class="profile__right">
            <form action="Registration/update.php" method="post" class="form-profile">
            <div class="profile__wrapper-update">
              <input type="text" class="profile__input" name="name" id="name" value="<?php echo $user_data["name"]?>">
              <input type="text" class="profile__input" name="username" id="username" value="<?php echo $user_data["username"]?>">
              <input type="text" class="profile__input" name="email" id="email" value="<?php echo $user_data["email"]?>">
              <input type="text" class="profile__input" name="phone" id="phone" value="<?php echo $user_data["phone"]?>">
              <input type="text" class="profile__input" name="address" id="address" value="<?php echo $user_data["address"]?>">
  </div>
              <button class="updateBtn" name="update">Update</button>
            </form>
          </div>
        </div>
        </div>
    </div>
</div>
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

    <script src="js/main.js"></script>
</body>
</html>