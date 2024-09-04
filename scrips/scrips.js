let tang = document.getElementById("tang");
let amountElement = document.getElementById("amount");
let amount = amountElement.value;
let render = (amount) => {
  amountElement.value = amount;
};

let handleminPlus = () => {
  if (amount > 1) amount--;
  render(amount);
};
let handlePlus = () => {
  amount++;
  render(amount);
};
amountElement.addEventListener("input", () => {
  amount = amountElement.value;
  amount = parseInt(amount);
  amount = isNaN(amount) || amount == 0 ? 1 : amount;
  render(amount);
});
// Initialization for ES Users
import { Tab, initTWE } from "tw-elements";

initTWE({ Tab });
