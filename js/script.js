const dark = document.querySelector(".dark-bgc"),
    burger = document.querySelector(".burger"),
    menu = document.querySelector(".menu"),
    cancel = document.querySelector(".cancel"),
    dar = document.querySelector(".dark-bgc"),
    burge = document.querySelector(".filmen"),
    men = document.querySelector(".vibor"),
    cance = document.querySelector(".cance"),
    popup = document.querySelector(".popup"),
    login = document.querySelector(".open"),
    close = document.querySelector("close"),
    black = document.querySelector("dark-btc")


burger.addEventListener("click", function () {
    menu.style.left = "0";
    dark.style.display = "block"
})
burge.addEventListener("click", function () {
    men.style.left = "0";
    dar.style.display = "block"
})
login.addEventListener("click", function () {
    popup.style.left = "0";
    dar.style.display = "block"
})
function cancelBurger() {
    menu.style.left = "-100%";
    dark.style.display = "none"
    men.style.left = "-100%";
    dar.style.display = "none"
    popup.style.left = "-100%";
    black.style.display = "none" 
}
cancel.addEventListener("click", cancelBurger)
dark.addEventListener("click", cancelBurger)

cance.addEventListener("click", cancelBurger)
dar.addEventListener("click", cancelBurger)

const cont = document.querySelectorAll(".form")
    btn = document.querySelectorAll(".btn")

    btn.forEach(btn => {
        btn.onclick = () => {
            cont.forEach(block =>{
                cont.classlist.remove("active")
                if(block.classList.contains(btn.dataset.reg)) {
                    if(!block.classList.contains("active")){
                        block.classList.add("active")
                    }
                }
            })
        }
    });