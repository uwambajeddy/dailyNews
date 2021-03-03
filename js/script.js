"use strict";
let day = document.querySelectorAll(".day");
let data = document.querySelector("main");
day[0].classList.add("day-night");
day[1].classList.add("day-night");

console.log(day);

let toggle = function (a) {
  day[a].classList.toggle("day-night");
  day[a].classList.toggle("day-morning");
  data.classList.toggle("background1");
  data.classList.toggle("background2");
};

for (let a = 0; a < day.length; a++) {
  day[a].addEventListener("click", function () {
    toggle(a);
  });
}

/*********menu button */
let modals = document.querySelector(".show-modal");
let overlay = document.querySelector(".overlay");
let modal = document.querySelector(".modal");
let closeModal = document.querySelector(".close-modal");

let close = function () {
  modal.classList.add("hidden");
  overlay.classList.add("hidden");
};
let open = function () {
  modal.classList.remove("hidden");
  overlay.classList.remove("hidden");
};
modals.addEventListener("click", open);

closeModal.addEventListener("click", close);

overlay.addEventListener("click", close);

/****check media query****/

const mediaQuery = window.matchMedia("(min-width: 925px)");
const newMediaQuery = window.matchMedia("(max-width: 925px)");

function handleTabletChange(e) {
  // Check if the media query is true
  console.log(mediaQuery);
  if (e.matches) {
    // Then log the following message to the console
    close();
  }
}

// Register event listener
mediaQuery.addListener(handleTabletChange);

// Initial check
handleTabletChange(mediaQuery);

/*************XXXXXXX********* */

/*********update button */

function update(id) {
  let overlay1 = document.querySelector(".overlay-1");
  let updateCreate = document.querySelector(`.updateCreate${id}`);
  let closebutton = document.querySelector(".close-button");

  let closeB = function () {
    updateCreate.classList.add("hidden");
    overlay1.classList.add("hidden");
  };
  let openB = function () {
    updateCreate.classList.remove("hidden");
    overlay1.classList.remove("hidden");
  };
  openB();

  closebutton.addEventListener("click", closeB);

  overlay1.addEventListener("click", closeB);
}

/*********create button */

function create() {
  let overlay1 = document.querySelector(".overlay-1");
  let createUpdate = document.querySelector(".createUpdate");
  let closebutton1 = document.querySelector(".close-button1");

  let closeC = function () {
    createUpdate.classList.add("hidden");
    overlay1.classList.add("hidden");
  };

  let openC = function () {
    createUpdate.classList.remove("hidden");
    overlay1.classList.remove("hidden");
  };
  openC();

  closebutton1.addEventListener("click", closeC);
  overlay1.addEventListener("click", closeC);
}

/***************check for php unpublished content from search */

let falseValues = document.querySelectorAll(".false");
let truthValues = document.querySelectorAll(".true");

if (falseValues.length > 0) {
  for (let a = 0; a < falseValues.length; a++) {
    falseValues[a].classList.remove("flex-content");
  }
}
if (truthValues.length == 0 ?? falseValues.length == 0) {
  document.querySelector(".searcher").classList.remove("hidden");
}
