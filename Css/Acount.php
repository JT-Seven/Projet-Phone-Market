<style>

/* -----------------ZONE-MENU-CHOICES---------------- */

.wrapper-acount {
  position: relative;
}

.wrapper-acount .sidebar{
    z-index: 1;
    background: var(--nav-acount);
    position: static;
    top: 70px;
    width: 250px;
    height: 100%;
    transition: 0.3s;
    transition-property: width;
    overflow-y: scroll;
    padding-bottom: 90px;
}

.wrapper-acount .sidebar::-webkit-scrollbar{
  width:10px;
  }
  .wrapper-acount .sidebar::-moz-scrollbar {
  width:10px;
  }
  .wrapper-acount .sidebar::-ms-scrollbar {
  width:10px;
  }
  .wrapper-acount .sidebar::-o-scroolbar {
  width:10px;
  }
  .wrapper-acount .sidebar::-webkit-scrollbar-thumb {
  background: transparent;
  border-radius: 6px;
  }
  .wrapper-acount .sidebar::-moz-scrollbar-thumb {
  background: transparent;
  border-radius: 6px;
  }
  .wrapper-acount .sidebar::-ms-scrollbar-thumb {
  background: transparent;
  border-radius: 6px;
  }
  .wrapper-acount .sidebar::-o-scroolbar-thumb {
  background: transparent;
  border-radius: 6px;
  }

.wrapper-acount .sidebar .sidebar-menu{
  overflow: hidden;
}

.wrapper-acount .sidebar .sidebar-menu .profile img{
  margin: 20px 0;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  border: 1px solid #f1f1f1;
  object-fit: contain;
}

.wrapper-acount .sidebar .sidebar-menu .profile p{
  color: #bbb;
  font-weight: normal;
  margin-bottom: 10px;
}

.wrapper-acount .sidebar .sidebar-menu .item{
  width: 250px;
  overflow: hidden;
}

.wrapper-acount .sidebar .sidebar-menu .item .menu-btn{
  display: block;
  color: #fff;
  position: relative;
  padding: 25px 20px;
  transition: 0.3s;
  transition-property: color;
}

.wrapper-acount .sidebar .sidebar-menu .item .menu-btn:hover{
  color: #6600ff;
}

.wrapper-acount .sidebar .sidebar-menu .item .menu-btn i{
  margin-right: 20px;
}

.wrapper-acount .sidebar .sidebar-menu .item .menu-btn .drop-down{
  float: right;
  font-size: 12px;
  margin-top: 3px;
}

.wrapper-acount .sidebar .sidebar-menu .item .sub-menu{
  background: #3498DB;
  overflow: hidden;
  max-height: 0;
  transition: 0.3s;
  transition-property: background, max-height;
}

.wrapper-acount .sidebar .sidebar-menu .item .sub-menu a{
  display: block;
  position: relative;
  color: #fff;
  white-space: nowrap;
  font-size: 15px;
  padding: 20px;
  transition: 0.3s;
  transition-property: background;
}

.wrapper-acount .sidebar .sidebar-menu .item .sub-menu a:hover{
  background: #55B1F0;
}

.wrapper-acount .sidebar .sidebar-menu .item .sub-menu a:not(last-child){
  border-bottom: 1px solid #8FC5E9;
}

.wrapper-acount .sidebar .sidebar-menu .item .sub-menu i{
  padding-right: 20px;
  font-size: 10px;
}

.wrapper-acount .sidebar .sidebar-menu .item:target .sub-menu{
  max-height: 500px;
}

.wrapper-acount .main-container{
    margin-left: 250px;
    padding: 80px 80px;
    transition: 0.3s;
    display: flex;
    align-items: flex-start;
    flex-wrap: wrap;
    height: 100vh;
    position: absolute;
    top: 0;
    width: 100%;
    flex-direction: column;
    padding-top: 180px;
}

.wrapper-acount .main-container .titre-acount {
    position: absolute;
    left: 5rem;
    top: 5rem;
}

.wrapper-acount .main-container h2 {
    position: relative;
    width: max-content;
    font-size: var(--titre-h2);
    color: var(--text);
    text-transform: uppercase;
}

.wrapper-acount.collapse .sidebar{
  width: 70px;
}

.wrapper-acount.collapse .sidebar .profile img,
.wrapper-acount.collapse .sidebar .profile p,
.wrapper-acount.collapse .sidebar a span{
  display: none;
}

.wrapper-acount.collapse .sidebar .sidebar-menu .item .menu-btn{
  font-size: 23px;
}

