<style>
	.title-favorites {
		color: var(--text);
		text-transform: uppercase;
		font-size: var(--titre-h2);
		margin-top:80px;
		text-align:center;
		width:100%;
	}

	.container-remove {
		position: absolute;
		right: 0;
    	top: -10.5rem;
		height: 40px;
		width: 40px;
		background: crimson;
		border-radius: 50%;
	}

	.container-remove a {
		width: 100%;
		height: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.container-remove a span {
		position: absolute;
		width: 20px;
		height: 2px;
		background: #fff;
	}

	.container-remove a span:nth-child(1) {
		transform: rotate(
	45deg
	);
	}

	.container-remove a span:nth-child(2) {
		transform: rotate(
	135deg
	);
	}
	
/* ------------------------------------------------ */
/* ----------------------SIMILARE PRODUCTS-------------------------- */

.container-cards-favorite {
	width: 100%;
    height: 500px;
    margin-bottom: 100px;
	padding: 0 80px;
}

.container-cards-favorite h2 {
	font-size: var(--titre-h2);
    text-transform: uppercase;
    color: var(--text);
    font-weight: normal;
    margin-right: auto;
    position: relative;
    width: 100%;
    text-align: center;
}


.container-cards-favorite .cards {
	width: 150px;
    height: 100%;
    margin-right: 30px;
    background: green;
}

.container-cards-favorite img {
	width: 5rem;
    height: 5rem;
}

.container-cards-favorite .show-card {
	position: relative;
	border-radius: 10px;
	transition: ease 0.5s;
	background: none;
	margin-top: 100px;
}

.container-cards-favorite .show-card:hover {
	transform: scale(1.01);
}

.container-cards-favorite img {
	border-radius: 12px;
	width: inherit;
	height: inherit;
	object-fit: fill;
}

.container-cards-favorite .view-img {
	width: 8rem;
	position: absolute;
	top: 30px;
	z-index: 5;
	left: 27%;
}

.container-cards-favorite .show-card .card {
	background-color: var(--card);
	border-radius: 10px;
	box-shadow: 0 0 30px rgba(0, 0, 0, 0.18);
	height: 350px;
	width: 260px;
}

.container-cards-favorite .show-card .container-card {
	position: relative;
	clip-path: polygon(0 0%, 500% 0, 0% 100%, 0 80%);
	height: 218px;
	overflow: hidden;
}

.container-cards-favorite .show-card .img {
	width: 100%;
	display: block;
	border-radius: 20px 20px 0 0;
	position: relative;
	top: 53px;
	transform: scale(1.3);
	left: -23px;
	object-fit: scale-down;
}

.container-cards-favorite .show-card .container-card:after {
	content: "";
	height: 100%;
	width: 100%;
	position: absolute;
	top: 0;
	left: 0;
	border-radius: 20px 20px 0 0;
	opacity: 0.7;
}

.container-cards-favorite .show-card .details {
	padding: 12px;
	transform: translate(-10px, 160px) scale(0.86);
}

.container-cards-favorite .show-card .details>h3 {
	color: var(--text);
	font-weight: 600;
	margin: 10px 0 15px 0;
	font-size: 1.3rem;
	transform: translateY(-5px);
}

/* BOUTTON */


.container-cards-favorite .container-btn {
	text-align: center;
	position: absolute;
	left: 140px;
	top: 145px;
}

.container-cards-favorite .btn-card {
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

.container-cards-favorite .btn-card span {
	position: relative;
	display: block;
	width: 100%;
	height: 100%;
	color: #f1f1f1;
	font-size: 16px;
}

.container-cards-favorite .btn-card:before,
.container-cards-favorite .btn-card:after {
	position: absolute;
	content: "";
	right: 0;
	top: 0;
	background: var(--btn-color-hover);
	transition: all 0.3s ease;
}

.container-cards-favorite .btn-card:before {
	height: 0%;
	width: 2px;
}

.container-cards-favorite .btn-card:after {
	width: 0%;
	height: 2px;
}

.container-cards-favorite .btn-card:hover {
	background: transparent;
	box-shadow: none;
}

.container-cards-favorite .btn-card:hover:before {
	height: 100%;
}

.container-cards-favorite .btn-card:hover:after {
	width: 100%;
}

.container-cards-favorite .btn-card span:hover {
	color: var(--btn-color-text);
}

.container-cards-favorite .btn-card span:before,
.container-cards-favorite .btn-card span:after {
	position: absolute;
	content: "";
	left: 0;
	bottom: 0;
	background: var(--btn-color-hover);
	transition: all 0.3s ease;
}

.container-cards-favorite .btn-card span:before {
	width: 2px;
	height: 0%;
}

.container-cards-favorite .btn-card span:after {
	width: 0%;
	height: 2px;
}

.container-cards-favorite .btn-card span:hover:before {
	height: 100%;
}

.container-cards-favorite .btn-card span:hover:after {
	width: 100%;
}

/* DETAILS CARD */

.container-cards-favorite .details .capacity h4 {
	font-size: 1.1rem;
	color: var(--text);
	font-weight: lighter;
	transition: all 0.75s ease-out;
}

.container-cards-favorite .details .capacity span {
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


.container-cards-favorite .details .capacity span:nth-child(2) {
	background: #6701ff;
	transition: all 0.75s ease-out;
	text-decoration: none;
	position: absolute;
	top: 58px;
	left: 110px;
}

.container-cards-favorite .details .capacity span:nth-child(3) {
	background: #6701ff;
	transition: all 0.75s ease-out;
	text-decoration: none;
}


.container-cards-favorite .details p {
	color: var(--formulaire-text);
}

.container-cards-favorite .details .color {
	height: 25px;
	width: 25px;
	/* background: red; */
	border-radius: 50%;
	position: absolute;
	left: 77px;
	top: 100px;
}

.container-cards-favorite .details .color h4 {
	font-size: 1.1rem;
	color: var(--text);
	font-weight: lighter;
	transition: all 0.75s ease-out;
	position: absolute;
	top: 2px;
	left: -64px;
}

.container-cards-favorite .details .price {
	position: absolute;
	top: 155px;
	left: 36px;
}

.container-cards-favorite .details .price span {
	position: absolute;
	font-size: 0.9rem;
}

.container-cards-favorite .details .price span:nth-child(1) {
	position: absolute;
	color: var(--price);
	transform: scale(1.6);
	right: 10px;
}

.container-cards-favorite .details .price span:nth-child(2) {
	position: absolute;
	color: var(--price-text);
	transform: scale(1.6);
	left: 10px;
}

/* ------------------------------------------------ */

.container-cards-favorite .details .price span {
	position: absolute;
	font-size: 0.9rem;
}

.container-cards-favorite .details .price span:nth-child(1) {
	position: absolute;
	color: var(--price);
	transform: scale(1.6);
	right: 10px;
}

.container-cards-favorite .details .price span:nth-child(2) {
	position: absolute;
	color: var(--price-text);
	transform: scale(1.6);
	left: 10px;
}

.affiche1 img {
	width: 100%;
}

.affiche2 {
	display: flex;
	justify-content: center;
	margin-top: 100px;
}

.affiche2 img {
	width: 70%;
	border-radius: 10PX;
}


.noproduct {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
	margin-bottom: 100px;
    margin-top: 80px;
}

.noproduct h2 {
    color: var(--text);
    text-transform: uppercase;
    font-size: var(--titre-h2);
	margin-bottom: 50px;
}

.noproduct img {
    width: 250px;
}
	
/* ------------------------------------------------ */
/* ----------------------SIMILARE PRODUCTS-------------------------- */

.container-similar {
	width: 100%;
    height: 500px;
    margin-bottom: 100px;
	padding: 0 80px;
	margin-top: 100px;
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

	.affiche img {
		width: 100%;
	}
</style>