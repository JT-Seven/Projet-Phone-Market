<style>

/* ------------------------------------------------------------------------------------------------- */
/* ---------------------------------------ZONE EDIT PROFIL------------------------------------------ */

.zone-edit-profil {
  position: absolute;
  width:100%;
  height:100%;
  z-index: 10;
  left: 0;
  top: 70px;
  right: 0;
  bottom: 0;
}


.container-edit-profil {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    z-index: 12;
    position: relative;
}

.container-edit-profil .titre {
    width: 100%;
    margin-bottom: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.container-edit-profil .titre h2 {
  font-size: var(--titre-h2);
  text-transform: uppercase;
  color: #fff;
  font-weight: normal;

}

.container-edit-profil .titre p {
  margin-top: 50px;
  color: #fff;
}

.container-edit-profil .error{
  color: red;
  transform: translate(-80px,-25px);
}

.container-edit-profil .success{
  color: green;
  transform: translate(-80px,-25px);
}

.container-edit-profil .fields{
  color: red;
  transform: translate(-208px,-25px);
}

.container-edit-profil .acount{
  color: red;
  transform: translate(-225px,-25px);
}

.container-edit-profil .formulaire {
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

.container-edit-profil .formulaire h2 {
    font-weight: lighter;
    text-transform: uppercase;
    margin-bottom: 50px;
    color:var(--text);
    font-size: var(--titre-h2);
}

.container-edit-profil .formulaire form {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 600px;
}

.container-edit-profil .formulaire form label{
  padding: 10px;
  color:var(--text);
}

.container-edit-profil .formulaire form {
  color:#757575;
}


.container-edit-profil .formulaire form .field{
  display: flex;
  flex-direction: column;
  width: 45%;
  margin-bottom: 40px;
}

.container-edit-profil .formulaire form  .conf {
  margin-bottom: 20px;
}

.container-edit-profil .formulaire form input:not(.button) {
  width: 100%;
  color:var(--text);
}

.container-edit-profil .formulaire form input:not(.button):hover {
    border-bottom: 2px solid #6600ff;
}

.container-edit-profil .formulaire form input {
    margin: 15px 0;
    padding: 10px;
    box-sizing: border-box;
    border: none;
    outline: none;
    border-bottom: 2px solid var(--text);
    transition: 0.2s;
    background: background: var(--fond);
}


.container-edit-profil .formulaire form .button {
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

.container-edit-profil .formulaire form .button:hover {
    background: #6600ff;
    color: #fff;
}


input[type="file"] {
  position: relative;
  top: -15px;
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


/* --------------------------------------------------------------------------------- */
/* --------------------------------------------------------------------------------- */


</style>