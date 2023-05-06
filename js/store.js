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
