<style>

.container-my-product {
	width: 100%;
    height: 907px;
    overflow: scroll;
    overflow-x: hidden;
    display: flex;
    align-items: center;
    flex-direction: column;
    padding-top: 80px;
	margin-bottom: 50px;
}

.container-my-product::-webkit-scrollbar-thumb {
  background: transparent;
  border-radius: 6px;
}
.container-my-product::-webkit-scrollbar {
  width:10px !important;
}
.container-my-product::-webkit-scrollbar-track {
  background-color: transparent;
}

.container-my-product::-moz-scrollbar-thumb {
  background: transparent;
  border-radius: 6px;
}
.container-my-product::-moz-scrollbar {
  width:10px !important;
}
.container-my-product::-moz-scrollbar-track {
  background-color: transparent;
}

.container-my-product::-ms-scrollbar-thumb {
  background: transparent;
  border-radius: 6px;
}
.container-my-product::-ms-scrollbar {
  width:10px !important;
}
.container-my-product::-ms-scrollbar-track {
  background-color: transparent;
}

.container-my-product::-o-scrollbar-thumb {
  background: transparent;
  border-radius: 6px;
}
.container-my-product::-o-scrollbar {
  width:10px !important;
}
.container-my-product::-o-scrollbar-track {
  background-color: transparent;
}

.container-my-product h2 {
    color: var(--text);
    text-transform: uppercase;
    font-size: var(--titre-h2);
}

.container-my-product .msg-succes {
	position: relative;
    top: 2rem;
    color: green;
}

.container-my-product .cards {
	display: flex;
    flex-wrap: wrap;
    margin-top: 100px;
    justify-content: center;
    padding: 0 200px;
}

.container-my-product .box-cards {
    width: 600px;
    height: 200px;
    margin-bottom: 20px;
	position: relative;
	display: flex;
    justify-content: center;
    align-items: center;
	background: var(--fond-filter);
	margin-right: 30px;
}

.container-my-product .information {
    position: absolute;
    left: 15rem;
}

.container-my-product .information p {
	margin-bottom: 5px;
    position: relative;
    top: 1rem;
}

.container-my-product .box-cards p {
	color:#fff;
}

.container-my-product .img {
    position: absolute;
    left: 0;
    top: 0;
	height: 100%;
	display: flex;
	background: #fff;
}


.container-my-product .img img {
	object-fit: contain;
    width: 200px;
}

.container-my-product .model {
    position: absolute;
	left: 15rem;
    top: 1.5rem;
	font-size: 1.3rem;
    font-weight: lighter;
}

.container-my-product .price {
    position: absolute;
    right: 1.5rem;
    bottom: 1rem;
	font-size: 1.4rem;
    font-weight: lighter;
}

.container-my-product .remove {
	position: absolute;
    right: 1.5rem;
    top: 1rem;
    height: 40px;
    width: 40px;
    background: crimson;
    border-radius: 50%;
}

.container-my-product .remove a {
	width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container-my-product .remove a span {
    position: absolute;
    width: 20px;
    height: 2px;
    background: #fff;
}

.container-my-product .remove a span:nth-child(1) {
    transform: rotate(
45deg
);
}

.container-my-product .remove a span:nth-child(2) {
    transform: rotate(
135deg
);
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

</style>