.wrapper-acount.collapse .sidebar .sidebar-menu .item .sub-menu i{
  font-size: 18px;
  padding-left: 3px;
}

/* ---------------ZONE-CONTENU---------------- */

.wrapper-acount.collapse .main-container{
  width: calc(100% - 70px);
  margin-left: 70px;
}

.wrapper-acount .main-container .contenu {
  position: absolute;
}

.wrapper-acount .main-container .card{
  background: #fff;
  padding: 15px;
  margin-bottom: 10px;
  font-size: 14px;
}

.wrapper-acount .choices-btn {
    margin-top: 30px;
}
      
/* ----------------CARD-INFO----------------- */

.container-my-information {
  width:max-content;
}

.container-my-information  .zone-info {
    position: relative;
    margin-bottom: 20px;
    width: max-content;
}

.container-my-information  .zone-info .profil {
    background:var(--box-l-d);
    padding: 30px;
    height: 220px;
    width: 500px;
    color:var(--color-menu);
}

.container-my-information  .zone-info .profil h3 {
    font-size: 22px;
    font-weight: 500;
    margin-bottom: 25px;
}

.container-my-information  .zone-info .profil p {
  margin-bottom: 3px;
}

.container-my-information .zone-info .profil .edit {
  width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #f1f1f1;
    position: absolute;
    left: 400px;
    top: 90px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container-my-information  .zone-info .profil .edit img {
    width: 20px;
}

/* --------------BTN-CHANGE--------------- */

.container-my-information  .zone-info .profil .edit .change {
  border:none;
  outline:none;
  width:100%;
  height:100%;
  border-radius: 50%;
  transition: 0.5s ease;
  cursor:pointer;
}

.container-my-information  .zone-info .profil .edit .change:hover {
  background:rgba(0,0,0,0.1);
}



/* ------------MSG-ERROR------------ */

.msg-errors_ {
    position:absolute;
    top:12%;
    left:5%;
    background: red;
    width: 30%;
    height: auto;
}
.msg-errors_ li{
margin-right: 200px;
}
.msg-errors_ h3{
margin-left: 10px;
}


/* ------------------------------------------------------------------------------------------------- */
/* ---------------------------------------ZONE MY INFORMATIONS------------------------------------------ */

.wrapper{
  position: absolute;
  top: 443px;
  left: 40%;
  transform: translate(-50%,-50%);
  width: 60%;
  display: flex;
  box-shadow: 0 1px 20px 0 rgb(69 90 100 / 8%);
  height: 500px;
}

.wrapper .left{
  width: 35%;
  background: var(--circle-left);
  padding: 30px 25px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  text-align: center;
  color: #fff;
}

.wrapper .left #name{
  font-size: 1rem;
}

.wrapper .left img{
  border-radius: 50%;
  width: 130px;
  margin-bottom: 10px;
  height: 130px;
  object-fit: contain;
}

.wrapper .left h4{
  margin-bottom: 10px;
  font-size: 1.2rem;
  text-transform: uppercase;
  color: #fff;
  font-weight: normal;
}

.wrapper .left p{
  font-size: 13px;
}

