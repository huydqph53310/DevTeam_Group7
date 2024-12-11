<?php 
class Cart extends ConnectDatabase {
    public function Cart(){
        if($_SESSION["id"]){
            $totalAmount = 1;
            $cart = (new Carts())->getListProductByIdUser($_SESSION["id"]);
            if (isset($_POST["upQuantity"]) && isset($_POST["product_id"])   ) {
                // $userId = 5; // ID của user hiện tại (lấy từ session hoặc cookie)
                // $productId = $_POST['product_id'];
                // $quantity = $_POST['quantity'];
                (new AddCart())->AddCart($_SESSION["id"],$_POST["product_id"], 1 );
            }
            if (isset($_POST["downQuantity"])  && isset($_POST["product_id"])) {
                // $userId = 5; // ID của user hiện tại (lấy từ session hoặc cookie)
                // $productId = $_POST['product_id'];
                // $quantity = $_POST['quantity'];
                (new AddCart())->AddCart($_SESSION["id"],$_POST["product_id"], -1 );
            }
            if(isset($_POST["delete"] )){
                // var_dump($_POST["cid"]);
                (new BillModel())->DelItem($_POST["cid"]);
                header("Location: ?wh=cart");
                exit;
            }
            include  "app/view/Header.php";
            include  "app/view/User/Cart.php";
            include  "app/view/Footer.php";
        }else{
            header("location: ?wh=home");
        }
    }
}