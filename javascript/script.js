const paragraph = document.getElementById('paragraph');
const buttons = document.querySelectorAll('button');

let button1Clicked = false;

buttons.forEach(button => {
  button.addEventListener('click', () => {
    if (paragraph.style.opacity === '1') {
      paragraph.style.opacity = 0;
    } else {
      paragraph.style.opacity = 1;
    }
  });
});