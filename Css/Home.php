<style>

    
/* ANIMATION CARD TEXTE 1 */


.zone-accueil-phone .slide-animations-phone {
    position: relative;
    transform: translate(0, 100px);
    left: 10%;
    top: -40px;
    width: 1010px;
    z-index: 10;
}

.zone-accueil-phone {
    width: 100%;
    box-shadow: var(--section);
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    background:url("img/home-image.png");
    background-position: center;
    background-repeat: no-repeat;
    position: fixed;
    top: 0;
}

.zone-accueil-phone .caption{
	width:100%;
}
.zone-accueil-phone .caption h1{
	font-size:42px;
	color:rgb(103 1 255);
	margin:0;
}
.zone-accueil-phone .slide-animations-phone.slide-active .caption h1{
	opacity:0;
	animation: captionText .5s ease forwards;
	animation-delay:1s;
}
.zone-accueil-phone .caption p{
	font-size: 18px;
	margin:15px 0 30px;
	color:#222222;
}
.zone-accueil-phone .slide-animations-phone.slide-active .caption p{
	opacity:0;
	animation: captionText .5s ease forwards;
	animation-delay:1.2s;
    width: 35%;
    color:#fff;
}

@keyframes captionText{
	0%{
		opacity:0; transform: translateX(-100px);
	}
	100%{
	    opacity:1; transform: translateX(0px);	
	}
}


/* -------------BOUTTON TENDANCE SWIPE 1------------- */

/* BOUTTON */

