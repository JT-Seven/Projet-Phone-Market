<style>

*, ::before, ::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Big Shoulders Stencil Display', cursive;
  font-family: 'Poppins', sans-serif;
  scroll-behavior: smooth;
  list-style: none;
  text-decoration: none;
} 


:root {
  --text: #222;
  --formulaire: #fff;
  --ecriture: 0 0 10px #6600ff, 0 0 20px #6600ff;
  --box-shadow: -2px -2px 5px rgba(255,255,255,1), 3px 3px 5px rgba(0,0,0,0.1);
  --section: 0 20px 20px rgba(0, 0, 0, 0.2), 0px 0px 50px rgba(0, 0, 0, 0.2);
  --card:#fff;
  --btn-color: #000;
  --btn-color-hover: #000;
  --btn-color-text: #000;
  --price: #000;
  --formulaire-text: #000;
  --price-text: #000;
  --choices-mark: #333;
  --titre-accueil: rgb(103 1 255);
  --convention-signup: #fff;
  --convention-signup-text: #000;
  --scroll-bar:#333;
  --fond-filter: #111;
  --select-filter: #111;
 --color-menu:#111;
 --slide-croix: #000;
 --btn-search:#000;
 --condition:green;
 --titre-h2: 1.8rem;
 --nav-acount: rgba(0,0,0,0.9);
 --box-l-d: #fff;
 --box-edit: #070707;
 --circle-contact: #070707;
 --contents-formulaire: #32313c;
 --circle-left: linear-gradient(to bottom, #1c1b29, #000000);
 --circle-left-after:#e2e6ec;
 --btn-cart-span: #fff;
 --btn-cart-back: #fff;
 --formulaire-register:#fff;
} 

[data-theme="dark"] {
  --fond: #111;
  --text: #f1f1f1;
  --formulaire: #1c1b29;
  --ecriture: 0 0 10px #6600ff, 0 0 20px #6600ff;
  --box-shadow: -2px -2px 5px rgb(41 41 41), 3px 3px 5px rgb(119 119 119 / 10%);
  --section: 0 20px 20px rgba(255,255,255,0.1), 0px 0px 50px rgba(255,255,255,0.1);
  --card:#1c1b29;
  --formulaire-text: #fff;
  --btn-color: linear-gradient(0deg, #6701ff 0%, rgb(33 56 184) 100%);
  --btn-color-hover: #f1f1f1;
  --btn-color-text: #f1f1f1;
  --price: #f1f1f1;
  --price-text: #f1f1f1;
  --choices-mark: #6600ff;
  --titre-accueil: #f1f1f1;
  --convention-signup: #1c1b29;
  --convention-signup-text: #fff;
  --scroll-bar:#333;
  --fond-filter: #1c1b29;
  --select-filter: #1c1b29;
 --color-menu:#fff;
 --slide-croix: #fff;
 --btn-search:#000;
 --condition:lightgreen;
 --nav-acount:  #1c1b29;
 --box-l-d: #1c1b29;
 --box-edit: #1c1b29;
 --circle-contact: #6600ff;
 --contents-formulaire: #070707;
 --circle-left: linear-gradient(to bottom, #1c1b29, #6600ff);
 --circle-left-after:#111;
 --filter: invert(0%) sepia(99%) saturate(17%) hue-rotate(84deg) brightness(104%) contrast(100%);
 --btn-cart-span: #fff;
 --btn-cart-back: linear-gradient(0deg, #6701ff 0%, rgb(33 56 184) 100%);
 --formulaire-register:#070707;
}


body {
  background: var(--fond);
}

body::-webkit-scrollbar {
  width:10px !important;
}
body::-webkit-scrollbar-track {
  background-color: #e5e5e5 !important;
  
}
body::-webkit-scrollbar-thumb {
  background-color: var(--scroll-bar) !important;
  border-radius: 20px !important;
}
body::-moz-scrollbar {
  width:10px !important;
}
body::-moz-scrollbar-track {
  background-color: #e5e5e5 !important;
}
body::-moz-scrollbar-thumb {
  background-color: var(--scroll-bar) !important;
  border-radius: 20px !important;
}
body::-o-scrollbar {
  width:10px !important;
}
body::-o-scrollbar-track {
  background-color: #e5e5e5 !important;
}
body::-o-scrollbar-thumb {
  background-color: var(--scroll-bar) !important;
  border-radius: 20px !important;
}
body::-ms-scrollbar {
  width:10px !important;
}
body::-ms-scrollbar-track {
  background-color: #e5e5e5 !important;
}
body::-ms-scrollbar-thumb {
  background-color: var(--scroll-bar) !important;
  border-radius: 20px !important;
}

h3, h2 {
    font-weight: normal;
    text-transform: none !important;
}

.section-content {
    padding: 70px 0px;
    width:100%;
    overflow: hidden;
    padding-bottom: 0px;
}

.content_for_layout {
  position: relative;
}

/* LOGO */

.logo:not(.container-contact-us .social-icons .logo, .footer-col .social-links a .logo) {
  position: relative;
  height: 60px;
  width: 200px;
  cursor: pointer;
  float: left;
  object-fit: cover;
  margin: 4.5px 20px;
}

.the-logo {
  z-index: 1;
  position: relative;
}

/* ----------SCROLL TOP---------- */

.gotopbtn {
  position: fixed;
  width: 50px;
  height: 50px;
  background: #333;
  bottom: 40px;
  right: 50px;
  text-decoration: none;
  text-align: center;
  line-height: 50px;
  font-size: 22px;
  z-index: 999;
  opacity:0;
  pointer-events:none;
  transition: .4s;
  border-radius: 50%;
}

.gotopbtn.active-btn-top {
  bottom: 60px;
  pointer-events:auto;
  opacity:1;
}


.gotopbtn img {
  transform: rotate(
90deg
) translate(10px);
    width: 30px;
}

/* BUTTON LIGHT/DARK */

#toggle {
  position: absolute;
  left: 93%;
  display:block;
  width:65px;
  height:30px;
  border-radius:160px;
  background:#fff;
  cursor:pointer;
  box-shadow: inset 0 2px 60px rgba(0,0,0,0.1),
              inset 0 4px 4px rgba(255,255,255,0.2),
              inset 0 -4px 4px rgba(255,255,255,0.5);
  transform: scale(0.8);
  right: 2rem;
  bottom: 1.20rem;
}

#toggle #indicator {
  position:absolute;
  top:2px;  
  width:25px;
  -webkit-appearance: none;
  height:25px;
  background: linear-gradient(to bottom, #eaeaea, #f9f9f9);
  border-radius: 50%;
  box-shadow: inset 0 8px 60px rgb(0 0 0 / 20%), inset 0 4px 4px rgb(255 255 255 / 20%), inset 0 -4px 4px rgb(255 255 255 / 20%);
  transition: 0.4s ease-in-out;
}

#toggle.on #indicator {
  left:37px;
  background: linear-gradient(to bottom, #272627, #000);
  box-shadow: inset 0 8px 60px rgba(0,0,0,0.1),
              inset 0 8px 8px rgba(0,0,0,0.1),
              inset 0 -4px 4px rgba(0,0,0,0.1);
} 

#toggle.on {
  background:#222;
  box-shadow: inset 0 8px 60px rgba(0,0,0,0.1),
              inset 0 8px 8px rgba(0,0,0,0.1),
              inset 0 -4px 4px rgba(0,0,0,0.1);
}


/* NAV BAR */
 
#menuToggle .checkbox {
  opacity:0;
}

/* nav header links */

.nav-header {
  background: #000000;
  position: fixed;
  left: 0;
  z-index: 999;
  padding: 10px;
  top: 0;
  width: 100%;
  height: 70px;
}

.nav-brand {
  width: max-content;
  position: absolute;
  top: 0;
  dsiplay:block;
}

.nav-brand a {
  display: inline-block;
  height: 70px;
  z-index: 999;
  position: absolute;
}

.fa-bars {
  display: none !important;
  color: #ff6363;
  float: right;
  padding: 20px;
  position: fixed;
  right: 0;
  z-index: 500;
  cursor: pointer;
}

.fa-times {
  color: #ff6363;
  float: right;
  padding: 20px;
  right: 0;
  z-index: 600;
  cursor: pointer;
}

.header-links {
  position: fixed;
  width: 100%;
  z-index: 99;
  display: flex;
  justify-content: center;
}

.header-links ul {
  position: relative;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.header-links ul .user-acount {
  position: absolute;
  right: 17%;
}

.header-links ul .cart {
  position: absolute;
  right: 10%;
}

.header-links .img:not(#acount, #cart, #search) {
  width: 20px;
  display: inherit;
  float: right;
}

.header-links #acount {
  width: 18px;
  position: relative;
  left: 6px;
}

.header-links #search {
  width: 20px;
  display: inherit;
}

