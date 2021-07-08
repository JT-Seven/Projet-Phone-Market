<?php
/*
Index => Va gerer les page a inclure dans le menu .
		Technique => 	Cela se determinera par l'action d'un clique.
		Dans l'index on initialise une variable qui ,
		a besoin d'etre connu par le menu donc on inclu le menu .
*/


if (isset($_GET["action"])) {
    switch ($_GET["action"]) {

        case "Home":
            $content_for_layout = "View/Home.php";
            $layout = "View/Mainlayout.php";
            break;
        case "Sell":
            $content_for_layout = "Controller/CreateOrInssertMark.php";
            $layout = "View/Mainlayout.php";
            break;
        case "Login":
            $layout = "View/Mainlayout.php";
            $content_for_layout = "Controller/Register.php";
            break;
        case "Register":
            $layout = "View/Mainlayout.php";
            $content_for_layout = "Controller/Register.php";
            break;
        case "Sign up":
            $layout = "View/Mainlayout.php";
            $content_for_layout = "Controller/Register.php";
            break;
        case "SELL":
            $content_for_layout = "Controller/Sell.php";
            $layout = "View/Mainlayout.php";
            break;
        case "Disconnect":
            $layout = "Controller/Logout.php";
            break;
        case "Myaccount":
            $content_for_layout = "Controller/Acount.php";
            $layout = "View/Mainlayout.php";
            break;
        case "MyProducts":
            $content_for_layout = "Controller/MyProducts.php";
            $layout = "View/Mainlayout.php";
            break;
        case "Debug":
            $content_for_layout = "View/Debug.php";
            $layout = "View/Mainlayout.php";
            break;
        case "Store":
            $content_for_layout = "Controller/Store.php";
            $layout = "View/Mainlayout.php";
            break;
        case "EditUser":
        case "EditProfil":

            $content_for_layout = "Controller/EditProfile.php";
            $layout = "View/Mainlayout.php";
            break;
        case "Sell Smartphone":
            $content_for_layout = "Controller/Mark.php";
            $layout = "View/Mainlayout.php";
            break;
        case "Add Mark":
            $content_for_layout = "Controller/CreateMark.php";
            $layout = "View/Mainlayout.php";
            break;
        case "Unsubscribe":
            $layout = "Controller/Unsubscribe.php";
            break;
        case "removeDb":
            $content_for_layout = 'Controller/removeDb.php';
            $layout = "View/Mainlayout.php";
            break;
        case "Update password":
        case "forgot":
            $content_for_layout = 'Controller/reset.php';
            $layout = "View/Mainlayout.php";
            break;
        case "RemoveMark":
        case "ControlMark":
            $content_for_layout = 'Controller/ControlMark.php';
            $layout = "View/Mainlayout.php";
            break;
        case "UpdateMark":
        case "Rename":
            $content_for_layout = 'Controller/UpdateMark.php';
            $layout = "View/Mainlayout.php";
            break;
        case "Messaging":
            $content_for_layout = 'Controller/Messaging.php';
            $layout = "View/Mainlayout.php";
            break;
        case "Next ":
            $content_for_layout = 'Controller/Mark.php';
            $layout = "View/Mainlayout.php";
            break;
        case "Next":
            $content_for_layout = 'Controller/Model.php';
            $layout = "View/Mainlayout.php";
            break;
        case "Removeaccount":
        case "RemoveUser":
            $content_for_layout = 'Controller/Removeaccount.php';
            $layout = "View/Mainlayout.php";
            break;
        case "ConfirmSell":
            $content_for_layout = 'Controller/ConfirmSell.php';
            $layout = "View/Mainlayout.php";
            break;
        case "Contact":
        case "Contacter":
            $content_for_layout = 'Controller/Contact.php';
            $layout = "View/Mainlayout.php";
            break;
        case "RemoveProduct":
            $content_for_layout = 'Controller/MyProducts.php';
            $layout = "View/Mainlayout.php";
            break;
        case "ControlSmartphone":
        case "RemoveSmartphone":
            $content_for_layout = 'Controller/ControlSmartphone.php';
            $layout = "View/Mainlayout.php";
            break;
        case "RemoveFromCart":
        case "EmptyCart":
        case "AddToCart":
        case "Cart":
            $content_for_layout = 'Controller/Cart.php';
            $layout = "View/Mainlayout.php";
            break;
        case "ShowCart":
            $content_for_layout = 'View/Cart.php';
            $layout = "View/Mainlayout.php";
            break;
        case "ShowProduct":
            $content_for_layout = 'Controller/ShowProduct.php';
            $layout = "View/Mainlayout.php";
            break;
        case "checkout":

            $content_for_layout = 'Controller/Checkout.php';
            $layout = "View/Mainlayout.php";
            break;
        case "ChangeMypassword":
        case "Change":
            $content_for_layout = 'Controller/ChangeMypassword.php';
            $layout = "View/Mainlayout.php";
            break;
        case "Create Model":
        case "Next   ":
            $content_for_layout = 'Controller/CreateModel.php';
            $layout = "View/Mainlayout.php";
            break;
        case "RemoveOrder":
        case "Orders":
            $content_for_layout = 'Controller/Order.php';
            $layout = "View/Mainlayout.php";
            break;
        case "Filter":

            $content_for_layout = 'Controller/Filter.php';
            $layout = "View/Mainlayout.php";
            break;
        case "Search":
            $content_for_layout = 'Controller/Search.php';
            $layout = "View/Mainlayout.php";
            break;
        case "EditPicture":
        case "Picture":
            $content_for_layout = "Controller/EditPicture.php";
            $layout = "View/Mainlayout.php";
            break;
        case "RemoveProfilePicture":
            $content_for_layout = "Controller/RemoveProfilePicture.php";
            $layout = "View/Mainlayout.php";
            break;
        case "Profile":
            $content_for_layout = "Controller/Profile.php";
            $layout = "View/Mainlayout.php";
            break;
        case "Confirm Comment":
            case "RemoveComment":

            $content_for_layout = "Controller/Comment.php";
            $layout = "View/Mainlayout.php";
            break;
            case "Removetofavorites":
           case "MyFavorites":
           $content_for_layout = "Controller/MyFavorites.php";
           $layout = "View/Mainlayout.php";
           break;
           case "Android":
            case "Apple":
           $content_for_layout = "Controller/Home.php";
           $layout = "View/Mainlayout.php";
           break;
           case "Faq":
            $content_for_layout = "Controller/Faq.php";
            $layout = "View/Mainlayout.php";
            break;

        default:
            $content_for_layout = "View/Home.php";
            $layout = "View/Mainlayout.php";
            break;
    }
} else {
    header('Location: index.php?action=');
}
if (isset($layout)) {
    include($layout);
}
