const btnTest = document.querySelector("#btn-tes");
const instruction = document.querySelector("#instruction");
const overlay = document.querySelector("#overlay");
const body = document.body;

btnTest.addEventListener("click", function (event) {
    event.stopPropagation();
    instruction.classList.remove("hidden");
    instruction.classList.add("flex");
    overlay.classList.remove("hidden");
    body.classList.add("overflow-hidden");
});

window.addEventListener("click", function (event) {
    if (!instruction.contains(event.target) && event.target !== btnTest) {
        instruction.classList.remove("flex");
        instruction.classList.add("hidden");
        overlay.classList.add("hidden");
        body.classList.remove("overflow-hidden");
    }
});
