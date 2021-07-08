<style>
  .container-mark {
    position: relative;
    width:100%;
    height:907px;
    background: #32313c;
  }

  .container-mark .btn-back {
    background: #161520;
    height: 40px;
    width: 40px;
    display: flex;
    position: absolute;
    top: 5rem;
    left: 10rem;
    border-radius: 50%;
    justify-content: center;
}

.container-mark .btn-back .back {
    display: flex;
    justify-content: center;
    align-items: center;
    opacity:0;
    padding: 5px;
    cursor: pointer;
}

.container-mark .btn-back img {
  width:25px;
  position: absolute;
    top: .5rem;
}

.container-mark .line {
    display: inline;
    width: 600px;
    height: 2px;
    background: #fff;
    position: absolute;
    top: 6.3rem;
}

  .container-mark .content{
    width: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    padding-top: 80px;
    position: relative;
  }

  .container-mark .content h3 {
    color: #fff;
    text-transform: uppercase;
    font-size: 1.6rem;
    margin-bottom: 20px;
  }

  .container-mark .wave{
    position: absolute;
    width: 100%;
    bottom: -70px;
    color: #fff;
    opacity: 1;
  }

  /* --------------------------------------------------------------- */
  /* --------------------------------CHOOSE MARK------------------------------- */

  .choose-mark {
    width: 350px;
    position: relative;
  }

  .choose-mark label {
    font-size: 1.2rem;
    color: #fff;
  }

  .choose-mark #select {
    width: 100%;
    padding: 10px;
    background: #161520;
    color: #fff;
    border: none;
    outline: none;
    border-radius: 5px;
    margin-top: 30px;
  }

  .choose-mark .button {
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

  .choose-mark .button:hover {
      background: #6600ff;
      color: #fff;
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