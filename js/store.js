let sortByBtn = document.getElementById("sortby-toggle");
let sortBy = document.querySelector(".sortby__ul");
let sortBySvg = document.querySelector(".sortBySvg");

sortByBtn.addEventListener("click", () => {
  const isOpened = sortBy.getAttribute("aria-hidden");
  if (isOpened === "false") {
    sortBy.setAttribute("aria-hidden", "true");
  } else {
    sortBy.setAttribute("aria-hidden", "false");
  }
});

sortByBtn.addEventListener("click", () => {
  sortBySvg.classList.toggle("rotated");
});
//FILTER EXPAND

var filterBtns = document.querySelectorAll("#filter-toggle");
var filter = document.getElementById("filter-wrp");

filterBtns.forEach((filterBtn) => {
  filterBtn.addEventListener("click", () => {
    const isOpened = filter.getAttribute("aria-expanded");
    if (isOpened === "false") {
      filter.setAttribute("aria-expanded", "true");
    } else {
      filter.setAttribute("aria-expanded", "false");
    }
  });
});

let storeLogo = document.querySelector(".store-logo");
let headerTitle = document.querySelector(".header__title");
let headerTitleSmll = document.getElementById("header-title-smll");
let topsBtn = document.getElementById("tops-button");
let bottomsBtn = document.getElementById("bottoms-button");
let footwearBtn = document.getElementById("footwear-button");
let allClothesBtn = document.getElementById("allClothes-button");
let accesoriesBtn = document.getElementById("accesories-button");
let garanteHeader = document.getElementById("garanteHeader");
let headerallClothesWrapper = document.querySelector(
  ".header-allClothes__wrapper"
);

topsBtn.addEventListener("click", () => {
  headerTitle.style.display = "block";
  headerTitle.textContent = "TOPS";
  headerTitleSmll.textContent = "Tops";
  storeLogo.style.display = "none";
  garanteHeader.style.display = "block";
  headerallClothesWrapper.style.display = "inline-flex";
});

bottomsBtn.addEventListener("click", () => {
  headerTitle.style.display = "block";
  headerTitle.textContent = "BOTTOMS";
  headerTitleSmll.textContent = "Bottoms";
  storeLogo.style.display = "none";
  garanteHeader.style.display = "block";
  headerallClothesWrapper.style.display = "inline-flex";
});

footwearBtn.addEventListener("click", () => {
  headerTitle.style.display = "block";
  headerTitle.textContent = "FOOTWEAR";
  headerTitleSmll.textContent = "Footwear";
  storeLogo.style.display = "none";
  garanteHeader.style.display = "block";
  headerallClothesWrapper.style.display = "inline-flex";
});

accesoriesBtn.addEventListener("click", () => {
  headerTitle.style.display = "block";
  headerTitle.textContent = "ACCESORIES";
  headerTitleSmll.textContent = "Accesories";
  storeLogo.style.display = "none";
  garanteHeader.style.display = "block";
  headerallClothesWrapper.style.display = "inline-flex";
});

topsBtn.addEventListener("click", filterCards.bind(this, "1"));
bottomsBtn.addEventListener("click", filterCards.bind(this, "2"));
footwearBtn.addEventListener("click", filterCards.bind(this, "3"));
accesoriesBtn.addEventListener("click", filterCards.bind(this, "4"));

// filter the cards based on their category
function filterCards(category) {
  // get all the cards
  let cards = document.getElementsByClassName("card");

  // loop through all the cards and hide/show them based on their category
  for (let i = 0; i < cards.length; i++) {
    if (cards[i].getAttribute("id") === category) {
      cards[i].style.display = "block";
    } else {
      cards[i].style.display = "none";
    }
  }
  allClothesBtn.addEventListener("click", () => {
    // get all the cards
    let cards = document.getElementsByClassName("card");

    // loop through all the cards and show them
    for (let i = 0; i < cards.length; i++) {
      cards[i].style.display = "block";
    }
  });
}
allClothesBtn.addEventListener("click", () => {
  storeLogo.style.display = "block";
  garanteHeader.style.display = "none";
  headerTitle.textContent = "";
  headerTitleSmll.textContent = "";
  headerallClothesWrapper.style.display = "none";
});
// modal

let clothesModal = document.querySelector(".modal__container");
let cards1 = document.querySelectorAll(".card");
let modalClose = document.querySelector(".modal__toggle");

function clothesModalToggle() {
  const isOpened = clothesModal.getAttribute("aria-expanded");
  if (isOpened == "false") {
    clothesModal.setAttribute("aria-expanded", "true");
  } else {
    clothesModal.setAttribute("aria-expanded", "false");
  }
}

cards1.forEach((card) => {
  card.addEventListener("click", clothesModalToggle);
});
cards1.forEach((card) => {
  card.addEventListener("click", () => {
    const isOpened = filter.getAttribute("aria-expanded");
    if (isOpened === "true") {
      filter.setAttribute("aria-expanded", "false");
    }
  });
});
modalClose.addEventListener("click", clothesModalToggle);

function openModal(img) {
  let modalImg = document.querySelector(".modal__img-header");

  // Get the src attribute of the clicked image
  let currentImg = img.src;
  // Update the modal image source
  modalImg.src = currentImg;
}
