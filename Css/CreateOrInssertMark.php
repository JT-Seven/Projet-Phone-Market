<style>

  .container-informations-sell {
    position: absolute;
    top: 5rem;
    text-align: center;
    margin-right: auto;
    width: 100%;
    display: flex;
    justify-content: center;
    padding-left: 550px;
  }

  .container-create-phone {
    position: relative;
    width: 600px;
    text-align: initial;
  }

  .container-informations-sell h3 {
    color: #6701ff;
    text-transform: uppercase;
    margin-bottom: 20px;
    font-size: var(--titre-h2);
  }

  .container-informations-sell p {
    color: #fff;
    width: 400px;
    margin-top: 20px;
  }

  .container-sell {
    width: 100%;
    height: 100vh;
    position: relative;
    background: linear-gradient(to bottom, #1c1b29, #000000);
  }

  .container-sell .information {
    width: 1000px;
    height: 100vh;
    position:absolute;
    top:50%;
    left:-15rem;
    transform:translateY(-50%);
  }

  .container-sell #circle {
    width:1000px;
    height:1000px;
    position:absolute;
    top:0;
    left:0;
    border-radius:50%;
    transform: rotate(0deg);
    transition: 1s;
  }

  .container-sell .feature {
    position: absolute;
    display: flex;
    color:#fff;
  }

  .container-sell .feature div {
    margin-left: 30px;
  }

  .container-sell .feature div p {
    margin-top: 8px;
  }

  .container-sell .feature img {
    width:70px;
  }

  .container-sell .one {
    top:25rem;
    right:100px;
  }

  .container-sell #mark {
    filter: invert(100%) sepia(100%) saturate(1%) hue-rotate(
    107deg
    ) brightness(102%) contrast(101%);
    width: 90px;
  }

  .container-sell #model {
    filter: invert(100%) sepia(100%) saturate(1%) hue-rotate(
    107deg
    ) brightness(102%) contrast(101%);
  }

  .container-sell #tache {
    filter: invert(100%) sepia(100%) saturate(1%) hue-rotate(
    107deg
    ) brightness(102%) contrast(101%);
  }

  .container-sell #capacity {
    filter: invert(100%) sepia(100%) saturate(1%) hue-rotate(
    107deg
    ) brightness(102%) contrast(101%);
  }

  .container-sell .two {
    top:150px;
    left:21.5rem;
    transform: rotate(-90deg);
  }

  .container-sell .three {
    bottom:25rem;
    left:100px;
    transform: rotate(-180deg);
  }

  .container-sell .four {
    bottom:150px;
    right:21.5rem;  
    transform: rotate(-270deg);
  }

  .container-sell .mobile {
    width: 430px;
    position: absolute;
    top: 50%;
    left: 25%;
    transform: translateY(-50%);
    z-index: 1;
  }

  .container-sell .controls {
    position: absolute;
    top:45%;
    right:10%;
    transform:translateY(-20%);
    text-align:center;
  }

  .container-sell .controls h3 {
    margin : 15px 0;
    color:#fff;
  }

  .container-sell .controls #upBtn {
    width: 15px;
    cursor:pointer;
  }

  .container-sell .controls #downBtn {
    width: 15px;
    cursor:pointer;
    transform: rotate(180deg);
  }

  .container-sell .overlay {
    width: 0;
    height: 0;
    border-top: 50vh solid #32313c;
    border-right: 50vh solid transparent;
    border-bottom: 50vh solid #32313c;
    border-left: 50vh solid #32313c;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 1;
  }

  .container-sell .container-create-phone form .button {
    width: 192px;
    height: 50px;
    border-radius: 5px;
    border: none;
    outline: none;
    font-weight: lighter;
    cursor: pointer;
    transition: .3s ease-in-out;
    background: #fff;
    color:var(--container-create-phone);
    text-transform: uppercase;
    margin-top: 30px;
  }

  .container-sell .container-create-phone form .button:hover {
      background: #6600ff;
      color: #fff;
  }

@media screen and (max-height: 800px)  {
  .container-sell .overlay {
    left: 5rem;
  }
}

@media screen and (max-width: 992px) and (min-height: 850px) {
  
  .container-sell .overlay {
    left: -8rem;
  }
  .container-sell .two {
    left:28rem;
  }
  .container-sell .four { 
    right:27rem;
  }
  .container-sell .one {
    top: 31.5rem;
  }
  .container-sell .three {
    bottom:31.5rem;
  }
}

@media screen and (max-width: 1200px) {
  .container-sell .overlay {
    height:100%;
  }
  .container-sell .information {
    left:-20rem;
  }
}


</style>