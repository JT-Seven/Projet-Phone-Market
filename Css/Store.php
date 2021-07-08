<style>
	.page-smartphone {
		width: 100%;
		padding: 100px 100px;
		height: auto;
		position: relative;
		display: flex;
		justify-content: space-evenly !important;
	}

	.title-all-smartphones {
		color: var(--text);
		text-transform: uppercase;
		font-size: var(--titre-h2);
		text-align: center;
		margin-top:80px;
	}

	.page-smartphone .zone-filtre {
		width: 20vw;
		position: relative;
		height: 1500;
		margin-top: 100px;
	}

	.page-smartphone .zone-search {
		width: 62vw;
		position: relative;
	}

	.page-smartphone .container-cards {
		width: 100%;
		display: flex;
		flex-wrap: nowrap;
		position: relative;
		left: 75px;
	}

	.page-smartphone .cards {
		display: flex;
		flex-wrap: wrap;
		align-items: center;

	}


	/* ------------------CARD-------------------- */

	.page-smartphone .show-card {
		margin: 0 10px 20px;
		position: relative;
		overflow: hidden;
		border-radius: 10px;
		transition: ease 0.5s;
		background: none;

	
	}

	.page-smartphone .show-card:hover {
		transform: scale(1.01);
	}

	.page-smartphone img {
		border-radius: 12px;
		width: inherit;
		height: inherit;
		object-fit: fill;
	}

	.page-smartphone .view-img {
		width: 8rem;
		position: absolute;
		top: 30px;
		z-index: 5;
		left: 27%;
	}

	.page-smartphone .show-card .card {
		background-color: var(--card);
		border-radius: 10px;
		box-shadow: 0 0 30px rgba(0, 0, 0, 0.18);
		height: 350px;
		width: 260px;
	}

	.page-smartphone .show-card .container-card {
		position: relative;
		clip-path: polygon(0 0%, 500% 0, 0% 100%, 0 80%);
		height: 218px;
		overflow: hidden;
	}

	.page-smartphone .show-card .img {
		width: 100%;
		display: block;
		border-radius: 20px 20px 0 0;
		position: relative;
		top: 53px;
		transform: scale(1.3);
		left: -23px;
		object-fit: scale-down;
	}

	.page-smartphone .show-card .container-card:after {
		content: "";
		height: 100%;
		width: 100%;
		position: absolute;
		top: 0;
		left: 0;
		border-radius: 20px 20px 0 0;
		opacity: 0.7;
	}

	.page-smartphone .show-card .details {
		padding: 12px;
		transform: translate(-10px, 160px) scale(0.86);
	}

	.page-smartphone .show-card .details>h3 {
		color: var(--text);
		font-weight: 600;
		margin: 10px 0 15px 0;
		font-size: 1.3rem;
		transform: translateY(-5px);
	}

	/* BOUTTON */


	.page-smartphone .container-btn {
		text-align: center;
		position: absolute;
		left: 140px;
		top: 145px;
	}

	.page-smartphone .btn-card {
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

	.page-smartphone .btn-card span {
		position: relative;
		display: block;
		width: 100%;
		height: 100%;
		color: #f1f1f1;
		font-size: 16px;
	}

	.page-smartphone .btn-card:before,
	.page-smartphone .btn-card:after {
		position: absolute;
		content: "";
		right: 0;
		top: 0;
		background: var(--btn-color-hover);
		transition: all 0.3s ease;
	}

	.page-smartphone .btn-card:before {
		height: 0%;
		width: 2px;
	}

	.page-smartphone .btn-card:after {
		width: 0%;
		height: 2px;
	}

	.page-smartphone .btn-card:hover {
		background: transparent;
		box-shadow: none;
	}

	.page-smartphone .btn-card:hover:before {
		height: 100%;
	}

	.page-smartphone .btn-card:hover:after {
		width: 100%;
	}

	.page-smartphone .btn-card span:hover {
		color: var(--btn-color-text);
	}

	.page-smartphone .btn-card span:before,
	.page-smartphone .btn-card span:after {
		position: absolute;
		content: "";
		left: 0;
		bottom: 0;
		background: var(--btn-color-hover);
		transition: all 0.3s ease;
	}

	.page-smartphone .btn-card span:before {
		width: 2px;
		height: 0%;
	}

	.page-smartphone .btn-card span:after {
		width: 0%;
		height: 2px;
	}

	.page-smartphone .btn-card span:hover:before {
		height: 100%;
	}

	.page-smartphone .btn-card span:hover:after {
		width: 100%;
	}

	/* DETAILS CARD */

	.page-smartphone .details .capacity h4 {
		font-size: 1.1rem;
		color: var(--text);
		font-weight: lighter;
		transition: all 0.75s ease-out;
	}

	.page-smartphone .details .capacity span {
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


	.page-smartphone .details .capacity span:nth-child(2) {
		background: #6701ff;
		transition: all 0.75s ease-out;
		text-decoration: none;
		position: absolute;
		top: 58px;
		left: 110px;
	}

	.page-smartphone .details .capacity span:nth-child(3) {
		background: #6701ff;
		transition: all 0.75s ease-out;
		text-decoration: none;
	}


	.page-smartphone .details p {
		color: var(--formulaire-text);
	}

	.page-smartphone .details .color {
		height: 25px;
		width: 25px;
		/* background: red; */
		border-radius: 50%;
		position: absolute;
		left: 77px;
		top: 100px;
	}

	.page-smartphone .details .color h4 {
		font-size: 1.1rem;
		color: var(--text);
		font-weight: lighter;
		transition: all 0.75s ease-out;
		position: absolute;
		top: 2px;
		left: -64px;
	}

	.page-smartphone .details .price {
		position: absolute;
		top: 155px;
		left: 36px;
	}

	.page-smartphone .details .price span {
		position: absolute;
		font-size: 0.9rem;
	}

	.page-smartphone .details .price span:nth-child(1) {
		position: absolute;
		color: var(--price);
		transform: scale(1.6);
		right: 10px;
	}

	.page-smartphone .details .price span:nth-child(2) {
		position: absolute;
		color: var(--price-text);
		transform: scale(1.6);
		left: 10px;
	}

	/* ------------------ZONE-FILTER----------------- */


	.zone-filtre .container-filter {
		position: relative;
		width: 95%;
		margin: 0 auto;
		height: calc(100% - 17px);
	}

	.zone-filtre .contents {
		position: absolute;
		height: auto;
		width: 100%;
		overflow-y: scroll;
		overflow: hidden;
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 0 25px;
	}

	.zone-filtre .contents::-webkit-scrollbar {
		width: 10px;
	}

	.zone-filtre .contents::-moz-scrollbar {
		width: 10px;
	}

	.zone-filtre .contents::-ms-scrollbar {
		width: 10px;
	}

	.zone-filtre .contents::-o-scroolbar {
		width: 10px;
	}

	.zone-filtre .contents::-webkit-scrollbar-thumb {
		background: transparent;
	}

	.zone-filtre .contents::-moz-scrollbar-thumb {
		background: transparent;
	}

	.zone-filtre .contents::-ms-scrollbar-thumb {
		background: transparent;
	}

	.zone-filtre .contents::-o-scroolbar-thumb {
		background: transparent;
	}

	.zone-filtre .contents .filter {
		width: 18vw;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	}

	.zone-filtre .contents .filter .elements {
		margin-bottom: 30px;
		width: 100%;
		position: relative;
		display: flex;
		justify-content: flex-start;
		height: 2.2em;
		line-height: 3;
		background: var(--fond-filter);
		color: #fff;
		overflow: hidden;
		border-radius: 10px;
		align-items: center;
		padding: 0 .5em;
	}

	/* -----------------SORT BY---------------- */

	.zone-filtre .contents .filter select {
		flex: 1;
		padding: 0 .5em;
		cursor: pointer;
		outline: none;
		border: none;
		font-size: 1em;
		background: var(--select-filter);
		appearance: none;
		-webkit-appearance: none;
		-moz-appearance: none;
		-o-appearance: none;
		color: #fff;
		/* background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="50"><polygon points="0,0 100,0 50,50" style="fill:%23ffffff;" /></svg>');
		background-position: right 10px top 50%;
		background-repeat: no-repeat;
		background-size: 10px; */
	}

	.zone-filtre .contents .filter select::-ms-expand {
		display: none;
	}

	.zone-filtre .contents .filter select::-webkit-expand {
		display: none;
	}

	.zone-filtre .contents .filter select::-moz-expand {
		display: none;
	}

	.zone-filtre .contents .filter select::-o-expand {
		display: none;
	}

	.zone-filtre .contents .filter .select::after {
		content: '\25BC';
		position: absolute;
		top: -5px;
		right: 0;
		padding: 0 0.8em;
		background: #2b2e2e;
		cursor: pointer;
		pointer-events: none;
		transition: .25s all ease;
	}

	.zone-filtre .contents .filter .select:hover::after {
		color: #6701ff;
	}

	/* -----------------PRODUCT-FIND---------------- */

	.zone-filtre .contents .filter .product-found {
		dispaly: flex;
		justify-content: center;
	}

	.zone-filtre .contents .filter .product-found span {
		margin-right: 30px;
		color: #ffffff;
		font-size: 20px;
		font-weight: bold;
	}

	.zone-filtre .contents .filter .product-found p {
		white-space: nowrap;
		width: 150px;
	}

	/* -----------------MARK------------------ */

	.zone-filtre .contents .filter .mark {
		height: 205px;
		display: block;
		flex-wrap: wrap;
	}

	.zone-filtre .contents .filter .mark h3 {
		position: relative;
		left: 20px;
		font-size: 20px;
	}

	.zone-filtre .contents .filter .mark .zone {
		position: relative;
		left: 20px;
		display: inline-block;
		margin-right: 15px;
	}

	/* -----------------COLOR------------------ */

	.zone-filtre .contents .filter .color {
		height: 205px;
		display: block;
		flex-wrap: wrap;
	}

	.zone-filtre .contents .filter .color h3 {
		position: relative;
		left: 20px;
		font-size: 20px;
	}

	.zone-filtre .contents .filter .color .zone {
		position: relative;
		left: 20px;
		display: inline-block;
		margin-right: 15px;
	}

	/* -----------------CAPACITY------------------ */

	.zone-filtre .contents .filter .capacity {
		height: 255px;
		display: block;
		flex-wrap: wrap;
	}

	.zone-filtre .contents .filter .capacity h3 {
		position: relative;
		left: 20px;
		font-size: 20px;
	}

	.zone-filtre .contents .filter .capacity .zone {
		position: relative;
		left: 20px;
		display: inline-block;
		margin-right: 15px;
	}

	/* -----------------PRICE------------------ */

	.zone-filtre .contents .filter .price {
		height: 190px;
		display: block;
		flex-wrap: wrap;
	}

	.zone-filtre .contents .filter .price h3 {
		position: relative;
		left: 20px;
		font-size: 20px;
	}

	.zone-filtre .contents .filter .price .zone {
		position: relative;
		margin-right: 15px;
		display: flex;
		width: 100%;
		top: 0;
		justify-content: center;
	}

	.zone-filtre .contents .filter .price .zone .container {
		position: relative;
		width: 100%;
		height: 100px;
		margin-top: 30px;
	}

	.zone-filtre .contents .filter .price .zone input[type="range"] {
		-webkit-appearance: none;
		-moz-appearance: none;
		appearance: none;
		width: 100%;
		outline: none;
		position: absolute;
		margin: auto;
		top: 0;
		bottom: 0;
		background-color: transparent;
		pointer-events: none;
	}

	.zone-filtre .contents .filter .price .zone .slider-track {
		width: 100%;
		height: 5px;
		position: absolute;
		margin: auto;
		top: 0;
		bottom: 0;
		border-radius: 5px;
	}

	.zone-filtre .contents .filter .price .zone input[type="range"]::-webkit-slider-runnable-track {
		-webkit-appearance: none;
		height: 5px;
	}

	.zone-filtre .contents .filter .price .zone input[type="range"]::-moz-range-track {
		-moz-appearance: none;
		height: 5px;
	}

	.zone-filtre .contents .filter .price .zone input[type="range"]::-ms-track {
		appearance: none;
		height: 5px;
	}

	.zone-filtre .contents .filter .price .zone input[type="range"]::-webkit-slider-thumb {
		-webkit-appearance: none;
		height: 1.7em;
		width: 1.7em;
		background-color: rgb(39 38 39);
		cursor: pointer;
		margin-top: -9px;
		pointer-events: auto;
		border-radius: 50%;
	}

	.zone-filtre .contents .filter .price .zone input[type="range"]::-moz-range-thumb {
		-webkit-appearance: none;
		height: 1.7em;
		width: 1.7em;
		cursor: pointer;
		border-radius: 50%;
		background-color: rgb(39 38 39);
		pointer-events: auto;
	}

	.zone-filtre .contents .filter .price .zone input[type="range"]::-ms-thumb {
		appearance: none;
		height: 1.7em;
		width: 1.7em;
		cursor: pointer;
		border-radius: 50%;
		background-color: rgb(39 38 39);
		pointer-events: auto;
	}

	.zone-filtre .contents .filter .price .zone input[type="range"]:active::-webkit-slider-thumb {
		background-color: #ffffff;
		border: 3px solid rgb(39 38 39);
	}

	.zone-filtre .contents .filter .price .zone .values {
		background-color: rgb(39 38 39);
		width: 90px;
		position: absolute;
		margin: auto;
		border-radius: 5px;
		text-align: center;
		font-weight: 500;
		color: #ffffff;
	}

	.zone-filtre .contents .filter .price .zone .values:before {
		content: "";
		position: absolute;
		height: 0;
		width: 0;
		border-top: 15px solid rgb(39 38 39);
		border-left: 15px solid transparent;
		border-right: 15px solid transparent;
		margin: auto;
		bottom: -14px;
		left: 0;
		right: 0;
	}

	.submit input {
		background-color: var(--fond-filter);
		color: white;
		padding: 5px 5px;
		width: 100%;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		border-radius: 5px;
	}

	.submit :hover {
		background-color: #434040;
	}
</style>