.zone-accueil-phone .container-btn {
    position: absolute;
    left: 0;
    opacity:0;
	animation: captionText .5s ease forwards;
	animation-delay:1.4s;
}

  .zone-accueil-phone .btn-card {
    background: rgb(0,172,238);
    background: linear-gradient(0deg, #6701ff 0%, rgb(33 56 184) 100%);
    width: 130px;
    height: 40px;
    line-height: 42px;
    padding: 0;
    border: none;
    cursor: pointer;
    border-radius: 5px;
  }
  .zone-accueil-phone .btn-card span {
    position: relative;
    display: block;
    width: 100%;
    height: 100%;
    color:#f1f1f1;
  }
  .zone-accueil-phone .btn-card:before,
  .zone-accueil-phone .btn-card:after {
    position: absolute;
    content: "";
    right: 0;
    top: 0;
     background: #f1f1f1;
    transition: all 0.3s ease;
  }
  .zone-accueil-phone .btn-card:before {
    height: 0%;
    width: 2px;
  }
  .zone-accueil-phone .btn-card:after {
    width: 0%;
    height: 2px;
  }
  .zone-accueil-phone .btn-card:hover{
     background: transparent;
    box-shadow: none;
  }
  .zone-accueil-phone .btn-card:hover:before {
    height: 100%;
  }
  .zone-accueil-phone .btn-card:hover:after {
    width: 100%;
  }
  .zone-accueil-phone .btn-card span:hover{
     color:#f1f1f1;
  }
  .zone-accueil-phone .btn-card span:before,
  .zone-accueil-phone .btn-card span:after {
    position: absolute;
    content: "";
    left: 0;
    bottom: 0;
     background: #f1f1f1;
    transition: all 0.3s ease;
  }
  .zone-accueil-phone .btn-card span:before {
    width: 2px;
    height: 0%;
  }
  .zone-accueil-phone .btn-card span:after {
    width: 0%;
    height: 2px;
  }
  .zone-accueil-phone .btn-card span:hover:before {
    height: 100%;
  }
  .zone-accueil-phone .btn-card span:hover:after {
    width: 100%;
  }
  

  
/* ANIMATION-SLIDE */

@keyframes fade {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.cont-btn {
    width: 100%;
    display: flex;
    justify-content: flex-end;
    z-index: 15;
    margin-bottom: auto;
    position: absolute;
    bottom: 2rem;
    padding-right: 225px;
}
.btn-nav {
  font-size: 50px;
  margin: 0 15px;
  cursor: pointer;
  color: #fff;
}

/* --------------- */

/* ----------SLIDE-TREND------------ */

.slider {
    width:100%;
}

.slider-container {
    width:100%;
    overflow:hidden;
    padding-top: 80px;
    background: rgba(0,0,0,0.6);
    height: 100vh;
    min-height: 850px;
    position: relative;
    animation: fade 0.8s;
}

.slider-container.active {
    display: block;
}

.slider-container {
    display: none;
}

.slider-container .number {
    position: fixed;
    font-size: 45rem;
    top: -10rem;
    color: #fff;
    z-index: -1;
    opacity: .3;
}

.slider-container .container-cercle {
    width: 100%;
    height: auto;
    position: absolute;
    top: 12rem;
}
/* COLOR */
.slider-container .container-colors {
    width: 100%;
    position: fixed;
    top: 90px;
    color: #fff;
    text-align: center;
}
.slider-container .color {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items:center;
}
.slider-container .color p {
    font-weight: lighter;
    text-transform: uppercase;
}
.slider-container .color div {
    width: 80px;
    height: 10px;
    background: #000000;
    margin-top: 10px;
    border: 1px solid #fff;
}
/* BULLE INFO */
.slider-container .container-cercle .bulle-info {
    width: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    color: #fff;
    align-items: center;
    position: relative;
}

/* MARK */
.slider-container .container-cercle .bulle-info .mark {
    font-size: 1.2rem;
    position: relative;
    left: 15rem;
    align-items: center;
    display: flex;
}
.slider-container .container-cercle .bulle-info .mark p {
    font-weight: lighter;
}
.slider-container .container-cercle .bulle-info .mark div {
    width: 115px;
    height: 2px;
    background: #fff;
    margin-left: 20px;
}

/* CAPACITY */
.slider-container .container-cercle .bulle-info .capacity {
    font-size: 1.2rem;
    position: relative;
    left: 15rem;
    align-items: center;
    display: flex;
    margin-bottom: 10px;
}
.slider-container .container-cercle .bulle-info .capacity p {
    font-weight: lighter;
}
.slider-container .container-cercle .bulle-info .capacity div {
    width: 100px;
    height: 2px;
    background: #fff;
    margin-right: 20px;
}
/* MODEL */
.slider-container .container-cercle .bulle-info .model {
    position: relative;
    left: 15rem;
    font-size: 1.6rem;
    text-transform: uppercase;
}
.slider-container .container-cercle .bulle-info .model h2 {
    font-weight: 800;
}
/* PRICE */
.slider-container .container-cercle .bulle-info .price {
    position: relative;
    left: 19rem;
    font-size: 1.2rem;
}
.slider-container .container-cercle .bulle-info .price p {
    font-weight: lighter;
    letter-spacing: 2;
}

.slider-container .container-cercle .cercle {
    width: 400px;
    height: 400px;
    border-radius: 50%;
    background:linear-gradient(45deg, #6600ff00, #0c0b10);
    margin-left: auto;
    margin-right: 110px;
    backdrop-filter: blur(30px);
    position: relative;
    top: -10rem;
}

.slider-container .img-phone {
    width: 600px;
    position: absolute;
    top: -6.5rem;
    right: .6rem;
}

/* SLIDE TWO */

#second {
    width: 470px;
    position: absolute;
    top: -2.5rem;
    right: 4.5rem;
}

#circle2 {
    background:linear-gradient(45deg, #16398c00, #cdcdcd);
}

#colors2 {
    background: #cdcdcd;
}



/* EFFET WAVE  */

.effet-wave {
  position:absolute;
  background: background: var(--fond);
  color:white;
  width:100%;
  bottom:0;
}

.waves {
  position:relative;
  width: 100%;
  height:15vh;
  min-height:100px;
  max-height:150px;
}

/* Animation */

.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5) infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}

@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}

@media (max-width: 768px) {
  .waves {
    height:40px;
    min-height:40px;
  }
}

/* ----------------TITRE VENTE POPULAIRE---------------- */

.zone-vente-populaire {
    width: 100%;
    box-shadow: var(--section);
    position:relative;
    background:var(--fond);
    margin-top: calc(100vh + 150px);
    min-height: 907px;
}

.zone-vente-populaire .slide-animations-phone3 {
    position: absolute;
    left: 10%;
    top: 0;
    transform: translate(0, 100px);
}

.zone-vente-populaire .caption3{
	width:100%;
}
.zone-vente-populaire .caption3 h2{
	font-size:38px;
	color: var(--text);
	margin:0;
}

.zone-vente-populaire .caption3 h2::before{
    content: '';
    width: 217px;
    height: 3px;
    display: block;
    background: var(--text);
    transform: rotate(
0deg
) translate(3px ,50px);
    animation: 1.2s souligne-text ease forwards;
	animation-delay:0.6s;
    left:0;
    position:absolute;
}

@keyframes souligne-text {
    0%{
		opacity:0; 
        left:-100px;
	}
	100%{
        opacity:1; 
        left:0;	
	}
}


