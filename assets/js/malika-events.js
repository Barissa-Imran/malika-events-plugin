const eventNav = document.querySelector('.active-event-navigation');
const eventNavBtn = document.getElementById('eventNavCloseBtn');

eventNavBtn.addEventListener('click', function () {
  eventNav.classList.add('collapse');
  sessionStorage.setItem('showNav', 'true');
});

const eventPop = document.querySelector('.active-event-popup_container');
const eventPopBtn = document.getElementById('eventPopBtn');

eventPopBtn.addEventListener('click', function () {
  eventPop.style.display = 'none';
  sessionStorage.setItem('showPop', 'true');
});

const showNav = sessionStorage.getItem('showNav');
const showPop = sessionStorage.getItem('showPop');

if (showNav) {
  eventNav.classList.add('collapse');
}
if (showPop) {
  eventPop.style.display = 'none';
}

window.addEventListener('load', function () {
  setTimeout(function () {
    var activEventPop = document.querySelector('.active-event-popup_container');
    if (showPop) {
      eventPop.style.display = 'none';
    } else {
      activEventPop.style.display = 'block';
    }
  }, 3000);
});
