// PASSWORD TOGGLE

function passwordToggle() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

// NAV SCROLL

var nav = document.getElementById("transform");

nav.addEventListener("mousemove", (e) => {
  navTransform(e.clientX, nav);
});

nav.addEventListener("touchmove", (e) => {
  e.preventDefault();
  navTransform(e.touches[0].clientX, nav);
});

nav.addEventListener("mouseleave", () => {
  nav.style.transform = "translateX(0px)";
});

function navTransform(x, nav) {
  // find the left edge

  const middleX = window.innerWidth / 10;

  // get offset from the left edge

  let offsetX;
  if (window.innerWidth < 530) {
    offsetX = ((x - middleX) / 1.8) * -1;
  } else {
    offsetX = ((x - middleX) / 2.386) * -1;
  }
  nav.style.transform = `translateX(${offsetX}px)`;
  console.log(x);
}

// FILTER HEIGHT

const content = document.querySelector(".size__filter");
const toggleBtns = document.querySelectorAll("#button-height-toggle");

toggleBtns.forEach((toggleBtn) => {
  const content = toggleBtn.nextElementSibling;

  toggleBtn.addEventListener("click", () => {
    if (content.style.height === "0px") {
      content.style.height = content.scrollHeight + "px";
    } else {
      content.style.height = "0px";
    }
  });
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
var number1 = 1;
var number2 = 15;
console.log(number1 + number2);
