const header_bar = document.querySelector(".header_bar");
const header__nav = document.querySelector(".header__nav");
const close_icon = document.querySelector(".close_icon");

header_bar.onclick = () => {
  Object.assign(header__nav.style, {
    transform: "translateX(0%)",
  });
};

close_icon.onclick = () => {
  Object.assign(header__nav.style, {
    transform: "translateX(-110%)",
  });
};

// handle active header__item
const items = document.querySelectorAll(".header__item");
const pathPage = window.location.pathname;

const arrPath = pathPage.split("/");

items.forEach((item) => {
  if (item.getAttribute("data-item") == arrPath[arrPath.length - 1]) {
    item.classList.add("active");
  } else if (
    item.getAttribute("data-item") == "courses" &&
    arrPath[arrPath.length - 1] == "detailCourse"
  ) {
    item.classList.add("active");
  }
});
