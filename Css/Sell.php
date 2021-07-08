<style>
  .container-information {
    position: relative;
    width:100%;
    height:907px;
    background: #32313c;
  }

.container-information .btn-back {
    background: #161520;
    height: 40px;
    width: 40px;
    display: flex;
    position: absolute;
    top: 5rem;
    left: 10rem;
    border-radius: 50%;
    cursor: pointer;
    justify-content: center;
}

.container-information .btn-back a {
    display: flex;
    justify-content: center;
    align-items: center;
}

.container-information .btn-back img {
  width:25px;
}
  
.container-information .line {
    display: inline;
    width: 600px;
    height: 2px;
    background: #fff;
    position: absolute;
    top: 6.3rem;
}

  .container-information .content{
    width: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    padding-top: 80px;
    position:relative;
  }

  .container-information .content h3 {
    color: #fff;
    text-transform: uppercase;
    font-size: 1.6rem;
    margin-bottom: 20px;
  }

  .container-information .wave{
    position: absolute;
    width: 100%;
    bottom: -70px;
    color: #fff;
    opacity: 1;
  }

  /* --------------------------------------------------------------- */
  /* --------------------------------CHOOSE MARK------------------------------- */

  .phone-information::-webkit-scrollbar {
  width:10px !important;
}
.phone-information::-webkit-scrollbar-track {
  background-color: #161520 !important;
  
}
.phone-information::-webkit-scrollbar-thumb {
  background-color: #fff !important;
  border-radius: 20px !important;
}
.phone-information::-moz-scrollbar {
  width:10px !important;
}
.phone-information::-moz-scrollbar-track {
  background-color: #161520 !important;
}
.phone-information::-moz-scrollbar-thumb {
  background-color: #fff !important;
  border-radius: 20px !important;
}
.phone-information::-o-scrollbar {
  width:10px !important;
}
.phone-information::-o-scrollbar-track {
  background-color: #161520 !important;
}
.phone-information::-o-scrollbar-thumb {
  background-color: #fff !important;
  border-radius: 20px !important;
}
.phone-information::-ms-scrollbar {
  width:10px !important;
}
.phone-information::-ms-scrollbar-track {
  background-color: #161520 !important;
}
.phone-information::-ms-scrollbar-thumb {
  background-color: #fff !important;
  border-radius: 20px !important;
}

  .phone-information {
    width: 350px;
    position: relative;
    height: 480px;
    overflow-y: scroll;
    padding-right: 15px;
    z-index: 5;
    background: rgba(0,0,0,0.2);
    padding-left: 15px;
    padding-top: 10px;
    border-radius: 5px;
  }

  .phone-information p {
    color:#00b900;
  }

  .phone-information label {
    font-size: 1.2rem;
    color: #fff;
  }

  .phone-information #select,
  .phone-information input, 
  .phone-information textarea {
    width: 100%;
    padding: 10px;
    background: #161520;
    color: #fff;
    border: none;
    outline: none;
    border-radius: 5px;
    margin-top: 10px;
    margin-bottom: 10px;
  }

  .phone-information .button {
    width: 100%;
    margin-top: 20px;
    padding: 8px;
    border: none;
    outline: none;
    border-radius: 5px;
    font-weight: lighter;
    cursor: pointer;
    transition: .3s ease-in-out;
    text-transform: uppercase;
  }

  .phone-information .button:hover {
      background: #6600ff;
      color: #fff;
  }

  .phone-information .upload-box {
      border: 2px dashed #fff;
  }

  /* --------------------VENDOR--------------------- */

  ::-webkit-file-upload-button {
      color:#000;
      background:#fff;
      padding:10px;
      border:none;
      border-radius:5px;
      outline:none;
      transition:.3s ease-in-out;
  }

  ::-ms-file-upload-button {
    color:#000;
      background:#fff;
      padding:10px;
      border:none;
      border-radius:5px;
      outline:none;
      transition:.3s ease-in-out;
  }

  ::-moz-file-upload-button {
    color:#000;
      background:#fff;
      padding:10px;
      border:none;
      border-radius:5px;
      outline:none;
      transition:.3s ease-in-out;
  }

  ::-o-file-upload-button {
    color:#000;
      background:#fff;
      padding:10px;
      border:none;
      border-radius:5px;
      outline:none;
      transition:.3s ease-in-out;
  }

  /* VENDOR HOVER */

  ::-webkit-file-upload-button:hover {
      color:#fff;
      background:#6600ff;
  }

  ::-ms-file-upload-button:hover {
      color:#fff;
      background:#6600ff;
  }

  ::-moz-file-upload-button:hover {
      color:#fff;
      background:#6600ff;
  }

  ::-o-file-upload-button:hover {
      color:#fff;
      background:#6600ff;
  }


  /* --------------------------------------------------------------- */
  /* --------------------------------STEP PROGRESS------------------------------- */

  .container-step-progress {
  margin: 50px auto;
}

.container-step-progress ul {
  list-style: none;
  display: flex;
  width: 650px;
  padding: 0;
  justify-content: center;
}

.container-step-progress ul li {
  position: relative;
  color: #fff;
  width: 30%;
  text-align: center;
}
 
.container-step-progress ul li:before {
  display: flex;
  align-items: center;
  justify-content: center;
  content: attr(data-step);
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #fff;
  color: #000000;
  position: absolute;
  top: -50px;
  left: calc(50% - 20px);
  z-index: 99;
}

.container-step-progress ul li:after {
  content: '';
  width: 100%;
  height: 5px;
  background: var(--light-grey);
  position: absolute;
  top: -35px;
  left: -50%;
}

.container-step-progress ul li:first-child:after {
   width: 0;
}

.container-step-progress ul li.active:before {
  background: #00b900;
  color: #fff;
}

.container-step-progress ul li.active:after {
  background: var(--#00b900);
}

.container-step-progress ul li.active {
  color: #00b900;
}


</style>