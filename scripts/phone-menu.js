const phoneMenuIcon = document.querySelector(".phone-menu-icon");
const navLinks = document.querySelector(".nav-links");
const phoneMenuItem = document.querySelector(".phone-menu-item");
const phoneMenuExitIcon = document.querySelector(".phone-menu-exit-icon");

phoneMenuIcon.addEventListener("click", () => {
  navLinks.classList.toggle("active");
  phoneMenuItem.style.display = "flex";
});

phoneMenuExitIcon.addEventListener("click", () => {
  navLinks.classList.remove("active");
  phoneMenuItem.style.display = "none";
});

document.addEventListener("click", (event) => {
  if (
    !navLinks.contains(event.target) &&
    !phoneMenuIcon.contains(event.target)
  ) {
    navLinks.classList.remove("active");
    phoneMenuItem.style.display = "none";
  }
});