.zone-vente-populaire .slide-animations-phone3.slide-active3 .caption3 h2{
	opacity:0;
	animation: captionText .5s ease forwards;
	animation-delay:1s;
}
.zone-vente-populaire .caption3 p{
	font-size: 18px;
	margin:15px 0 30px;
	color:#222222;
}
.zone-vente-populaire .slide-animations-phone3.slide-active3 .caption3 p{
	opacity:0;
	animation: captionText .5s ease forwards;
	animation-delay:1.2s;
    width: 35%;
    color:var(--text);
}
.zone-vente-populaire .caption3 a{
 display: inline-block;
 padding:10px 30px;
 background-color: #000000;
 text-decoration: none;
 color:#ffffff;
}

.zone-vente-populaire .slide-animations-phone3.slide-active3 .caption3 a{
	opacity:0;
	animation: captionText .5s ease forwards;
	animation-delay:1.4s;
}


/* ---------------SWIPER--------------- */

.swiper-container {
    display:flex;
    height:100%;
    width:100%;
    justify-content:center;
    align-items:center;
    cursor:pointer;
}

.swiper-wrapper {
    height: 300px !important;
}

.swiper-slide {
    display:flex;
    justify-content:center;
    align-items:center;
    border-radius: 20px;
    -webkit-box-reflect: below 1px linear-gradient(transparent, transparent, #0006);
}

.swiper-slide img {
    border-radius: 20px;
    width:inherit;
    height:inherit;
    object-fit:fill;
}

.swiper-slide .view-img {
    width: 10rem;
    position: relative;
    top: 240px;
    z-index: 5;
    left: 140px;
}

.swiper-slide .view-img2 {
    width: 12rem;
    position: relative;
    top: 240px;
    z-index: 5;
    left: 135px;
}

.swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {
    bottom:50px;
}

.swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
    background: var(--text);
}

/* ------------SWIPER CARD1 PHONE------------- */


.cards-popular{
    transform: scale(0.85);
    position: absolute;
    bottom: -35px;
    overflow: hidden;
}
.cards-popular .card{
    background-color: var(--card);
    border-radius: 20px;
    box-shadow: 0 0 30px rgba(0,0,0,0.18);
    height: 430px;
    width: 290px;
}
.cards-popular .container-card{
    position: relative;
    clip-path: polygon(0 0%,500% 0, 0% 100%, 0 80%);
    height: 218px;
    overflow: hidden;
}
.cards-popular .img{
    width: 100%;
    display: block;
    border-radius: 20px 20px 0 0;
    position: relative;
    top: 53px;
    transform: scale(1.3);
    left: -23px;
}
.cards-popular .container-card:after{
    content: "";
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 20px 20px 0 0;
    opacity: 0.7;
}
.cards-popular .card1>.container-card:after{
    background-color: rgba(0,0,0,1);
}

.cards-popular .details{
    padding: 12px;
    transform: translateY(10px);
}
.cards-popular .details>h3{
    color: var(--text);
    margin: 10px 0 15px 0;
    font-size: 1.3rem;
    transform: translateY(-5px);
}
.cards-popular .details>p{
    color: #a0a0a0;
    font-size: 15px;
    line-height: 30px;
    font-weight: 400;
}

/* --------------CARD 2------------- */

.cards-popular2{
    transform: scale(0.85);
    position: absolute;
    bottom: -35px;
}
.cards-popular2 .card{
    background-color: var(--card);
    border-radius: 20px;
    box-shadow: 0 0 30px rgba(0,0,0,0.18);
    height: 430px;
    width: 290px;
}
.cards-popular2 .container-card{
    position: relative;
    clip-path: polygon(0 0%,500% 0, 0% 100%, 0 80%);
    height: 218px;
}
.cards-popular2 .img{
    width: 100%;
    display: block;
    border-radius: 20px 20px 0 0;
    position: relative;
    top: 80px;
    transform: scale(1.6);
    left: -30px;
}
.cards-popular2 .container-card:after{
    content: "";
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 20px 20px 0 0;
    opacity: 0.7;
}
.cards-popular2 .card1>.container-card:after{
    background-color: rgba(0,0,0,1);
}

.cards-popular2 .details{
    padding: 12px;
    transform: translateY(10px);
}
.cards-popular2 .details>h3{
    color: var(--text);
    margin: 10px 0 15px 0;
    font-size: 1.5rem;
    transform: translateY(-5px);
}
.cards-popular2 .details>p{
    color: #a0a0a0;
    font-size: 15px;
    line-height: 30px;
    font-weight: 400;
}

