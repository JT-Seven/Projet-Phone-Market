<style>

.zone-register {
    width: 100%;
    height: 907px;
    justify-content: center;
    align-items: center;
    position: relative;
    display: flex;
}

.zone-register h2:not(.container-register .overlay-container h2) {
    font-size: var(--titre-h2);
    text-transform: uppercase;
    color: var(--text);
    font-weight: normal;
    position: absolute;
    top: 4rem;
}

.container-register .overlay-container h2 {
    font-size: var(--titre-h2);
    text-transform: uppercase;
    color: #fff;
    font-weight: normal;
    position: absolute;
    top: 9rem;
}

.container-register button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

.container-register button:active {
	transform: scale(0.95);
}

.container-register button:focus {
	outline: none;
}

.container-register button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

/* FORMULAIRE */

.container-register form:not(.container-register .sign-in-container form) {
	background-color: var(--box-l-d);
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	height: 100%;
	text-align: center;
    color: var(--text);
}

.container-register .sign-in-container form {
	background-color: var(--box-l-d);
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
    padding: 0 250px;
	height: 100%;
	text-align: center;
    color: var(--text);
}

.container-register .msg-error {
    position: relative;
    top: 7.5rem;
    text-align: justify;
}

.container-register .msg-error2 {
    position: absolute;
    top: 10.5rem;
    display: flex;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    left: 15.5rem;
}

.container-register .field span {
    color:red;
}

.container-register .sign-in-container .field {
    display: flex;
    width: 100%;
    margin-bottom: 30px;
    flex-direction: column;
    text-align: justify;
    min-width: 350px;
    position: relative;
}

.container-register a {
    text-decoration: underline;
    color: rebeccapurple;
}

.container-register .before-btn {
    width: 100%;
    min-width: 350px;
    display: flex;
    justify-content: flex-start;
    flex-direction: column;
}

.container-register .conditions {
    color: var(--condition);
    font-size: 10px;
    width: 350px;
    margin-right: auto;
    text-align: justify;
    margin-top: -20px;
}

.container-register .forgot-password {
    width: 100%;
    min-width: 350px;
    display: flex;
    justify-content: flex-start;
    flex-direction: column;
}

.container-register .member-login {
    margin-right: auto;
    margin-top: 20px;
    margin-bottom: 20px;
    white-space: nowrap;
}

.container-register .sign-in-container .forgot-pass {
    margin-right: auto;
    min-width: 350px;
    position: relative;
    text-align: justify;
    margin-bottom: 20px;
}

/* FORMULAIRE SIGN UP */

.container-register .sign-up-container .field {
    display: flex;
    width: 100%;
    margin-bottom: 30px;
    flex-direction: column;
    text-align: justify;
    min-width: 350px;
    position: relative;
}

.container-register .sign-up-container #conf {
    margin-top: -20px;
}

.container-register .sign-up-container .message {
    top: 8rem;
    left: -3.5rem;
    position: relative;
    display: none;
}

.container-register .sign-up-container svg {
    margin-right: 10px;
}

.container-register input, 
.container-register select {
    border: none;
    padding: 10px 40px;
    margin: 8px 0;
    width: 100%;
    background: none;
    transition: .3s ease;
    outline: none;
    border-bottom: 2px solid var(--text);
    color: var(--text);
}

.container-register select option {
    color: #000;
}

.container-register {
	background-color: var(--box-edit);
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 100%;
	max-width: 100%;
	min-height: 480px;
    height: 907px;
}

.container-register .form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.container-register .form-container .scroll {
    height: 720px;
    overflow-y: scroll;
    overflow-x: hidden;
    margin-top: 150px;
    width: 100%;
}

.container-register .form-container .scroll::-webkit-scrollbar-thumb {
  background: transparent;
  border-radius: 6px;
}
.container-register .form-container .scroll::-webkit-scrollbar {
  width:10px !important;
}
.container-register .form-container .scroll::-webkit-scrollbar-track {
  background-color: transparent;
}

.container-register .form-container .scroll::-moz-scrollbar-thumb {
  background: transparent;
  border-radius: 6px;
}
.container-register .form-container .scroll::-moz-scrollbar {
  width:10px !important;
}
.container-register .form-container .scroll::-moz-scrollbar-track {
  background-color: transparent;
}

.container-register .form-container .scroll::-ms-scrollbar-thumb {
  background: transparent;
  border-radius: 6px;
}
.container-register .form-container .scroll::-ms-scrollbar {
  width:10px !important;
}
.container-register .form-container .scroll::-ms-scrollbar-track {
  background-color: transparent;
}

.container-register .form-container .scroll::-o-scrollbar-thumb {
  background: transparent;
  border-radius: 6px;
}
.container-register .form-container .scroll::-o-scrollbar {
  width:10px !important;
}
.container-register .form-container .scroll::-o-scrollbar-track {
  background-color: transparent;
}


.container-register .form-container .scroll-contents {
    width: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    padding: 0 250px;
    min-width: 350px;
    padding-bottom: 100px;
}

.container-register .form-container .password-icon {
    width: max-content;
    position: absolute;
    bottom: 2.5rem !important;
    margin-left: auto;
    right: 0;
}

.container-register .form-container .password-icon .feather-eye {
  display: none;
}

.container-register .form-container .logo-input {
    width: 20px;
    position: relative;
    top: 2.35rem;
    left: 0.5rem;
}


.container-register .sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container-register .sign-in-container .member {
    display: flex;
    justify-content: center;
    min-width: max-content;
    text-align: center;
    margin-top: 10px;
}

.container-register.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.container-register .sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container-register.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

.container-register  form .button {
    width: 192px;
    height: 50px;
    border-radius: 5px;
    border: none;
    outline: none;
    font-weight: lighter;
    cursor: pointer;
    transition: .3s ease-in-out;
    background: var(--color-menu);
    color:var(--formulaire);
    text-transform: uppercase;
}

.container-register form .button:hover {
    background: #6600ff;
    color: #fff;
}

.container-register form input:not(.button):hover {
    border-bottom: 2px solid #6600ff;
}

/* END FORMULAIRE */

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.container-register .overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container-register.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.container-register .overlay {
	background: #FF416C;
	    background: var(--circle-left);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container-register.right-panel-active .overlay {
  	transform: translateX(50%);
}

.container-register .overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
    bottom: 5rem;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container-register .overlay-panel p {
    width: 280px;
    margin-bottom: 30px;
}


.container-register .overlay-left {
	transform: translateX(-20%);
}

.container-register.right-panel-active .overlay-left {
	transform: translateX(0);
}

.container-register .overlay-right {
	right: 0;
	transform: translateX(0);
}

.container-register.right-panel-active .overlay-right {
	transform: translateX(20%);
}


</style>