const dark = document.querySelector(".dark-bgc"),
    burger = document.querySelector(".burger"),
    menu = document.querySelector(".menu"),
    cancel = document.querySelector(".cancel"),
    dar = document.querySelector(".dark-bgc"),
    burge = document.querySelector(".filmen"),
    men = document.querySelector(".vibor"),
    cance = document.querySelector(".cance")

burger.addEventListener("click", function () {
    menu.style.left = "0";
    dark.style.display = "block"
})
burge.addEventListener("click", function () {
    men.style.left = "0";
    dar.style.display = "block"
})

function cancelBurger() {
    menu.style.left = "-100%";
    dark.style.display = "none"
    men.style.left = "-100%";
    dar.style.display = "none"
}
cancel.addEventListener("click", cancelBurger)
dark.addEventListener("click", cancelBurger)

cance.addEventListener("click", cancelBurger)
dar.addEventListener("click", cancelBurger)