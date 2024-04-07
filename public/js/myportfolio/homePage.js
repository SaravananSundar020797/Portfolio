/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************************!*\
  !*** ./resources/js/myportfolio/homePage.js ***!
  \**********************************************/
var navLinks = document.querySelectorAll(".nav-link");
var sections = document.querySelectorAll("section");
window.onscroll = function () {
  sections.forEach(function (sec) {
    var top = window.scrollY;
    var offset = sec.offsetTop - 300;
    var height = sec.offsetHeight;
    var id = sec.getAttribute('id');
    console.log("offSet ", sec.offsetTop);
    if (top >= offset && top < offset + height) {
      navLinks.forEach(function (navList) {
        navList.classList.remove("active");
        document.querySelector('.nav-link[href*=' + id + ']').classList.add("active");
      });
    }
  });
};
navLinks.forEach(function (navList) {
  navList.addEventListener("click", function (event) {
    var _document$querySelect;
    (_document$querySelect = document.querySelector(".active")) === null || _document$querySelect === void 0 || _document$querySelect.classList.remove("active");
    navList.classList.add("active");
  });
});
/******/ })()
;