<style>

/* ---------------------------------------CONTACTER------------------------------------------ */

.container-contact {
    width: 100%;
    margin-top: 80px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.container-contact .title {
  color: var(--text);
  text-transform: uppercase;
  font-size: 1.6rem;
}

.container-contact h3 {
  color: #fff;
  text-transform: uppercase;
  font-size: 1.6rem;
}

.container-contact h2 {
  color: var(--text);
  text-transform: uppercase;
  font-size: var(--titre-h2);
}

.container-contact .titre {
  width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    color: var(--text);
    text-transform: uppercase;
    font-size: var(--titre-h2);
}

.container-contact .titre p {
  margin-top: 50px;
  color: var(--text);
}

.container-contact .error{
  color: red;
  transform: translate(-10px,50px);
}

.container-contact .fields{
  color: red;
  transform: translate(-115px,50px);
  margin-bottom: 20px;
}

.container-contact .acount{
  color: red;
  transform: translate(-225px,-25px);
}

.container-contact .formulaire {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    padding: 30px 30px;
    box-sizing: border-box;
    margin: 0 auto;
    max-width: 1100px;
    background: var(--contents-formulaire);
}

.container-contact .formulaire::before {
    content: '';
    position: absolute;
    top: 3.5rem;
    background: var(--contents-formulaire);
    right: 29.6rem;
    height: 20px;
    width: 40px;
    clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
    transform: rotate( 
270deg
 ) scale(1.4);

}

.container-contact .formulaire .form {
  margin-top: 40px;
}


.container-contact .formulaire form {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 600px;
    padding: 0px 15px 0px 0px;
}

.container-contact .formulaire form label{
  padding: 10px;
  color: #fff;
}

.container-contact .formulaire form select{
  color:#757575;
}

.container-contact .formulaire form option{
  color:#111;
}

.container-contact .formulaire form .field:not(.textarea){
  display: flex;
  flex-direction: column;
  width: 45%;
  margin-bottom: 40px;
}


.container-contact .formulaire form input:not(.button) {
  width: 100%;
  color:#fff;
}

.container-contact .formulaire form input:not(.button):hover, 
.container-contact .formulaire form select:hover, 
.container-contact .formulaire form textarea:hover {
    border-bottom: 2px solid #6600ff;
}

.container-contact .formulaire form input,
.container-contact .formulaire form select,
.container-contact .formulaire form textarea {
    margin: 15px 0;
    padding: 10px;
    box-sizing: border-box;
    border: none;
    outline: none;
    border-bottom: 2px solid var(--text);
    transition: 0.2s;
    background: background: var(--fond);
}

.container-contact .formulaire form textarea {
    width: 100%;
    resize: none;
    height: 100px;
    margin-bottom: 40px;
    color:#fff;
}   

.container-contact .formulaire form .button {
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

.container-contact .formulaire form .button:hover {
    background: #6600ff;
    color: #fff;
}

.container-contact .condition {
  margin-bottom: 20px;
}
.container-contact .condition h4 {
  color:#fff;
}
.container-contact .condition p {
  font-size:10px;
  color:var(--condition);
}


/* --------------------------------------------------------------------------------- */


/* --------------------------------------------------------------------------------- */
/* ----------------------------------------CODE IMPORT----------------------------------------- */


.container-contact-us {
  position: relative;
  width: 100%;
  height:970px;
  padding: 2rem;
  background-color: var(--fond);
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.container-contact-us .form:not(.formulaire .form) {
  width: 100%;
  max-width: 970px;
  background-color: var(--formulaire);
  border-radius: 10px;
  box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
  z-index: 50;
  overflow: hidden;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  position: absolute;
  top: 100px;
}

.container-contact-us .contact-form {
  background-color: #1abc9c;
  position: relative;
}

.container-contact-us .circle {
  border-radius: 50%;
  background: linear-gradient(135deg, transparent 20%, #149279);
  position: absolute;
}

.container-contact-us .circle.one {
  width: 130px;
  height: 130px;
  top: 130px;
  right: -40px;
}

.container-contact-us .circle.two {
  width: 80px;
  height: 80px;
  top: 10px;
  right: 30px;
}

.container-contact-us .contact-form:before {
  content: "";
  position: absolute;
  width: 26px;
  height: 26px;
  background-color: #1abc9c;
  transform: rotate(45deg);
  top: 50px;
  left: -13px;
}

.container-contact-us form {
  padding: 2.3rem 2.2rem;
  z-index: 10;
  overflow: hidden;
  position: relative;
}


.input-container {
  position: relative;
  margin: 1rem 0;
}

.input {
  width: 100%;
  outline: none;
  border: 2px solid #fafafa;
  background: none;
  padding: 0.6rem 1.2rem;
  color: #fff;
  font-weight: 500;
  font-size: 0.95rem;
  letter-spacing: 0.5px;
  border-radius: 25px;
  transition: 0.3s;
}

.container-contact-us textarea.input {
  padding: 0.8rem 1.2rem;
  min-height: 150px;
  border-radius: 22px;
  resize: none;
  overflow-y: auto;
}

.container-contact-us .input-container label {
  position: absolute;
  top: 50%;
  left: 15px;
  transform: translateY(-50%);
  padding: 0 0.4rem;
  color: #fafafa;
  font-size: 0.9rem;
  font-weight: 400;
  pointer-events: none;
  z-index: 1000;
  transition: 0.5s;
}

.container-contact-us .input-container.textarea label {
  top: 1rem;
  transform: translateY(0);
}

.container-contact-us .btn {
  padding: 0.6rem 1.3rem;
  background-color: #fff;
  border: 2px solid #fafafa;
  font-size: 0.95rem;
  color: #1abc9c;
  line-height: 1;
  border-radius: 25px;
  outline: none;
  cursor: pointer;
  transition: 0.3s;
  margin: 0;
}

.container-contact-us .btn:hover {
  background-color: transparent;
  color: #fff;
}

.container-contact-us .input-container span {
  position: absolute;
  top: 0;
  left: 25px;
  transform: translateY(-50%);
  font-size: 0.8rem;
  padding: 0 0.4rem;
  color: transparent;
  pointer-events: none;
  z-index: 500;
}

.container-contact-us .input-container span:before,
.container-contact-us .input-container span:after {
  content: "";
  position: absolute;
  width: 10%;
  opacity: 0;
  transition: 0.3s;
  height: 5px;
  background-color: #1abc9c;
  top: 50%;
  transform: translateY(-50%);
}

.container-contact-us .input-container span:before {
  left: 50%;
}

.container-contact-us .input-container span:after {
  right: 50%;
}

.container-contact-us .input-container.focus label {
  top: 0;
  transform: translateY(-50%);
  left: 25px;
  font-size: 0.8rem;
}

.container-contact-us .input-container.focus span:before,
.container-contact-us .input-container.focus span:after {
  width: 50%;
  opacity: 1;
}

.container-contact-us .contact-info {
  padding: 2.3rem 2.2rem;
  position: relative;
}


.container-contact-us .text {
  color: var(--text);
  margin: 3.5rem 0 2rem 0;
}

.container-contact-us .information {
  display: flex;
  color: var(--text);
  margin: 0.7rem 0;
  align-items: center;
  font-size: 0.95rem;
}

.container-contact-us .icon {
  width: 28px;
  margin-right: 0.7rem;
}

.container-contact-us .social-media {
  padding: 2rem 0 0 0;
}

.container-contact-us .social-media p {
  color: var(--text);
}

.container-contact-us .social-icons {
  display: flex;
  margin-top: 0.5rem;
}

.container-contact-us .social-icons .logo {
    width: 22px;
    height: 22px;
}

.container-contact-us .social-icons a {
  width: 35px;
  height: 35px;
  border-radius: 5px;
  background: var(--circle-left);
  color: #fff;
  text-align: center;
  line-height: 35px;
  margin-right: 0.5rem;
  transition: 0.3s;
  display: flex;
  justify-content: center;
  align-items: center;
}

.container-contact-us .social-icons a:hover {
  transform: scale(1.05);
}

.container-contact-us .contact-info:before {
  content: "";
  position: absolute;
  width: 100px;
  height: 100px;
  border: 15px solid var(--circle-contact);
  border-radius: 50%;
  opacity: 0.3;
  left:46.3rem;
  top: 0rem;
}

.container-contact-us .big-circle {
  position: absolute;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: var(--circle-left);
  bottom: 50%;
  right: 50%;
  opacity:.9;
  transform: translate(-40%, 38%);
}

.container-contact-us .big-circle:after {
  content: "";
  position: absolute;
  width: 360px;
  height: 360px;
  background-color: var(--circle-left-after);
  border-radius: 50%;
  top: calc(50% - 180px);
  left: calc(50% - 180px);
}

.container-contact-us .square {
  position: absolute;
  height: 400px;
  top: 50%;
  left: 50%;
  transform: translate(181%, 11%);
  opacity: 0.2;
}

@media (max-width: 850px) {
  .container-contact-us .form {
    grid-template-columns: 1fr;
  }

  .container-contact-us .contact-info:before {
    bottom: initial;
    top: -75px;
    right: 65px;
    transform: scale(0.95);
  }

  .container-contact-us .contact-form:before {
    top: -13px;
    left: initial;
    right: 70px;
  }

  .container-contact-us .square {
    transform: translate(140%, 43%);
    height: 350px;
  }

  .container-contact-us .big-circle {
    bottom: 75%;
    transform: scale(0.9) translate(-40%, 30%);
    right: 50%;
  }

  .container-contact-us .text {
    margin: 1rem 0 1.5rem 0;
  }

  .container-contact-us .social-media {
    padding: 1.5rem 0 0 0;
  }
}

@media (max-width: 480px) {
  .container-contact-us {
    padding: 1.5rem;
  }

  .container-contact-us .contact-info:before {
    display: none;
  }

  .container-contact-us .square,
  .container-contact-us .big-circle {
    display: none;
  }

  .container-contact-us form,
  .container-contact-us .contact-info {
    padding: 1.7rem 1.6rem;
  }

  .container-contact-us .text,
  .container-contact-us .information,
  .container-contact-us .social-media p {
    font-size: 0.8rem;
  }

  .container-contact-us .social-icons a {
    width: 30px;
    height: 30px;
    line-height: 30px;
  }

  .container-contact-us .icon {
    width: 23px;
  }

  .container-contact-us .input {
    padding: 0.45rem 1.2rem;
  }

  .container-contact-us .btn {
    padding: 0.45rem 1.2rem;
  }
}


/* ----------------------------------------END CODE IMPORT----------------------------------------- */
</style>