//  NAV TOGGLE
let navigation = document.querySelector(".nav__wrapper");
let navToggles = document.querySelectorAll("#nav-toggle-btn");

navToggles.forEach((navToggle) => {
  navToggle.addEventListener("click", () => {
    const isOpened = navigation.getAttribute("aria-expanded");

    if (isOpened == "false") {
      navigation.setAttribute("aria-expanded", "true");
    } else {
      navigation.setAttribute("aria-expanded", "false");
    }
  });
});

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
  const middleX = window.innerWidth / 10;
  let offsetX;
  if (window.innerWidth < 530) {
    offsetX = ((x - middleX) / 1.8) * -1;
  } else {
    offsetX = ((x - middleX) / 2.386) * -1;
  }
  nav.style.transform = `translateX(${offsetX}px)`;
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


// footer IntersectionObserver

let footers = document.querySelectorAll("footer");
let footerOptions = {
  threshold: 0.85,
};

function moveNavToggleBtns(distance) {
  let navToggleBtns = document.querySelectorAll("#nav-toggle-btn");
  navToggleBtns.forEach((btn) => {
    btn.style.transform = `translateX(-50%) translateY(${distance})`;
  });
}

let footerObserver = new IntersectionObserver(function (
  entries,
  footerObserver
) {
  entries.forEach((entry) => {
    const isOpened = navigation.getAttribute("aria-expanded");
    if (isOpened == "false") {
      if (entry.isIntersecting) {
        moveNavToggleBtns("150%");
      } else {
        moveNavToggleBtns("0%");
      }
    }
  });
},
footerOptions);

footers.forEach((footer) => {
  footerObserver.observe(footer);
});
