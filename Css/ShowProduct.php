<style>

.cards {
	margin-top: 20px;
	display: flex;
	justify-content: center;
	flex-wrap: wrap;
	letter-spacing: -.6px;
}

.cards h3 {
	font-size: 1.4rem;
    text-transform: uppercase;
    color: var(--text);
    font-weight: normal;
    margin-right: auto;
    position: relative;
    width: 100%;
    text-align: center;
}

.cards h2 {
    font-size: var(--titre-h2);
    text-transform: uppercase;
    color: var(--text);
    font-weight: normal;
    margin-right: auto;
    position: relative;
    width: 100%;
    text-align: center;
    margin-top: 80px;
	margin-bottom: 50px;
}

.cards .card .Button1 {
	background-color: black;
    padding: 12px 20px;
    border-radius: 5px;
    border: none;
    outline: none;
    font-weight: lighter;
    cursor: pointer;
    transition: .5s ease-in-out;
    background: var(--color-menu);
    color:var(--formulaire);
    text-transform: uppercase;
	width: 100%;
	white-space: nowrap;
}

.cards .card .Button2 {
	background-color: black;
    padding: 12px 20px;
	width: 100%;
    border-radius: 5px;
    border: none;
    outline: none;
    font-weight: lighter;
    cursor: pointer;
    transition: .5s ease-in-out;
    background: var(--color-menu);
    color:var(--formulaire);
    text-transform: uppercase;
	margin-left: 10PX;
	white-space: nowrap;
}

.cards .card .Button3:hover{
	background: #6600ff;
    color: #fff;
}

.cards .card .Button3 {
	background-color: black;
    padding: 12px 20px;
	width: 100%;
    border-radius: 5px;
    border: none;
    outline: none;
    font-weight: lighter;
    cursor: pointer;
    transition: .5s ease-in-out;
    background: var(--color-menu);
    color:var(--formulaire);
    text-transform: uppercase;
	margin-left: 10PX;
	white-space: nowrap;
}

.cards .card .Button2:hover{
	background: #6600ff;
    color: #fff;
}

.cards .card .Button1:hover{
	background: #6600ff;
    color: #fff;
}

.cards .card {
	display: flex;
	background-color: white;
	margin-right: 15px;
	margin-left: 15px;
	border-radius: 2px;
	margin-bottom: 80px;
	padding: 40px;
	flex-direction: column;
	background-color: #FFFFFF;
    box-shadow: 0 0.2rem 0.4rem rgb(0 0 0 / 5%);
    border-radius: 1.2rem;
	flex-direction: row;
	background-color: var(--card);
}

.cards .card .Button {
display: flex;
 align-items: flex-end;

}

.cards .card .Price {
	display: flex;
	color: var(--text);
	margin-right: 10PX;
	align-items: flex-end;
	letter-spacing: -.6px;
}

B{
	font-size: 25PX;
}

.cards .card img {
	width: 280px;
	height: 280px;
	border-radius: 12px;
	object-fit: cover;
} 

.cards .card .Button button  a {
	text-decoration: none;
	color: var(--formulaire);
}

.cards .card .Button button a:hover{
text-decoration: none;
color: white;
}

.cards .card .description  {
	width: 100%;
	color: var(--text);
	margin-left: 10px;
	height: 180px;
    overflow-y: scroll;
}

.cards .card .description::-webkit-scrollbar{
	width:0px;
	background: transparent !important;
}
.cards .card .description::-moz-scrollbar {
	width:0px;
	background: transparent !important;
}
.cards .card .description::-ms-scrollbar {
	width:0px;
	background: transparent !important;
}
.cards .card .description::-o-scroolbar {
	width:0px;
	background: transparent !important;
}
.cards .card .description::-webkit-scrollbar-thumb {
	background: transparent !important;
}
.cards .card .description::-moz-scrollbar-thumb {
	background: transparent !important;
}
.cards .card .description::-ms-scrollbar-thumb {
	background: transparent !important;
}
.cards .card .description::-o-scroolbar-thumb {
	background: transparent !important;
}


/* ------------------------------------------------ */
/* ----------------------SIMILARE PRODUCTS-------------------------- */

.container-similar {
	width: 100%;
    height: 500px;
    margin-bottom: 100px;
	padding: 0 80px;
}

.container-similar h2 {
	font-size: var(--titre-h2);
    text-transform: uppercase;
    color: var(--text);
    font-weight: normal;
    margin-right: auto;
    position: relative;
    width: 100%;
    text-align: center;
	margin-top: 80px;
}


.container-similar .cards {
	width: 150px;
    height: 100%;
    margin-right: 30px;
    background: green;
}

.container-similar img {
	width: 5rem;
    height: 5rem;
}

.container-similar .show-card {
	position: relative;
	border-radius: 10px;
	transition: ease 0.5s;
	background: none;
	margin-top: 100px;
}

.container-similar .show-card:hover {
	transform: scale(1.01);
}

.container-similar img {
	border-radius: 12px;
	width: inherit;
	height: inherit;
	object-fit: fill;
}