/* BOUTTON */

.cards-popular .container-btn {
    text-align: center;
    position: absolute;
    left: 140px;
    top: 145px;
  }

  .btn-card {
    background: rgb(0,172,238);
    background: var(--btn-color);
    width: 130px;
    height: 40px;
    line-height: 42px;
    padding: 0;
    border: none;
    cursor: pointer;
    border-radius: 5px;
  }
  .btn-card span {
    position: relative;
    display: block;
    width: 100%;
    height: 100%;
    color:#f1f1f1;
    font-size: 16px;
  }
  .btn-card:before,
  .btn-card:after {
    position: absolute;
    content: "";
    right: 0;
    top: 0;
     background: var(--btn-color-hover);
    transition: all 0.3s ease;
  }
  .btn-card:before {
    height: 0%;
    width: 2px;
  }
  .btn-card:after {
    width: 0%;
    height: 2px;
  }
  .btn-card:hover{
     background: transparent;
    box-shadow: none;
  }
  .btn-card:hover:before {
    height: 100%;
  }
  .btn-card:hover:after {
    width: 100%;
  }
  .btn-card span:hover{
     color: var(--btn-color-text);
  }
  .btn-card span:before,
  .btn-card span:after {
    position: absolute;
    content: "";
    left: 0;
    bottom: 0;
     background: var(--btn-color-hover);
    transition: all 0.3s ease;
  }
  .btn-card span:before {
    width: 2px;
    height: 0%;
  }
  .btn-card span:after {
    width: 0%;
    height: 2px;
  }
  .btn-card span:hover:before {
    height: 100%;
  }
  .btn-card span:hover:after {
    width: 100%;
  }

  .details .capacity {
    position:absolute;
    top: 60px;
    left: 10px;
  }

  
.details .capacity h4 {
  font-size: 1.3rem;
  color: var(--text);
  font-weight: lighter;
  transition: all 0.75s ease-out;
}
.details .capacity span {
    background: #333;
    color: white;
    padding: 3.5px;
    border-radius: 5px;
    transition: all 0.75s ease-out;
    text-decoration: line-through;
    position: relative;
    top: 14px;
    margin-right: 10px;
}


.details .capacity span:nth-child(2) {
    background:#6701ff;
    transition: all 0.75s ease-out;
    text-decoration: none;
    position: absolute;
    top: 0;
    left: 110px;
}
.details .capacity span:nth-child(3) {
    background:#6701ff;
    transition: all 0.75s ease-out;
    text-decoration: none;
}

.details .color {
    height: 25px;
    width: 25px;
    border-radius: 50%;
    position: absolute;
    left: 90px;
    top: 100px;
    color: var(--text);
}

.details .color h4 {
    font-size: 1.3rem;
    color: var(--text);
    font-weight: lighter;
    transition: all 0.75s ease-out;
    position: absolute;
    top: 0px;
    left: -80px;
}

.details .price {
    position: absolute;
    top: 155px;
    left: 40px;
}

.details .price span {
    position:absolute;
}

.details .price span:nth-child(1) {
    position: absolute;
    color: var(--price);
    transform: scale(1.6);
    right: 10px;
}

.details .price span:nth-child(2) {
    position: absolute;
    color: var(--price-text);
    transform: scale(1.6);
    left: 10px;
}


/* ----------------ZONE MY PREFERENCES----------------- */


/* -------------TITLE--------------- */

.zone-our-phones {
    position: relative;
    height: 100vh;
    min-height: 907px;
    width: 100%;
    box-shadow: var(--section);
    display: flex;
    justify-content: center;
    align-items: center;
    background:var(--fond);
}


.zone-our-phones .slide-animations-phone4 {
    position: absolute;
    left: 10%;
    top: 0;
    transform: translate(0, 100px);
}

.zone-our-phones .caption4{
	width:100%;
}
.zone-our-phones .caption4 h2{
	font-size:38px;
	color: var(--text);
	margin:0;
}  

.zone-our-phones .caption4 h2::before{
    content: '';
    width: 210px;
    height: 3px;
    display: block;
    background: var(--text);
    transform: rotate(
0deg
) translate(3px ,50px);
    animation: 1.2s souligne-text ease forwards;
	animation-delay:0.6s;
    left:0;
    position:absolute;
}

@keyframes souligne-text {
    0%{
		opacity:0; 
        left:-100px;
	}
	100%{
        opacity:1; 
        left:0;	
	}
}

