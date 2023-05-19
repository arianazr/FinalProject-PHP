let sortByBtn = document.getElementById("sortby-toggle");
let sortBy = document.querySelector(".sortby__ul");

sortByBtn.addEventListener("click", () => {
  const isOpened = sortBy.getAttribute("aria-hidden");
  if (isOpened === "false") {
    sortBy.setAttribute("aria-hidden", "true");
  } else {
    sortBy.setAttribute("aria-hidden", "false");
  }
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

topsBtn.addEventListener("click", filterCards.bind(this, "tops"));
bottomsBtn.addEventListener("click", filterCards.bind(this, "bottoms"));
footwearBtn.addEventListener("click", filterCards.bind(this, "footwear"));
accesoriesBtn.addEventListener("click", filterCards.bind(this, "accessories"));

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
let cards = document.querySelectorAll(".card");
let modalClose = document.querySelector(".modal__toggle");

function clothesModalToggle() {
  const isOpened = clothesModal.getAttribute("aria-expanded");
  if (isOpened == "false") {
    clothesModal.setAttribute("aria-expanded", "true");
  } else {
    clothesModal.setAttribute("aria-expanded", "false");
  }
}

cards.forEach((card) => {
  card.addEventListener("click", clothesModalToggle);
});
cards.forEach((card) => {
  card.addEventListener("click", () => {
    const isOpened = filter.getAttribute("aria-expanded");
    if (isOpened === "true") {
      filter.setAttribute("aria-expanded", "false");
    }
  });
});
modalClose.addEventListener("click", clothesModalToggle);
