const nav = document.querySelector(".nav");
const subMenus = document.querySelectorAll('.sub-menu');
const menus = document.querySelectorAll('.menu');
searchIcon = document.querySelector("#searchIcon"),
navOpenBtn = document.querySelector(".navOpenBtn"),
navCloseBtn = document.querySelector(".navCloseBtn");

let boundary = {
  top : 0,
  bottom : 0,
  left : 0,
  right : 0
}
let subMenu = null;

searchIcon.addEventListener("click", () => {
  nav.classList.toggle("openSearch");
  nav.classList.remove("openNav");
  if (nav.classList.contains("openSearch")) {
    return searchIcon.classList.replace("uil-search", "uil-times");
  }
  searchIcon.classList.replace("uil-times", "uil-search");
});

navOpenBtn.addEventListener("click", () => {
  nav.classList.add("openNav");
  nav.classList.remove("openSearch");
  searchIcon.classList.replace("uil-times", "uil-search");
});
navCloseBtn.addEventListener("click", () => {
  nav.classList.remove("openNav");
});

menus.forEach((menu) => {
  menu.addEventListener('mouseenter', (e) => {  
    
      let menuXY = menu.getBoundingClientRect();
      subMenu = menu.querySelector('.sub-menu');
      subMenu.classList.add('show');
            
      let subMenuXY = subMenu.getBoundingClientRect();


      console.log(menuXY.top, subMenuXY.bottom, subMenuXY.left, subMenuXY.right)
      boundary.top = menuXY.top - 30;
      boundary.bottom = subMenuXY.bottom + 50;
      boundary.left = subMenuXY.left - 50;
      boundary.right = subMenuXY.right + 50;
            
      console.log(boundary.top, boundary.bottom, boundary.left, boundary.right)
            
  
  })
})

document.addEventListener('mousemove', (e) => {
  if (subMenu == null) return;
  console.log(e.clientX, e.clientY)
  
  let flag = false;
  if (e.clientY < boundary.top) {
    flag = true;
  }
  if (e.clientY > boundary.bottom) {
    flag = true;
  }
  if (e.clientX < boundary.left) {
    flag = true;
  }
  if (e.clientX > boundary.right) {
    flag = true;
  }

  if (flag == true) {
    subMenu.classList.remove('show')
  }

})

function clearAllSubMemus() {
  subMenus.forEach((subMenu) => {
    subMenu.classList.remove('show')
  })
}

// card slider
let swiper = new Swiper(".slide-container", {
  // slidesPerView: 3,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
    observer: true,
    observeParents: true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1000: {
      slidesPerView: 3,
    },
  },
});

// POPUP EVENT
document.addEventListener("DOMContentLoaded", function() {
  let popupMessage = document.querySelector(".popup-message");
  setTimeout(() => {
    popupMessage.classList.add("hidden");
  }, 5500);
  
});

document.addEventListener("scroll", function() {
  var introMessage = document.querySelector(".intro-message");
  var introMessageOffset = introMessage.getBoundingClientRect().top;
  var screenPosition = window.innerHeight / 1.2;

  if (introMessageOffset < screenPosition) {
    introMessage.classList.add("fade-in");
  }
});

document.addEventListener("scroll", function() {
  var statisticElements = document.querySelectorAll(".statistic .item");
  var screenPosition = window.innerHeight;

  statisticElements.forEach(function(element) {
    var elementOffset = element.getBoundingClientRect().top;
    if (elementOffset < screenPosition && !element.classList.contains("blink")) {
      setTimeout(function() {
        element.classList.add("blink");
      }, 500); // Wait for 0.5 seconds before adding the blink class
    }
  });
});
