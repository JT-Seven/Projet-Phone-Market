<script>
window.addEventListener("load",()=> {
    let swiper = new Swiper(".swiper-container", {
        loop:true,
        navigation:{
            nextE1:".swiper-button-next",
            prevE1:".swiper-button-prev"
        },
        slidesPerView:5,
        paginationClickable:true,
        centeredSlides:true,
        on: {
            init:function() {
                positionElements();
            }
        },
        pagination: {
          el: ".swiper-pagination",
        }
    })

    swiper.on("slideChangeTransitionStart", function() {
        positionElements();
    })
});

function positionElements() {
    let docs = document.getElementsByClassName("swiper-slide");

    for(let i=0; i<docs.length;i++) {
        docs[i].style.transform = "scale(1)";
        docs[i].style.transition = "0.2s";
    }

    for(let i=0; i<docs.length; i++) {
        if(docs[i].classList.contains("swiper-slide-active"))
        {
            docs[i-1].style.transform = "scale(0.75)";
            docs[i+1].style.transform = "scale(0.75)";
            docs[i-1].style.transition = "0.2s";
            docs[i+1].style.transition = "0.2s";

            docs[i-2].style.transform = "scale(0.68)";
            docs[i+2].style.transform = "scale(0.68)";
            docs[i-2].style.transition = "0.2s";
            docs[i+2].style.transition = "0.2s";
            break;
        }
    }
}

</script>