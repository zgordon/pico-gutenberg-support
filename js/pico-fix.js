const picoDiv = document.querySelector(`#pico`);
if (picoDiv) {
  picoDiv.parentElement.innerHTML = picoDiv.innerHTML;
  picoDiv.parentElement.id = "pico";
}
