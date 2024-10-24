

var listItem = [
    {
        img: "/public/images/A.svg",
        tittre: "AMOSAG-<strong>Communication,Gestion</strong>",
        contenue: "Confier nous la communication de votre entreprise que se plus vous avez l'opportunité.",
        chemin: "route('serviceligne.communication_gestion')",
    },
    {
        img: "/storage/app/public/images/R.png",
        tittre: "AMOSAG-<strong>Voyage</strong>",
        contenue: "Confier nous la communication de votre entreprise que se plus vous avez l'opportunité.",
        chemin: "route('serviceligne.communication_gestion')",
    },
    {
        img: "/public/images/A.png",
        tittre: "AMOSAG-<strong>Transport,Transit",
        contenue: "Confier nous la communication de votre entreprise que se plus vous avez l'opportunité.",
        chemin: "route('serviceligne.communication_gestion')",
    },
    {
        img: "/storage/app/public/images/R.png",
        tittre: "AMOSAG-<strong>Formation,Succady",
        contenue: "Confier nous la communication de votre entreprise que se plus vous avez l'opportunité.",
        chemin: "route('serviceligne.communication_gestion')",
    },
    {
        img: "/public/images/amosag_transports_transits.png",
        tittre: "AMOSAG-<strong>Délices",
        contenue: "Confier nous la communication de votre entreprise que se plus vous avez l'opportunité.",
        chemin: "route('serviceligne.communication_gestion')",
    },
    {
        img: "/storage/app/public/images/R.png",
        tittre: "AMOSAG-<strong>Dazzling",
        contenue: "Confier nous la communication de votre entreprise que se plus vous avez l'opportunité.",
        chemin: "route('serviceligne.communication_gestion')",
    },
    {
        img: "/storage/app/public/images/R.png",
        tittre: "AMOSAG-<strong>Events",
        contenue: "Confier nous la communication de votre entreprise que se plus vous avez l'opportunité.",
        chemin: "route('serviceligne.communication_gestion')",
    },
    {
        img: "/storage/app/public/images/R.png",
        tittre: "AMOSAG-<strong>Staffs,Hotesses",
        contenue: "Confier nous la communication de votre entreprise que se plus vous avez l'opportunité.",
        chemin: "route('serviceligne.communication_gestion')",
    },
];


const incitation = document.querySelector(".incitation .content .information-incite");
const ordinalNumber = document.querySelector(".ordinal-number");
// Définir la variable globale contenant l'URL


incitation.innerHTML = "";
ordinalNumber.innerHTML = "";
for(let i = 0; i < listItem.length; i++) {   
    incitation.innerHTML += `
        <div class="wrapper"> 
            <span>
                <h2 style="--idx: 0">${listItem[i].tittre}</h2>
            </span>
            <span>
                <p style="--idx: 1">${listItem[i].contenue}</p>
            </span>
            <span>
                <a style="--idx: 2" href="{{${listItem[i].chemin}}}">Clique sur moi!</a>
            </span>
        </div>
    `;

    ordinalNumber.innerHTML += `<h2>0${i + 1}</h2>`;
};

incitation.children[0].classList.add("active");
ordinalNumber.children[0].classList.add("active");

const thumbnailListWrapper = document.querySelector(
    ".image .wrapper"
);
thumbnailListWrapper.innerHTML += `
    <div class="thumbnail zoom">
        <img src="${listItem[0].img}" alt="">
    </div>
`;
for(let i = 1; i < listItem.length; i++) {
    thumbnailListWrapper.innerHTML += `
        <div class="thumbnail" style="--idx: ${i - 1}">
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
        incitation.children[i].classList.remove("active");
        ordinalNumber.children[i].classList.remove("active");
    }
    incitation.children[currentIndex].classList.add("active");
    ordinalNumber.children[currentIndex].classList.add("active");
    ordinalNumber.children[currentIndex].textContent = `0${currentIndex + 1}`;
});