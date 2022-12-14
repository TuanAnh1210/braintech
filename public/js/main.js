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