.header-links #cart {
  width: 25px;
  display: inherit;
}

.header-links li {
  color: white;
  display: inline;
  float: right;
  padding: 15px;
  font-size: 16px;
  margin-right: 40px;
}

.header-links a {
  color: #fff;
  -webkit-transition: all 0.2s ease-in;
}

.header-links a:hover {
  color: #6142ab !important;
}

#fp-nav ul li .fp-tooltip {
  color: #5f5f5f !important;
}

/* Expanding border effect */

.header-links a::after {
  display: block;
  margin: 0 auto;
  margin-top: 5px;
  width: 0;
  height: 2px;
  background-color: #fff;
  content: "";
  opacity: 0;
  -webkit-transition: width 0.6s, opacity 0.8s;
  -moz-transition: width 0.6s, opacity 0.8s;
  transition: width 0.6s, opacity 0.8s;
}

.header-links a:hover::after,
.header-links a:focus::after {
  opacity: 1;
  width: 100%;
}

.container-cards-favorite .view-img {
  left :17% !important;
}

.container-similar .view-img {
  left :17% !important;
}


/* -------------------------------------------BARRE DE RECHERCHE---------------------------------------  */

  
nav .search-bar {
  width: 100%;
  position: fixed;
  height: 70px;
  display: flex;
  visibility: hidden;
  justify-content: center;
  align-items: center;
  background: #070707;
  top: 0;
  z-index: 100;
  left:0;
}

