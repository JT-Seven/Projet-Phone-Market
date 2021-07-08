<script>
const btnToggle = document.getElementById('indicator');
const defaulttheme = window.matchMedia("(prefers-color-scheme : dark)");
let currentheme = localStorage.getItem('theme');
const toggle = document.getElementById('toggle');

btnToggle.addEventListener('change', switchtheme)

if(defaulttheme.matches) {
    if(currentheme === 'light') {
        document.documentElement.setAttribute('data-theme','light');
        btnToggle.checked = false;
        btnToggle.style.left = "3px";
        btnToggle.style.transition = "0.4s ease-in-out";
        toggle.style.background = "#f1f1f1";
        btnToggle.style.background = "#f1f1f1";
    } else if (currentheme === 'dark') {
        document.documentElement.setAttribute('data-theme','dark');
        btnToggle.checked = true;
        btnToggle.style.left = "37px";
        btnToggle.style.transition = "0.4s ease-in-out";
        toggle.style.background = "linear-gradient(to bottom, #272627, #000)";
        btnToggle.style.background = "#000";
    }
} else {
    if(currentheme === 'light') {
        document.documentElement.setAttribute('data-theme','light');
        btnToggle.checked = false;
        btnToggle.style.left = "3px";
        btnToggle.style.transition = "0.4s ease-in-out";
        toggle.style.background = "#f1f1f1";
        btnToggle.style.background = "#f1f1f1";
    } else if (currentheme === 'dark') {
        document.documentElement.setAttribute('data-theme','dark');
        btnToggle.checked = true;
        btnToggle.style.left = "37px";
        btnToggle.style.transition = "0.4s ease-in-out";
        toggle.style.background = "linear-gradient(to bottom, #272627, #000)";
        btnToggle.style.background = "#000";
    }
}

function switchtheme(e) {
    if(e.target.checked) {
        document.documentElement.setAttribute('data-theme','dark');
        localStorage.setItem('theme','dark')
        console.log(localStorage.getItem('theme')); 
        btnToggle.style.left = "37px";
        btnToggle.style.transition = "0.4s ease-in-out";
        toggle.style.background = "linear-gradient(to bottom, #272627, #000)";
        btnToggle.style.background = "#000";
    } else {
        document.documentElement.setAttribute('data-theme','light');
        localStorage.setItem('theme','light')
        console.log(localStorage.getItem('theme'));
         btnToggle.style.left = "3px";
        btnToggle.style.transition = "0.4s ease-in-out";
        toggle.style.background = "#f1f1f1";
        btnToggle.style.background = "#f1f1f1";
    }
}


</script>