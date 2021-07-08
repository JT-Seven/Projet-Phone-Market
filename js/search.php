<script>
const lien = document.getElementById("search_");
const search = document.querySelector(".search-bar");
const btn = document.getElementById("btn-search");
const zone = document.querySelector(".zone-invi");
const logo = document.querySelector(".nav-brand");

lien.addEventListener('click', () => {
    logo.style.display = "none";
    search.style.visibility = "visible";
    btn.style.transition = ".5s ease";
    lien.classList.add('search-bar');
    zone.style.visibility = "visible";
    if(btn.addEventListener('click', () => {
        btn.style.transition = "none";
        search.style.visibility = "hidden";
        lien.classList.remove('search-bar');
    }));
    if(zone.addEventListener('click', () => {
        search.style.visibility = "hidden";
        btn.style.transition = "none";
        logo.style.display = "block";
        zone.style.visibility = "hidden";
        lien.classList.remove('search-bar');
    }));
});
</script>

