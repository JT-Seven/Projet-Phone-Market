<style>
/* ------------------------------------------------------------------------------------------------- */
/* ---------------------------------------ZONE CHANGE MY PASSWORD------------------------------------------ */

.container-forgot-password {
  padding:40px 70px;
}

.container-forgot-password .form {
    margin-top: 20px;
}

.container-forgot-password {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    z-index: 12;
    position: relative;
}

.container-forgot-password .titre {
    width: 100%;
    margin-bottom: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.container-forgot-password .titre {
    font-weight: normal;
    text-transform: uppercase;
    margin-bottom: 50px;
    color:var(--text);
    font-size: var(--titre-h2);
}

.container-forgot-password .titre p {
  margin-top: 50px;
  color: #fff;
}

.container-forgot-password .error{
  color: red;
  transform: translate(-80px,-25px);
}

.container-forgot-password .success{
  color: green;
  transform: translate(-80px,-25px);
}

.container-forgot-password .fields{
  color: red;
  transform: translate(-208px,-25px);
}

.container-forgot-password .acount{
  color: red;
  transform: translate(-225px,-25px);
}

.container-forgot-password .formulaire {
   display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    padding: 40px 70px;
    box-sizing: border-box;
    margin: 0 auto;
    max-width: 1100px;
    background: var(--fond);
    width: max-content;
    position: relative;
}

.container-forgot-password .formulaire form {
    display: flex;
    max-width: 1100px;
    flex-direction: column;
    align-items: center;
}

.container-forgot-password .formulaire form label{
  color:var(--text);
}

.container-forgot-password .formulaire form {
  color:#757575;
}

.container-forgot-password .formulaire form .field{
  display: flex;
  flex-direction: column;
  width: 500px;
  margin-bottom: 40px;
}

.container-forgot-password .logo-input {
    width: 20px;
    position: relative;
    top: 2.35rem;
    left: 0.5rem;
}

.container-forgot-password a {
    text-decoration: underline;
    color: rebeccapurple;
}

.container-forgot-password .field span {
    color:red;
}

.container-forgot-password .formulaire form  .conf {
  margin-bottom: 20px;
}

.container-forgot-password .formulaire form input:not(.button) {
  width: 100%;
  color:var(--text);
}

.container-forgot-password .formulaire form input:not(.button):hover {
    border-bottom: 2px solid #6600ff;
}

.container-forgot-password .formulaire form input {
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

.container-forgot-password .conditions {
    color: var(--condition);
    font-size: 10px;
    width: 350px;
    margin-right: auto;
    text-align: justify;
    margin-top: -20px;
    margin-bottom: 20px;
}

.container-forgot-password .conditions h4 {
  font-size: initial;
  color: var(--text);
}

.container-forgot-password .signUp {
  color: var(--text);
  margin-top: 20px;
}

.container-forgot-password .formulaire form .button {
    width: 192px;
    height: 50px;
    border-radius: 5px;
    border: none;
    outline: none;
    font-weight: lighter;
    cursor: pointer;
    display: flex;
    justify-content: center;
    transition: .3s ease-in-out;
    background: var(--color-menu);
    color:var(--formulaire);
    text-transform: uppercase;
}

.container-forgot-password .formulaire form .button:hover {
    background: #6600ff;
    color: #fff;
}


/* --------------------------------------------------------------------------------- */
/* --------------------------------------------------------------------------------- */

</style>