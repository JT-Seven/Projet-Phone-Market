<style>



.container-signup{
    width:400px;
    margin:0 auto;
    display:flex;
    justify-content: center;
    position: relative;
    flex-direction: column;
    margin-top: 70px;
    BACKGROUND-COLOR: white;
}

.container-signup form{
  padding:  30px 30px 100px;
}

.container-signup input[type=text], input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid blue;
    border-radius: 5px;
    box-sizing: border-box;
    box-shadow: 0 0 0 3px rgb(131 192 253 / 50%);
    outline: none;
   
    BACKGROUND-COLOR: aliceblue;

  
 }

.Container-signup a{
  text-decoration: none;
  color: #fa4299;
  
}

.container-signup h1{
   color: black;
   font-family: 'Poppins', sans-serif;
font-size: 35px;
margin: 10px 10px 10px 100px;
font-weight: normal;


 }

 .container-signup input[type=submit] {
   background-color: black;
    padding: 5px ;;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 5px ;

}

.container-signup input[type=submit]:hover {
  background-color: #434040;


}



.container-signup label{
color: black;
font-family: 'Poppins', sans-serif;
font-size: 16px;
}

.container-signup p{
  color: red;
  font-family: 'Poppins', sans-serif;
  font-size: 12px;


}

.Container-signup  .password-icon1 {
    color: #673ab7;
    display: flex;
    position: relative;
    bottom: 48px;
    left: 300px;
}

.Container-signup .password-icon1:hover {
  cursor: pointer;
  color: grey;
}

.Container-signup .password-icon1 .feather-eye {
  display: none;
}


.Container-signup  .password-icon2 {
  color: #1515e1;
  display: flex;
    top: 73%;
    position: absolute;
    right: 35px;
    width: 20px;
}

.Container-signup .password-icon2:hover {
  cursor: pointer;
  color: #ff4754;
}

.Container-signup .password-icon2 .feather-eye {
  display: none;
}

.container-acount {
    position: absolute;
    top: 115px;
    left: 65%;
    height: 66px;
}

.scroll-div {
  width: 100%;
  height: 400px;
  overflow:hidden;
  overflow-y:scroll;
}

.container-analyse {
  position: absolute;
  top: 115px;
  left: 5%;
  transform: scale(0.9);
}

.container-analyse .alert-danger {
  color: var(--convention-signup-text);
  background-color: transparent;
  border-color: transparent;
  position: relative;
  margin-bottom: 0px;
  display: flex;
  flex-direction: column;
}

.container-analyse label {
  display: block;
  margin: var(--fh-layout-margin);
  text-align: var(--fh-layout-text-align);
  margin-bottom: 20px;
  position: relative;
  padding: 0 20px;
}

::-webkit-scrollbar{
  width:10px;
}
::-moz-scrollbar {
  width:10px;
}
::-ms-scrollbar {
  width:10px;
}
::-o-scroolbar {
  width:10px;
}

::-webkit-scrollbar-thumb {
  background: transparent;
  border-radius: 6px;
}
::-moz-scrollbar-thumb {
  background: transparent;
  border-radius: 6px;
}
::-ms-scrollbar-thumb {
  background: transparent;
  border-radius: 6px;
}
::-o-scroolbar-thumb {
  background: transparent;
  border-radius: 6px;
}

.container-analyse .alert-danger h2 {
  margin-bottom: 30px;
}

.container-analyse .alert-danger span {
  font-size: 20px;
}

.message {
    color: #FF4754;
    align-items: center;
    justify-content: center;
    margin-top: 2px;
    float: left;
    margin-bottom: 2px;
    display: none;
}

.message svg {
    margin-right: 5px;
}

#msg-errors {
  position: relative;
  top: 30%;
}

.input-requirements {
  font-size: 1.3rem;
  font-style: italic;
  text-align: left;
  list-style: disc;
  list-style-position: inside;
  max-width: 400px;
  margin: 10px auto;
  color: rgb(150,150,150);
}


.input-requirements li.invalid {
	color: #e74c3c;
}
.input-requirements li.valid {
	color: #2ecc71;
}

.input-requirements li.valid:after {
	display: inline-block;
	padding-left: 10px;
	content: "\2713";
}

input:not([type="submit"]) + .input-requirements {
  overflow: hidden;
  max-height: 0;
  transition: max-height 1s ease-out;  
}

input:not([type="submit"]):hover + .input-requirements,
input:not([type="submit"]):focus + .input-requirements,
input:not([type="submit"]):active + .input-requirements {
  max-height: 1000px; /* any large number (bigger then the .input-requirements list) */
  transition: max-height 1s ease-in;
}

@media screen and (max-width: 1430px) and (min-width: 1020px) {
  #msg-errors {
    position: absolute;
    width: auto;    
    left: -610px;
  }
  .container-analyse {
    top: 220px;
  }
  .wrapper {
    position: relative;
    left: 14%;
  }
}



</style>