.wrapper .right{
  width: 65%;
  background: var(--nav-acount);
  padding: 30px 25px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

.wrapper .right .info,
.wrapper .right .projects{
  margin-bottom: 25px;
}

.wrapper .right .info h3,
.wrapper .right .projects h3{
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom: 1px solid #e0e0e0;
    color: #fff;
  text-transform: uppercase;
  letter-spacing: 5px;
}

.wrapper .right .info_data,
.wrapper .right .projects_data{
  display: flex;
  justify-content: space-between;
}

.wrapper .right .info_data .data,
.wrapper .right .projects_data .data{
  width: 45%;
}

.wrapper .right .info_data .data h4,
.wrapper .right .projects_data .data h4{
  margin-bottom: 10px;
  font-size: 1rem;
  text-transform: uppercase;
  color: #fff;
  font-weight: normal;
}

.wrapper .right .info_data .data p,
.wrapper .right .projects_data .data p{
  font-size: 13px;
  margin-bottom: 10px;
  color: #fff;
}

.wrapper .social_media ul{
  display: flex;
}

.wrapper .social_media ul li{
  width: 45px;
  height: 45px;
  background: linear-gradient(to right,#01a9ac,#01dbdf);
  margin-right: 10px;
  border-radius: 5px;
  text-align: center;
  line-height: 45px;
}

.wrapper .social_media ul li a{
  color :#fff;
  display: block;
  font-size: 18px;
}

.wrapper .edit {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #f1f1f1;
  position: absolute;
  top: -10px;
  display: flex;
  justify-content: center;
  align-items: center;
  right: -10px;
  transform: scale(1.3);
}

.wrapper .edit img {
    width: 20px;
}

/* --------------BTN-CHANGE--------------- */

.wrapper .edit .change {
  border:none;
  outline:none;
  width:100%;
  height:100%;
  border-radius: 50%;
  transition: 0.5s ease;
  cursor:pointer;
  background: #1c1b29;
  border: 1px solid #fff;
}

.wrapper .edit .change:hover {
  background:rgba(0,0,0,0.1);
}



/* ------------------------------------------------------------------------------------------------- */
/* ---------------------------------------ZONE EDIT PROFIL------------------------------------------ */

.zone-edit-profil {
  position: fixed;
  width:100%;
  height:100%;
  z-index: 10;
  left: 0;
  top: 70px;
  right: 0;
  bottom: 0;
  background: rgba(0,0,0,0.9);
  display:none;
}


.container-edit-profil {
    width: 100%;
    margin-top: 110px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    z-index: 12;
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    display:none;
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

.container-edit-profil .formulaire .return {
  position: absolute;
  right: 30px;
  top: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  border: none;
  outline: none;
  width: 40px;
  height: 40px;
  background: transparent;
  transition: 0.3s cubic-bezier(.48,.43,.61,.74);
}
.container-edit-profil .formulaire .return:hover {
  transform: rotate(
90deg
);
}
.container-edit-profil .formulaire .return .croix {
  background: crimson;
  width: 35px;
  height: 2px;
  position: absolute;
  padding: 2px;
  border-radius: 999px;
}

.container-edit-profil .formulaire .return .croix:nth-child(1) {
  transform: rotate(
45deg
);
}
.container-edit-profil .formulaire .return .croix:nth-child(2) {
  transform: rotate( 
135deg
 );
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
  color:#fff;
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


/* --------------------------------------------------------------------------------- */
/* --------------------------------------------------------------------------------- */


/* ------------------------------------------------------------------------------------------------- */
/* ---------------------------------------ZONE CHANGE MY PASSWORD------------------------------------------ */

/* .zone-change-password {
  position: fixed;
  width:100%;
  height:100%;
  z-index: 10;
  left: 0;
  top: 70px;
  right: 0;
  bottom: 0;
  background: rgba(0,0,0,0.9);
  display:none;
} */


.container-change-password {
  width: max-content;
  display:none;
}

.container-change-password .titre {
    width: 100%;
    margin-bottom: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.container-change-password .titre h2 {
  font-size: var(--titre-h2);
  text-transform: uppercase;
  color: var(--text);
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
    padding: 30px 0px;
    box-sizing: border-box;
    margin: 0 auto;
    max-width: 1100px;
}

.container-change-password .formulaire h3 {
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


/* ------------------------------------------------------------------------------------------------- */
/* ---------------------------------------ZONE MY ORDERS------------------------------------------ */


.container-my-orders {
  width:max-content;
  display:none;
}

.container-my-orders .titre {
    width: 100%;
    margin-bottom: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.container-my-orders .titre h2 {
  font-size: var(--titre-h2);
  text-transform: uppercase;
  color: var(--text);
}

.container-my-orders .titre p {
  margin-top: 50px;
  color: var(--text);
}

.container-my-orders .error{
  color: red;
  transform: translate(-80px,-25px);
}

.container-my-orders .fields{
  color: red;
  transform: translate(-208px,-25px);
}

.container-my-orders .acount{
  color: red;
  transform: translate(-225px,-25px);
}

.container-my-orders .formulaire {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    padding: 30px 0px;
    box-sizing: border-box;
    margin: 0 auto;
    max-width: 1100px;
}

.container-my-orders .formulaire h3 {
    font-weight: lighter;
    text-transform: uppercase;
    margin-bottom: 50px;
    color:var(--text);
    font-size: 1.6rem;
}

.container-my-orders .formulaire form {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 600px;
}

.container-my-orders .formulaire form label{
  padding: 10px;
  color:var(--text);
}


.container-my-orders .formulaire form .field {
  display: flex;
  flex-direction: column;
  width: 45%;
  margin-bottom: 40px;
}


.container-my-orders .formulaire form input:not(.button) {
  width: 100%;
  color:#000;
}

.container-my-orders .formulaire form input:not(.button):hover {
    border-bottom: 2px solid #6600ff;
}

.container-my-orders .formulaire form input {
    margin: 15px 0;
    padding: 10px;
    box-sizing: border-box;
    border: none;
    outline: none;
    border-bottom: 2px solid var(--text);
    transition: 0.2s;
    background: background: var(--fond);
}


.container-my-orders .formulaire form .button {
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

.container-my-orders .formulaire form .button:hover {
    background: #6600ff;
    color: #fff;
}

.container-my-orders .condition {
  margin-bottom: 20px;
}
.container-my-orders .condition h4 {
  color:var(--text);
}
.container-my-orders .condition p {
  font-size:10px;
  color:var(--condition);
}


/* --------------------------------------------------------------------------------- */
/* --------------------------------------------------------------------------------- */

/* ------------------------------------------------------------------------------------------------- */
/* ---------------------------------------ZONE MY PRODUCTS------------------------------------------ */


.container-my-products {
  width:max-content;
  display:none;
}

.container-my-products .titre {
    width: 100%;
    margin-bottom: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.container-my-products .titre h2 {
  font-size: var(--titre-h2);
  text-transform: uppercase;
  color: var(--text);
}

.container-my-products .titre p {
  margin-top: 50px;
  color: var(--text);
}

.container-my-products .error{
  color: red;
  transform: translate(-80px,-25px);
}

.container-my-products .fields{
  color: red;
  transform: translate(-208px,-25px);
}

.container-my-products .acount{
  color: red;
  transform: translate(-225px,-25px);
}

.container-my-products .formulaire {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    padding: 30px 0px;
    box-sizing: border-box;
    margin: 0 auto;
    max-width: 1100px;
}

.container-my-products .formulaire h3 {
    font-weight: lighter;
    text-transform: uppercase;
    margin-bottom: 50px;
    color:var(--text);
    font-size: 1.6rem;
}

.container-my-products .formulaire form {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 600px;
}

.container-my-products .formulaire form label{
  padding: 10px;
  color:var(--text);
}


.container-my-products .formulaire form .field {
  display: flex;
  flex-direction: column;
  width: 45%;
  margin-bottom: 40px;
}


.container-my-products .formulaire form input:not(.button) {
  width: 100%;
  color:#000;
}

.container-my-products .formulaire form input:not(.button):hover {
    border-bottom: 2px solid #6600ff;
}

.container-my-products .formulaire form input {
    margin: 15px 0;
    padding: 10px;
    box-sizing: border-box;
    border: none;
    outline: none;
    border-bottom: 2px solid var(--text);
    transition: 0.2s;
    background: background: var(--fond);
}


.container-my-products .formulaire form .button {
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

.container-my-products .formulaire form .button:hover {
    background: #6600ff;
    color: #fff;
}

.container-my-products .condition {
  margin-bottom: 20px;
}
.container-my-products .condition h4 {
  color:var(--text);
}
.container-my-products .condition p {
  font-size:10px;
  color:var(--condition);
}


/* --------------------------------------------------------------------------------- */
/* --------------------------------------------------------------------------------- */

/* --------------------------------------------------------------------------------- */
/* -------------------------------------ZONE-UNSUBSCRIBE-------------------------------------------- */

.rgba-unsubscribe {
  position: fixed;
  width:100%;
  height:100%;
  z-index: 10;
  left: 0;
  top: 70px;
  right: 0;
  bottom: 0;
  background: rgba(0,0,0,0.9);
  display:none;
}

.zone-unsubscribe {
  width: 100%;
  display: flex;
  z-index: 12;
  position: fixed;
  left: 40%;
  top: 150px;
  right: 0;
  bottom: 0;
  display:none;
}

.zone-unsubscribe .unsubscribe {
  width: 450px;
  height: 250px;
  z-index: 9;
  background: var(--box-l-d);
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  padding: 25px;
  border-radius: 5px;
}

.zone-unsubscribe h2 {
  font-size: 1.4rem !important;
  width: 100% !important;
  text-align: center;
  margin-bottom: auto;
  margin-top: 10px;
}

.zone-unsubscribe .btn {
  display: flex;
    justify-content: space-between;
    width: 100%;
}

.zone-unsubscribe .button a {
  color:var(--formulaire);
  transition: .3s ease-in-out;
}

.zone-unsubscribe .button {
    width: 192px;
    height: 50px;
    border-radius: 5px;
    border: none;
    outline: none;
    font-weight: lighter;
    cursor: pointer;
    transition: .3s ease-in-out;
    background: var(--color-menu);
    text-transform: uppercase;
}

.zone-unsubscribe .button:hover {
    background: #6600ff;
    color: #fff;
}

.zone-unsubscribe .button:hover a {
    color: #fff;
}


/* --------------------------------------------------------------------------------- */
/* --------------------------------------------------------------------------------- */



.footer {
  top: 100vh;
}


</style>