.zone-our-phones .slide-animations-phone4.slide-active4 .caption4 h2{
	opacity:0;
	animation: captionText .5s ease forwards;
	animation-delay:1s;
}
.zone-our-phones .caption4 p{
	font-size: 18px;
	margin:15px 0 30px;
	color:#222222;
}
.zone-our-phones .slide-animations-phone4.slide-active4 .caption4 p{
	opacity:0;
	animation: captionText .5s ease forwards;
	animation-delay:1.2s;
    width: 35%;
    color:var(--text);
}
.zone-our-phones .caption4 a{
 display: inline-block;
 padding:10px 30px;
 background-color: #000000;
 text-decoration: none;
 color:#ffffff;
}

.zone-our-phones .slide-animations-phone4.slide-active4 .caption4 a{
	opacity:0;
	animation: captionText .5s ease forwards;
	animation-delay:1.4s;
}

/* --------------ZONE-PHONES------------- */

.zone-our-phones {
    position: relative;
    width: 100%;
}

.zone-our-phones .iphone {
    width: 100%;
    position: absolute;
    top: 50%;
    right: 32%;
}

.message {
    height: 610px;
    position: absolute;
    margin: auto;
    top: 150px;
    bottom: 0px;
    left: 0px;
    right: 0px;
    background: url('img/mobile-phone.png') no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    width: 300px;
}

/* --------------NAV-TOP------------- */


.message .container-msg {
    width: 260px;
    height: 460px;
    position: absolute;
    left: 20px;
    top: 75px;
    display: flex;
    justify-content: flex-end;
    flex-direction: column;
    margin: 0 auto;
    background: var(--fond);
}

.message .nav-top {
    position: absolute;
    background:#fff;
    top: 0;
    width:100%;
    height:45px;
    display:flex;
    justify-content: space-between;
    border-bottom: 1px solid rgba(51,51,51,0.2);
    z-index: 2;
}


.conversation::-webkit-scrollbar{
  width:10px;
}
.conversation::-moz-scrollbar {
  width:10px;
}
.conversation::-ms-scrollbar {
  width:10px;
}
.conversation::-o-scroolbar {
  width:10px;
}

.conversation::-webkit-scrollbar-thumb {
  background: transparent;
}
.conversation::-moz-scrollbar-thumb {
  background: transparent;
}
.conversation::-ms-scrollbar-thumb {
  background: transparent;
}
.conversation::-o-scroolbar-thumb {
  background: transparent;
}

.message .nav-top .location {
    width: 20px;
    display: flex;
    align-items:center;
}

.message .nav-top .location img {
    width: 30px;
    margin-left: 5px;
}

.message .nav-top .location p {
    font-size: 16px;
    margin-left: 5px;
}

.message .nav-top .utilisateur {
    width: 100px;
    display: flex;
    justify-content:center;
    align-items:center;
    flex-direction: column;
}

.message .nav-top .utilisateur p:nth-child(1) {
    font-size: 18px;
    display: flex;
    text-align: center;
}

.message .nav-top .utilisateur p:nth-child(2) {
    font-size: 12px;
    opacity:0.8;
}

.message .nav-top .utilisateur p:nth-child(3) {
    font-size: 12px;
    opacity:0.8;
}



/* -------------------CONVERSATION------------------- */


.conversation {
    width: 100%;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    overflow:hidden;
    padding-top: 60px;
    overflow-y: scroll;
    z-index: 1;
}
.talk {
    margin: 20px 0;
    color: #fff;
    display: flex;
    align-items: center;
    font-size: 16px;
    width: 95%;
    transform: scale(0.8);
}

.talk img {
    width: 40px;
    margin-bottom: auto;
    border-radius: 50%;
    background: white;
    object-fit: cover;
    height: 40px;
}

.talk p {
    padding:15px;
    line-height: 25px;
    border-radius: 20px;
}

.talk a {
    font-style: oblique;
    text-decoration: underline;
    color: #fff;
}


.talk .answer-user {
    padding: 12px;
    line-height: 25px;
    border-radius: 20px;
    display: flex;
    margin-right: 10px;
    background: #0078ff;
}

.conversation .right {
    margin-left: 110px;
}

.conversation .right .answer-user .content {
    position: relative;
    height: 6px;
    width: 6px;
    background: white;
    margin: 0px 3px;
    border-radius: 50%;
    animation: animeMsg 1s infinite ease;
}

.conversation .right .answer-user .content:nth-child(1) {
    animation-delay: -0.6s;
}