nav .search-bar form {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

nav .search-bar input:not(.button) {
  padding: 10px 15px;
    width: calc(100% - 400px);
    outline: none;
    border: none;
    border-bottom: 2px solid #ffffff;
    background: #070707;
    color: #fff;
}

nav .search-bar .button {
  padding: 10px 10px;
  border: none;
  background: white;
  margin-left: 10px;
  border-radius: 2px;
  color:var(--btn-search);
}

nav .search-bar .button:focus {
  border:none;
  outline: none;
}

nav .search-bar .button:hover {
  background: #6701ff;
  color: #fff;
}

.zone-invi {
  position: fixed;
  width: 100%;
  height: calc(100vh + 100%);
  background: #0000008f;
  z-index: 999;
  visibility: hidden;
  top:70px;
}

/* ----------------------------------------------------------------------------------  */

@media screen and (max-width:1150px) {
  
  #menuToggle:not(#toggle)
  {
    display: block;
    position: fixed;
    top: 1.6rem;
    z-index: 1;
    -webkit-user-select: none;
    user-select: none;
    width: max-content;
    right: 2rem;
  }

  #menuToggle #logo-smart {
    position: absolute;
    right: 5.2rem;
    top: 10.6rem;
  }

  #menuToggle a
  {
    text-decoration: none;
    color: #fff;
    transition: color 0.3s ease;
  }

  #menuToggle input:not(#toggle input)
  {
    display: block;
    width: 40px;
    height: 32px;
    position: absolute;
    cursor: pointer;
    opacity: 0; /* hide this */
    z-index: 2; /* and place it over the hamburger */
    -webkit-touch-callout: none;
    left: -3.5px;
    top: -4.5px;
  }

  #menuToggle span
  {
    display: block;
    width: 33px;
    height: 4px;
    margin-bottom: 5px;
    position: relative;
    background: #cdcdcd;
    border-radius: 3px;
    z-index: 1;
    transform-origin: 4px 0px;
    transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
                background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
                opacity 0.55s ease;
  }

  #menuToggle span:first-child
  {
    transform-origin: 0% 0%;
  }

  #menuToggle span:nth-last-child(2)
  {
    transform-origin: 0% 100%;
  }
 

  #menuToggle input:checked ~ span
  {
    opacity: 1;
    transform: rotate(45deg) translate(-2px, -1px);
    background: #fff;
  }

  #menuToggle input:checked ~ span:nth-last-child(3)
  {
    opacity: 0;
    transform: rotate(0deg) scale(0.2, 0.2);
  }

  #menuToggle input:checked ~ span:nth-last-child(2)
  {
    transform: rotate(-45deg) translate(0, -1px);
  }

  #menu
  {
    position: fixed;
    width: 300px;
    margin: -100px 0 0 50px;
    padding: 50px;
    padding-top: 155px;
    background: #1c1b29;
    list-style-type: none;
    -webkit-font-smoothing: antialiased;
    transform-origin: 0% 0%;
    transform: translate(15%, 0);
    transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
    display: flex;
    flex-direction: column;
  }

  #menu li
  {
    padding: 10px 0;
    font-size: 20px;
    width: max-content;
  }

  #menuToggle input:checked ~ ul
  {
    display: flex;
    flex-direction: column;
    transform: translate(-88%, 0);
    align-items: flex-start;
  }
  .header-links ul .user-acount {
    position: relative;
    right:0;
  }

  .header-links #acount {
    right: -1.5rem;
    bottom: 1.5rem;
  }

  .header-links ul .cart {
    position: relative;
    right:0;
  }
  #toggle {
    position: relative;
    right:0;
    left:0;
    top:0;
  }
}

@media screen and (max-width:1370px) {
  .header-links ul .user-acount {
    right:14%;
  }
  .header-links ul .cart {
    right:7%;
  }
}

@media (prefers-color-scheme: dark) {
  :root {
    background-color: #e2e6ec;
  }
  [data-theme="light"] {
    --fond: #e2e6ec;
    --box-shadow1:  -2px -2px 5px rgba(255,255,255,1), 3px 3px 5px rgba(0,0,0,0.1);
  }
} 

</style>