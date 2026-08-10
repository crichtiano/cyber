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
    cancell = document.querySelector(".close"),
    black = document.querySelector("dark-btc")

function cancelBurger() {
    menu.style.left = "-100%";
    dark.style.display = "none"
    if (men) {
        men.style.left = "-100%";
        dar.style.display = "none"
    }
    if (black) {
        black.style.display = "none"
    }
    popup.style.left = "-110%";

}

burger.addEventListener("click", function () {
    menu.style.left = "0";
    dark.style.display = "block"
})
if (burge) {
    burge.addEventListener("click", function () {
        men.style.left = "0";
        dar.style.display = "block"
    })
    cance.addEventListener("click", cancelBurger)
    dar.addEventListener("click", cancelBurger)

}

login.addEventListener("click", function () {
    popup.style.left = "50%";
    popup.style.transform = "translate(-50%, -50%)"
    dar.style.display = "block"
})

cancell.addEventListener("click", cancelBurger)

cancel.addEventListener("click", cancelBurger)
dark.addEventListener("click", cancelBurger)


const cont = document.querySelectorAll(".form")
btn = document.querySelectorAll(".btn")

btn.forEach(activbtn => {
    activbtn.onclick = (e) => {
        btn.forEach(b => b.classList.remove("active"))
        e.target.classList.add("active")
        cont.forEach(block => {
            block.classList.remove("active")
            if (block.classList.contains(activbtn.dataset.reg)) {
                if (!block.classList.contains("active")) {
                    block.classList.add("active")
                }
            }
        })
    }
});
const colors = document.querySelectorAll('.inpcol');

const kam = document.querySelector('.kam img');
const ekr = document.querySelector('.ekr img');
const hedpr = document.querySelector('.hedpr img');

colors.forEach(color => {
    color.addEventListener('change', function () {
        if (this.value === 'blue') {
            kam.src = 'img/prodkam.png';
            ekr.src = 'img/prodek.png';
            hedpr.src = 'img/prodhed.png';
        }
        if (this.value === 'orange') {
            kam.src = 'img/orangeiph2.png';
            ekr.src = 'img/orangeipn.png';
            hedpr.src = 'img/orangeiph3.png';
        }
        if (this.value === 'black') {
            kam.src = 'img/blackiph.png';
            ekr.src = 'img/prodek.png';
            hedpr.src = 'img/blackiph2.png';
        }
        if (this.value === 'white') {
            kam.src = 'img/witeiph.png';
            ekr.src = 'img/witeiph2.png';
            hedpr.src = 'img/witeiph3.png';
        }
        if (this.value === 'pink') {
            kam.src = 'img/pinkiph3.png';
            ekr.src = 'img/pinkiph2.png';
            hedpr.src = 'img/pinkiph.png';
        }

    });
});
