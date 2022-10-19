<?php
@session_start();
class c_home {
    public function __construct(){
    }

    public function index() {
        if(isset($_SESSION["logout_user"])){
            $log_user = $_SESSION["logout_user"];
            echo "<script>alert('$log_user')</script>";
            $this->unset_ss(["logout_user"]);
        }else if(isset($_SESSION["welcome_user"])){
            $wel_user = $_SESSION["welcome_user"];
            echo "<script>alert('$wel_user')</script>";
            $this->unset_ss(["welcome_user"]);
        }else if(isset($_SESSION["update_user"])){
            $update_user = $_SESSION["update_user"];
            echo "<script>alert('$update_user')</script>";
            $this->unset_ss(["update_user"]);
        }
        include ("models/m_hang_hoa.php");
        $m_hang_hoa = new m_hang_hoa();
        $like_products = $m_hang_hoa->like_products();
        $product = $m_hang_hoa->read_hang_hoa();
        $view_arr = [];
        foreach ($like_products as $value){
            $view_arr["$value->id"] = $m_hang_hoa->comments_products("$value->id");
        }


        include ("models/m_loai_hang.php");
        $m_loai_hang = new m_loai_hang();
        $loai_hang = $m_loai_hang->read_lh();

        $view = "views/home/v_home.php";
        include ("templates/front-end/layout.php");
    }

    function unset_ss($name_unsets = []){
        foreach($name_unsets as $value){
            unset($_SESSION["$value"]);
        }
    }
}

?>