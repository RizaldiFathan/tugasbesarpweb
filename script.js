window.addEventListener("load", function() {
    document.querySelector(".preloader").classList.add("opacity-0");
    this.setTimeout(function() {
        document.querySelector(".preloader").style.display="none";
    },1000)
})

const   filterContainer=document.querySelector(".portofolio-filter"),
        filterBtns=filterContainer.children,
        totalFilterBtn=filterBtns.length,
        portofolioItems=document.querySelectorAll(".portofolio-item"),
        totalPortofolioItem=portofolioItems.length;
        for (let i = 0; i < totalFilterBtn; i++) {
            filterBtns[i].addEventListener("click", function() {
                filterContainer.querySelector(".active").classList.remove("active");
                this.classList.add("active");
                
                const filterValue=this.getAttribute("data-filter");
                // console.log(totalPortofolioItem);
                for (let k = 0; k < totalPortofolioItem; k++) {
                    if (filterValue === portofolioItems[k].getAttribute("data-category")) {
                        portofolioItems[k].classList.remove("hide");
                        portofolioItems[k].classList.add("show");
                    }
                    else {
                        portofolioItems[k].classList.remove("show");
                        portofolioItems[k].classList.add("hide");
                    }
                    if (filterValue === "all") {
                        portofolioItems[k].classList.remove("hide");
                        portofolioItems[k].classList.add("show");
                    }
                    
                }
            })
            
        }

// portofolio lightbox
const   lightbox=document.querySelector(".lightbox"),
        lightboxImg=lightbox.querySelector(".lightbox-img"),
        lightboxClose=lightbox.querySelector(".lightbox-close"),
        lightboxText=lightbox.querySelector(".caption-text"),
        lightboxCounter=lightbox.querySelector(".caption-counter");

let itemIndex=0;

for (let a = 0; a < totalPortofolioItem; a++) {
    portofolioItems[a].addEventListener("click", function() {
        // console.log(a);
        itemIndex = a;
        changeItem();
        toggleLightbox();        
    })
}
function prevItem() {
    if (itemIndex === 0) {
        itemIndex = totalPortofolioItem-1;
    }
    else{
        itemIndex--;
    }
    changeItem();
}
function nextItem() {
    if (itemIndex === totalPortofolioItem-1) {
        itemIndex = 0;
    }
    else{
        itemIndex++;
    }
    changeItem();
}
function toggleLightbox() {
    lightbox.classList.toggle("open");
}
function changeItem() {
    imgSrc=portofolioItems[itemIndex].querySelector(".portofolio-img img").getAttribute("src");
    lightboxImg.src=imgSrc;
    // console.log(imgSrc);
    lightboxText.innerHTML=portofolioItems[itemIndex].querySelector("h4").innerHTML;
    lightboxCounter.innerHTML=(itemIndex+1)+" of "+totalPortofolioItem;

}
// close lightbox
lightbox.addEventListener("click", function(event) {
    if (event.target === lightboxClose || event.target === lightbox) {
        toggleLightbox();
    }
})





const   galleryItems=document.querySelectorAll(".gallery-item"),
        totalGalleryItem=galleryItems.length;

// portofolio panelbox
const   panelbox=document.querySelector(".panelbox"),
        panelboxImg=panelbox.querySelector(".panelbox-img"),
        // panelboxVideo=panelbox.querySelector(".panelbox-video"),
        panelboxClose=panelbox.querySelector(".panelbox-close"),
        // panelboxText=panelbox.querySelector(".caption-text"),
        panelboxCounter=panelbox.querySelector(".caption-counter");

let itemsIndex=0;
for (let a = 0; a < totalGalleryItem; a++) {
    galleryItems[a].addEventListener("click", function() {
        // console.log(a);
        itemsIndex = a;
        changesItem();
        togglepanelsbox();        
    })
}
function prevItems() {
    if (itemsIndex === 0) {
        itemsIndex = totalGalleryItem-1;
    }
    else{
        itemsIndex--;
    }
    changesItem();
}
function nextItems() {
    if (itemsIndex === totalGalleryItem-1) {
        itemsIndex = 0;
    }
    else{
        itemsIndex++;
    }
    changesItem();
}
function togglepanelsbox() {
    panelbox.classList.toggle("show");
}
function changesItem() {
    imgSrc=galleryItems[itemsIndex].querySelector(".gallery-img img").getAttribute("src");
    // videoSrc=galleryItems[itemsIndex].querySelector(".gallery-video img").getAttribute("src");
    panelboxImg.src=imgSrc;
    // panelboxVideo.src=videoSrc;
    // console.log(imgSrc);
    // panelboxText.innerHTML=galleryItems[itemsIndex].querySelector("h4").innerHTML;
    panelboxCounter.innerHTML=(itemsIndex+1)+" of "+totalGalleryItem;

}
// close panelbox
panelbox.addEventListener("click", function (event) {
    if (event.target === panelboxClose || event.target === panelbox) {
        togglepanelsbox();
    }
})


// aside navbar

const   nav=document.querySelector(".nav"),
        navList=nav.querySelectorAll("li"),
        totalNavList=navList.length,
        allSection=document.querySelectorAll(".section"),
        totalSection=allSection.length

        for (let i = 0; i < totalNavList; i++) {
            const a = navList[i].querySelector("a");
            a.addEventListener("click", function() {
                // remove back-section
                for (let i = 0; i < totalSection; i++) {
                    allSection[i].classList.remove("back-section");
                }
                for (let j = 0; j < totalNavList; j++) {
                    if (navList[j].querySelector("a").classList.contains("active")) {
                        allSection[j].classList.add("back-section");
                    }
                    navList[j].querySelector("a").classList.remove("active");
                }
                this.classList.add("active");

                showSection(this);

                if (window.innerWidth < 1200) {
                    asideSectionTogglerBtn();
                }
            })
            
        }
        function showSection(element) {
            for (let i = 0; i < totalSection; i++) {
                allSection[i].classList.remove("active");
            }
            const   target=element.getAttribute("href").split("#")[1];
            document.querySelector("#"+target).classList.add("active")
        }

        const   navTogglerBtn=document.querySelector(".nav-toggler"),
                aside=document.querySelector(".aside");

        navTogglerBtn.addEventListener("click", asideSectionTogglerBtn)

        function asideSectionTogglerBtn() {
            aside.classList.toggle("open");
            navTogglerBtn.classList.toggle("open");
            for (let i = 0; i < totalSection; i++) {
                allSection[i].classList.toggle("open");
            }
        }