.container-similar .view-img {
	width: 8rem;
	position: absolute;
	top: 30px;
	z-index: 5;
	left: 27%;
}

.container-similar .show-card .card {
	background-color: var(--card);
	border-radius: 10px;
	box-shadow: 0 0 30px rgba(0, 0, 0, 0.18);
	height: 350px;
	width: 260px;
}

.container-similar .show-card .container-card {
	position: relative;
	clip-path: polygon(0 0%, 500% 0, 0% 100%, 0 80%);
	height: 218px;
	overflow: hidden;
}

.container-similar .show-card .img {
	width: 100%;
	display: block;
	border-radius: 20px 20px 0 0;
	position: relative;
	top: 53px;
	transform: scale(1.3);
	left: -23px;
	object-fit: scale-down;
}

.container-similar .show-card .container-card:after {
	content: "";
	height: 100%;
	width: 100%;
	position: absolute;
	top: 0;
	left: 0;
	border-radius: 20px 20px 0 0;
	opacity: 0.7;
}

.container-similar .show-card .details {
	padding: 12px;
	transform: translate(-10px, 160px) scale(0.86);
}

.container-similar .show-card .details>h3 {
	color: var(--text);
	font-weight: 600;
	margin: 10px 0 15px 0;
	font-size: 1.3rem;
	transform: translateY(-5px);
}

/* BOUTTON */


.container-similar .container-btn {
	text-align: center;
	position: absolute;
	left: 140px;
	top: 145px;
}

.container-similar .btn-card {
	background: rgb(0, 172, 238);
	background: var(--btn-color);
	width: 130px;
	height: 40px;
	line-height: 42px;
	padding: 0;
	border: none;
	cursor: pointer;
	border-radius: 5px;
}

.container-similar .btn-card span {
	position: relative;
	display: block;
	width: 100%;
	height: 100%;
	color: #f1f1f1;
	font-size: 16px;
}

.container-similar .btn-card:before,
.container-similar .btn-card:after {
	position: absolute;
	content: "";
	right: 0;
	top: 0;
	background: var(--btn-color-hover);
	transition: all 0.3s ease;
}

.container-similar .btn-card:before {
	height: 0%;
	width: 2px;
}

.container-similar .btn-card:after {
	width: 0%;
	height: 2px;
}

.container-similar .btn-card:hover {
	background: transparent;
	box-shadow: none;
}

.container-similar .btn-card:hover:before {
	height: 100%;
}

.container-similar .btn-card:hover:after {
	width: 100%;
}

.container-similar .btn-card span:hover {
	color: var(--btn-color-text);
}

.container-similar .btn-card span:before,
.container-similar .btn-card span:after {
	position: absolute;
	content: "";
	left: 0;
	bottom: 0;
	background: var(--btn-color-hover);
	transition: all 0.3s ease;
}

.container-similar .btn-card span:before {
	width: 2px;
	height: 0%;
}

.container-similar .btn-card span:after {
	width: 0%;
	height: 2px;
}

.container-similar .btn-card span:hover:before {
	height: 100%;
}

.container-similar .btn-card span:hover:after {
	width: 100%;
}

/* DETAILS CARD */

.container-similar .details .capacity h4 {
	font-size: 1.1rem;
	color: var(--text);
	font-weight: lighter;
	transition: all 0.75s ease-out;
}

.container-similar .details .capacity span {
	background: #333;
	color: white;
	font-size: 1.1rem;
	padding: 3.5px;
	border-radius: 5px;
	transition: all 0.75s ease-out;
	text-decoration: line-through;
	position: relative;
	top: 14px;
	margin-right: 10px;
}


.container-similar .details .capacity span:nth-child(2) {
	background: #6701ff;
	transition: all 0.75s ease-out;
	text-decoration: none;
	position: absolute;
	top: 58px;
	left: 110px;
}

.container-similar .details .capacity span:nth-child(3) {
	background: #6701ff;
	transition: all 0.75s ease-out;
	text-decoration: none;
}


.container-similar .details p {
	color: var(--formulaire-text);
}

.container-similar .details .color {
	height: 25px;
	width: 25px;
	/* background: red; */
	border-radius: 50%;
	position: absolute;
	left: 77px;
	top: 100px;
}

.container-similar .details .color h4 {
	font-size: 1.1rem;
	color: var(--text);
	font-weight: lighter;
	transition: all 0.75s ease-out;
	position: absolute;
	top: 2px;
	left: -64px;
}

.container-similar .details .price {
	position: absolute;
	top: 155px;
	left: 36px;
}

.container-similar .details .price span {
	position: absolute;
	font-size: 0.9rem;
}

.container-similar .details .price span:nth-child(1) {
	position: absolute;
	color: var(--price);
	transform: scale(1.6);
	right: 10px;
}

.container-similar .details .price span:nth-child(2) {
	position: absolute;
	color: var(--price-text);
	transform: scale(1.6);
	left: 10px;
}

/* ------------------------------------------------ */

.affiche img{
	width: 100%;
}
    

</style>