<script>
    const toTop = document.querySelector(".gotopbtn");

    window.addEventListener("scroll", () => {
        if (window.pageYOffset > 100) {
            toTop.classList.add("active-btn-top");
        } else {
            toTop.classList.remove("active-btn-top");
        }
    })

</script>