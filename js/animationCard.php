<script>
    //Movement Animation to happen
    // const card = document.querySelector(".animation-card");
    const container = document.querySelector(".container-animation-card");
    //Items1
    // const title = document.querySelector(".title");
    const phone = document.querySelector(".phone img");
    
    //Items2
    // const card2 = document.getElementById("animation-card2");
    const container2 = document.getElementById("container-animation-card2");
   
    // const title2 = document.getElementById("title2");
    const phone2 = document.querySelector(".phone2 .img2");


    //Moving Animation Event
    container.addEventListener("mousemove", (e) => {
    let xAxis = (window.innerWidth / 2 - e.pageX) / 35;
    let yAxis = (window.innerHeight / 2 - e.pageY) / 35;
    // card.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
    });
    //Animate In
    container.addEventListener("mouseenter", (e) => {
    // card.style.transition = "none";
    //Popout
    // title.style.transform = "translateZ(150px)";
    phone.style.transform = "translateZ(200px) rotateZ(-20deg)";
    });
    //Animate Out
    container.addEventListener("mouseleave", (e) => {
    // card.style.transition = "all 0.5s ease";
    // card.style.transform = `rotateY(0deg) rotateX(0deg)`;
    //Popback
    // title.style.transform = "translateZ(0px)";
    phone.style.transform = "translateZ(0px) rotateZ(0deg)";
    });

    //Items2
    container2.addEventListener("mousemove", (e) => {
    let xAxis2 = (window.innerWidth / 2 - e.pageX) / 35;
    let yAxis2 = (window.innerHeight / 2 - e.pageY) / 35;
    card2.style.transform = `rotateY(${xAxis2}deg) rotateX(${yAxis2}deg)`;
    });
    //Animate In
    container2.addEventListener("mouseenter", (e) => {
    // card2.style.transition = "none";
    //Popout
    // title2.style.transform = "translateZ(150px)";
    phone2.style.transform = "translateZ(200px) rotateZ(-20deg)";
    });
    //Animate Out
    container2.addEventListener("mouseleave", (e) => {
    // card2.style.transition = "all 0.5s ease";
    // card2.style.transform = `rotateY(0deg) rotateX(0deg)`;
    //Popback
    // title2.style.transform = "translateZ(0px)";
    phone2.style.transform = "translateZ(0px) rotateZ(0deg)";
    });
</script>
