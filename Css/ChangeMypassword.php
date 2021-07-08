<style>
/* ------------------------------------------------------------------------------------------------- */
/* ---------------------------------------ZONE CHANGE MY PASSWORD------------------------------------------ */

.container-change-password {
  padding:40px 70px;
}


.container-change-password .titre {
    width: 100%;
    margin-bottom: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.container-change-password  h2 {
    font-weight: lighter;
    text-transform: uppercase;
    color:var(--text);
    font-size: var(--titre-h2);
    font-weight: normal;

}

.container-change-password .titre p {
  margin-top: 50px;
  color: var(--text);
}

.container-change-password .error{
  color: red;
  transform: translate(-80px,-25px);
}

.container-change-password .fields{
  color: red;
  transform: translate(-208px,-25px);
}

.container-change-password .acount{
  color: red;
  transform: translate(-225px,-25px);
}

.container-change-password .formulaire {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    box-sizing: border-box;
    margin: 0 auto;
    max-width: 1100px;
}

.container-change-password .formulaire h2 {
    font-weight: lighter;
    text-transform: uppercase;
    margin-bottom: 50px;
    color:var(--text);
    font-size: 1.6rem;
}

.container-change-password .formulaire form {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 600px;
}

.container-change-password .formulaire form label{
  padding: 10px;
  color:var(--text);
}


.container-change-password .formulaire form .field {
  display: flex;
  flex-direction: column;
  width: 45%;
  margin-bottom: 40px;
}


.container-change-password .formulaire form input:not(.button) {
  width: 100%;
  color:#000;
}

.container-change-password .formulaire form input:not(.button):hover {
    border-bottom: 2px solid #6600ff;
}

.container-change-password .formulaire form input {
    margin: 15px 0;
    padding: 10px;
    box-sizing: border-box;
    border: none;
    outline: none;
    border-bottom: 2px solid var(--text);
    transition: 0.2s;
    background: background: var(--fond);
}


.container-change-password .formulaire form .button {
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

.container-change-password .formulaire form .button:hover {
    background: #6600ff;
    color: #fff;
}

.container-change-password .condition {
  margin-bottom: 20px;
}
.container-change-password .condition h4 {
  color:var(--text);
}
.container-change-password .condition p {
  font-size:10px;
  color:var(--condition);
}


/* --------------------------------------------------------------------------------- */
/* --------------------------------------------------------------------------------- */

</style>