<script>
const btnPass = document.getElementById("change-pass");
const btnProf = document.getElementById("Edit-prof");
const btnOrders = document.getElementById("myOrders");
const btnProducts = document.getElementById("myProducts");
const zoneChangePass = document.querySelector(".container-change-password");
const zoneMyOrders = document.querySelector(".container-my-orders");
const zoneEditProf = document.querySelector(".container-my-information");
const zoneMyProducts = document.querySelector(".container-my-products");

if(btnPass.addEventListener('click', () => {
    zoneChangePass.style.display = "block";
    zoneEditProf.style.display = "none";
    zoneMyOrders.style.display = "none";
    zoneMyProducts.style.display = "none";
}));

if(btnProf.addEventListener('click', () => {
    zoneEditProf.style.display = "block";
    zoneChangePass.style.display = "none";
    zoneMyOrders.style.display = "none";
    zoneMyProducts.style.display = "none";
}));

if(btnOrders.addEventListener('click', () => {
    zoneMyOrders.style.display = "block";
    zoneEditProf.style.display = "none";
    zoneChangePass.style.display = "none";
    zoneMyProducts.style.display = "none";
}));

if(btnProducts.addEventListener('click', () => {
    zoneMyProducts.style.display = "block";
    zoneMyOrders.style.display = "none";
    zoneEditProf.style.display = "none";
    zoneChangePass.style.display = "none";
}));

</script>