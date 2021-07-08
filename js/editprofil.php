<script>
const BtnEdit = document.getElementById("button-edit");
const EditProfil = document.querySelector(".container-edit-profil");
const Zone = document.querySelector(".zone-edit-profil");
const BTN = document.querySelector(".return");

BtnEdit.addEventListener('click', () => {
    Zone.style.display = "block";
    EditProfil.style.display = "block";
    if(BTN.addEventListener('click', () => {
        Zone.style.display = "none";
        EditProfil.style.display = "none";
    }));
});

const BtnUnsubscribe= document.getElementById("unsubscribe");
const EditUnsubscribe = document.querySelector(".zone-unsubscribe");
const ZoneUnsubscribe = document.querySelector(".rgba-unsubscribe");
const BtnNo = document.getElementById("no");

BtnUnsubscribe.addEventListener('click', () => {
    ZoneUnsubscribe.style.display = "block";
    EditUnsubscribe.style.display = "block";
    if(BtnNo.addEventListener('click', () => {
        ZoneUnsubscribe.style.display = "none";
        EditUnsubscribe.style.display = "none";
    }));
});

</script>