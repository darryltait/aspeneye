const fader1 = document.querySelectorAll(".fade-in1");
const fader2 = document.querySelectorAll(".fade-in2");
const fader3 = document.querySelectorAll(".fade-in3");
const fader4 = document.querySelectorAll(".fade-in4");
const fader5 = document.querySelectorAll(".fade-in5");

const appearOptions = {
  threshold: 0,
};

const appearOnLoad = new IntersectionObserver(function (entries, appearOnLoad) {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.classList.add("appear");

      appearOnLoad.unobserve(entry.target);
    }
  });
}, appearOptions);

fader1.forEach((fader) => {
  appearOnLoad.observe(fader);
});
fader2.forEach((fader) => {
  appearOnLoad.observe(fader);
});
fader3.forEach((fader) => {
  appearOnLoad.observe(fader);
});
fader4.forEach((fader) => {
  appearOnLoad.observe(fader);
});
fader5.forEach((fader) => {
  appearOnLoad.observe(fader);
});
