const slidePage = document.querySelector(".slide");
const firstProximobtn = document.querySelector(".proximobtn");
const anteriorBtn2 = document.querySelector(".volt-1");
const proximoBtn2 = document.querySelector(".prox-1");
const anteriorBtn3 = document.querySelector(".volt-2");
const proximoBtn3 = document.querySelector(".prox-2");
const anteriorBtn4 = document.querySelector(".volt-3");
const submitBtn = document.querySelector(".submit");
const progressoTexto = document.querySelector(".passo p");
const progressoCheck = document.querySelector(".passo .check");
const bullet = document.querySelector(".passo .bullet");

/*botão próximo*/
firstProximobtn.addEventListener("click", function () {
  slidePage.style.marginLeft = "-25%";
});

proximoBtn2.addEventListener("click", function () {
  slidePage.style.marginLeft = "-50%";
});
proximoBtn3.addEventListener("click", function () {
  slidePage.style.marginLeft = "-75%";
});
/*botão Voltar*/
anteriorBtn2.addEventListener("click", function () {
  slidePage.style.marginLeft = "-0%";
});

anteriorBtn3.addEventListener("click", function () {
  slidePage.style.marginLeft = "-25%";
});
anteriorBtn4.addEventListener("click", function () {
  slidePage.style.marginLeft = "-50%";
});
