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

let storeLogo = document.querySelector(".store-logo");
let headerTitle = document.querySelector(".header__title");
let clothesFilters = document.querySelector(".wrapper__items");
let clothesFiltersChildren = clothesFilters.children;

clothesFiltersChildren[0].addEventListener("click", () => {
  headerTitle.style.display = "block";
  headerTitle.textContent = "TOPS";
  storeLogo.style.display = "none";
});

clothesFiltersChildren[1].addEventListener("click", () => {
  headerTitle.style.display = "block";
  headerTitle.textContent = "BOTTOMS";
  storeLogo.style.display = "none";
});

clothesFiltersChildren[2].addEventListener("click", () => {
  headerTitle.style.display = "block";
  headerTitle.textContent = "FOOTWEAR";
  storeLogo.style.display = "none";
});

clothesFiltersChildren[3].addEventListener("click", () => {
  headerTitle.style.display = "block";
  headerTitle.textContent = "ACCESORIES";
  storeLogo.style.display = "none";
});
