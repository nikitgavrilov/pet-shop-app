const minusBtn = document.querySelector(".cart__minus");
const plusBtn = document.querySelector(".cart__plus");
const number = document.querySelector(".cart__number");

minusBtn.addEventListener("click", () => {
  const currentValue = parseInt(number.innerHTML);
  if (currentValue > 1) {
    number.innerHTML = currentValue - 1;
  }
});

plusBtn.addEventListener("click", () => {
  number.innerHTML = parseInt(number.innerHTML) + 1;
});