.conversation .right .answer-user .content:nth-child(2) {
    animation-delay: -0.4s;
}
.conversation .right .answer-user .content:nth-child(3) {
    animation-delay: -0.2s;
} 

@keyframes animeMsg {
    0% {
        transform: translateY(5px);
    }
    50% {
        transform: translateY(0px);
    }
    100% {
        transform: translateY(5px);
    }
}


.conversation .left p {
    margin-left: 10px;
    background: #262626;
    color: #fff;
}



/* ---------------FORM-------------- */

.chat-form {
    flex-shrink: 0;
    width: 100%;
    height: 60px;
    background: #f1f1f1;
    display: flex;
    align-items: center;
    justify-content: center;
}

.container-inputs-stuffs {
    background: #fff;
    display: flex;
    width: 90%;
    height: 40px;
    border-radius: 30px;
}

.group-inp {
    width: 90%;
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-right: 5px;
}
.group-inp img {
    width: 18px;
}
.group-inp textarea {
    resize: none;
    border: none;
    outline: none;
    padding-left: 10px;
    font-size: 12px;
    width: 100%;
    height: 40px;
    padding-top: 10px;
    font-family: Arial, Helvetica, sans-serif;
}

.files-logo-cont {
    padding-left: 10px;
    height: 100%;
    width: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}
.files-logo-cont img {
    width: 20px;
}

.submit-msg-btn {
    background: #333;
    border-top-right-radius: inherit;
    border-bottom-right-radius: 25px;
    width: 70px;
    border: none;
    display: flex;
    justify-content: center;
    align-items: center;
}

.submit-msg-btn img {
    width: 18px;
}



/* -------------------MESSAGE UTILISATEUR------------------- */



/* IMAGES CHOICES */

.zone-our-phones .contents-choices {
    position: relative;
    bottom: 23%;
    display: flex;
    right: 10%;
}

.zone-our-phones .container-apple {
    position: absolute;
}

.zone-our-phones .box{
    width: 300px;
    height: 250px;
    background: var(--choices-mark);
}

.zone-our-phones .container-apple .box-apple:hover.box-apple .img {
    opacity:1;
    z-index: 5;
}

.zone-our-phones .container-img {
    height: 250px;
    position: absolute;
    width: 100%;
}

.zone-our-phones .box-apple .img {
    opacity: 0;
    position: relative;
    display: block;
    height: 290px;
    bottom: 20px;
    left: -5px;
    transform: scale(0.7);
    transition: 1s ease;
}

.zone-our-phones .container-img::after {
    content: "";
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0.7;
}

.zone-our-phones .box-apple>.container-img::after {
    background-color: rgba(0,0,0,1);
}

.zone-our-phones .container-apple .view-img {
    width: 5rem;
    position: absolute;
    top: 60px;
    z-index: 5;
    left: 112px;
}


/* ANDROID */

.zone-our-phones .container-android {
    position: absolute;
    left: 350px;
}


.zone-our-phones .container-android .container-img {
    height: 250px;
    position: absolute;
    width: 100%;
}

.zone-our-phones .container-android .box-android:hover.box-android .img {
    opacity:1;
    z-index: 5;
}

.zone-our-phones .container-android .box-android .img {
    position: relative;
    opacity: 0;
    display: block;
    height: 290px;
    bottom: 20px;
    left: -70px;
    transform: scale(0.8);
    transition: 1s ease; 
}

.zone-our-phones .container-android .container-img::after {
    content: "";
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0.7;
}

.zone-our-phones .container-android .box-android>.container-img::after {
    background-color: rgba(0,0,0,1);
}

.zone-our-phones .container-android .view-img {
    width: 6rem;
    position: absolute;
    top: 60px;
    z-index: 5;
    left: 105px;
}

@media screen and (max-width: 1430px) {

}

@media screen and (min-width: 1020px) and (max-width: 1430px) {
    .container-animation-card {
        transform:scale(0.60);
        top:60%;
    }
    .info .space {
        margin-right: 330px;
        height: 20px;
    }
    .container-animation-card2 {
        transform:scale(0.60);
        top:60%;
    }
    #container-animation-card1 {
        top:-37%;
    }
    #container-animation-card2 {
        top:-37%;
    }
    .message {
        transform:scale(0.85);
    }
    .zone-our-phones .container-apple {
        transform:scale(0.85);
    }
    .zone-our-phones .container-android {
        transform:scale(0.85);
    }
}

@media screen and (max-width:1700px) {
    .slider-container .container-cercle .bulle-info {
        left: -8rem;
    }
}



</style>