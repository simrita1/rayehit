var saleInp = document.querySelector("#sale");
var rentInp = document.querySelector("#rent");

var saleTab = document.querySelector("#tabsale");
var rentTab = document.querySelector("#tabrent");

rentTab.addEventListener("click", () => {
  rentInp.checked = true;
  saleTab.classList.remove("active");
  rentTab.classList.add("active");
});
saleTab.addEventListener("click", () => {
  saleInp.checked = true;
  saleTab.classList.add("active");
  rentTab.classList.remove("active");
});
