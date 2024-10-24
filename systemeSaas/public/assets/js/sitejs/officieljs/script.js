//menu fixe après un déroulement
window.onscroll = function() {
    var header = document.querySelector(".header-haut .contenue");
    if (window.scrollY > 300) {
      header.classList.add("fixed");
    } else {
      header.classList.remove("fixed");
    }
};
  


var listItem = [
    {
        img: "../storage/app/public/images/shoe1.jpg",
        tittre: "CXhiguikv fghjk",
        contenue: "ertgfctyhyujhgyujb fghj,nd sghjs,dn sdhdshbsdijqn qshqkqghj",
    },
    {
        img: "../storage/app/public/images/shoe1.jpg",
        tittre: "CXhiguikv fghjk",
        contenue: "ertgfctyhyujhgyujb fghj,nd sghjs,dn sdhdshbsdijqn qshqkqghj",
    },
    {
        img: "../storage/app/public/images/shoe1.jpg",
        tittre: "CXhiguikv fghjk",
        contenue: "ertgfctyhyujhgyujb fghj,nd sghjs,dn sdhdshbsdijqn qshqkqghj",
    },
    {
        img: "../storage/app/public/images/shoe1.jpg",
        tittre: "CXhiguikv fghjk",
        contenue: "ertgfctyhyujhgyujb fghj,nd sghjs,dn sdhdshbsdijqn qshqkqghj",
    },
    {
        img: "../storage/app/public/images/shoe1.jpg",
        tittre: "CXhiguikv fghjk",
        contenue: "ertgfctyhyujhgyujb fghj,nd sghjs,dn sdhdshbsdijqn qshqkqghj",
    },
    {
        img: "../storage/app/public/images/shoe1.jpg",
        tittre: "CXhiguikv fghjk",
        contenue: "ertgfctyhyujhgyujb fghj,nd sghjs,dn sdhdshbsdijqn qshqkqghj",
    },
    {
        img: "../storage/app/public/images/shoe1.jpg",
        tittre: "CXhiguikv fghjk",
        contenue: "ertgfctyhyujhgyujb fghj,nd sghjs,dn sdhdshbsdijqn qshqkqghj",
    },
];

var imageItem = [
    {
        img: "../storage/app/public/images/shoe1.jpg",
    },
    {
        img: "../storage/app/public/images/shoe1.jpg",
    },
    {
        img: "../storage/app/public/images/shoe1.jpg",
    },
    {
        img: "../storage/app/public/images/shoe1.jpg",
    },
    {
        img: "../storage/app/public/images/shoe1.jpg",
    },
];

const headerMainLeft = document.querySelector(".header-main .left .contenue");
const ordinalNumber = document.querySelector(".header-main .navigation .ordinal-number");

headerMainLeft.innerHTML = "";
ordinalNumber.innerHTML = "";
for(let i = 0; i < listItem.length; i++) {   
    headerMainLeft.innerHTML += `
        <div class="bloc">
            <span>
                <h5 class="tittre" style="--idx: 0">${listItem[i].tittre}</h5>
            </span>
            <span>
                <h1 class="contenue" style="--idx: 1">${listItem[i].contenue}</h1>
            </span>
            <button class="discover-button" style="--idx: 2">Voir les détails</button>
        </div>
    `;
    
    ordinalNumber.innerHTML += `<h2>0${i + 1}</h2>`;
};

headerMainLeft.children[0].classList.add("active");
ordinalNumber.children[0].classList.add("active");

const thumbnailListWrapper = document.querySelector(
    ".header-main .right"
);

for(let i = 1; i < listItem.length; i++) {
    thumbnailListWrapper.innerHTML += `
        <div class="petit-image" style="--idx: ${i - 1}">
            <img src="${listItem[i].img}" alt="">
        </div>
    `;
}



const nextBtn = document.querySelector(".navigation .next-button");
var currentIndex = 0;
nextBtn.addEventListener("click", () => {
    nextBtn.disabled = true;
    var clone = thumbnailListWrapper.children[0].cloneNode(true);
    clone.classList.remove("zoom");
    thumbnailListWrapper.appendChild(clone);
    thumbnailListWrapper.children[1].classList.add("zoom");
    setTimeout(() => {
        thumbnailListWrapper.children[0].remove();
        nextBtn.disabled = false;
    }), 1000;

    for(let i = 1; i < thumbnailListWrapper.childElementCount; i++) {
        thumbnailListWrapper.children[i].style = `--idx: ${i - 2}`;
    }
    if(currentIndex < listItem.length - 1) {
        currentIndex++;
    } else currentIndex = 0;
    for (let i = 0; i < listItem.length; i++) {
        headerMainLeft.children[i].classList.remove("active");
        ordinalNumber.children[i].classList.remove("active");
    }
    headerMainLeft.children[currentIndex].classList.add("active");
    ordinalNumber.children[currentIndex].classList.add("active");
    ordinalNumber.children[currentIndex].textContent = `0${currentIndex + 1}`;
});

var imageItem = [
    {
      img: "../storage/app/public/images/shoe1.jpg",
    },
    {
      img: "../storage/app/public/images/shoe2.jpg",
    },
    {
      img: "../storage/app/public/images/shoe3.jpg",
    },
    {
      img: "../storage/app/public/images/shoe4.jpg",
    },
    {
      img: "../storage/app/public/images/shoe5.jpg",
    },
];
  
var slides = document.querySelectorAll('.slide');
var currentSlide = 0;

function showSlide(index) {
slides[currentSlide].classList.remove('active');
slides[index].classList.add('active');
currentSlide = index;
}

function nextSlide() {
var nextIndex = (currentSlide + 1) % slides.length;
showSlide(nextIndex);
}

setInterval(nextSlide, 3000);

// Mettre à jour les images de fond des diapositives
for (var i = 0; i < slides.length; i++) {
slides[i].style.backgroundImage = "url('" + imageItem[i].img + "')";
}




  
  


  
