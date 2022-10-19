<?php
@session_start();
include ("models/m_loai_hang.php");
include ("models/m_hang_hoa.php");
include ("models/m_product.php");
class c_product {
    protected $loai_hang;
    protected $hang_hoa;
    protected $product;
    public function __construct()
    {
        $this->loai_hang = new m_loai_hang();
        $this->hang_hoa = new m_hang_hoa();
        $this->product = new m_product();
    }

    public function index() {

        $loai_hang = $this->loai_hang->read_lh();
        $product = $this->detail_product()[0];
        $name_lh = $this->detail_product()[1];
        $commets = $this->detail_product()[2];
        $views_commets = $this->detail_product()[3];
        $related = $this->detail_product()[4];
        $users = [];
        foreach ($commets as $value){
            $users["$value->id"] = $this->product->read_user("$value->id_kh");
        }

        $review = [];
        foreach($related as $value){
            $review["$value->id"] = $this->product->review_product_related("$value->id");
        }

//        echo "<pre>";
//        print_r($review);
//        die();





        if(isset($_POST["commets_sub"])){
            $id = NULL;
            $comment = $_POST["commets"];
            $id_hh = $_GET["id"];
            $id_kh = $_SESSION["info"]->id;
            $binhluan = $this->product->new_commets($id,$comment,$id_kh,$id_hh);
            if($binhluan){
                $_SESSION["comment_succes"] = "commments Thành công";
                 header("location:product.php?id=$product->id&type_product=$product->id_loai");
            }
        }
        // gọi phương thức read_product vào đây ;
        $view = "views/product/v_product.php";
        include ("templates/front-end/layout.php");
    }

    public function detail_product(){
        $id_product = $_GET["id"];
        $id_type = $_GET["type_product"];
        $product = NULL;
        $name_lh = NULL;
        if(!empty($id_product) && !empty($id_type)){
            $product = $this->hang_hoa->detail_product("$id_product");
            $name_lh = $this->hang_hoa->read_lh("$id_type");
        }

        $commets = $this->product->read_commets("$id_product");
        $views = $this->product->read_view_commets("$id_product");
        $read_related_product = $this->product->read_related_product("$id_type");



        return [$product,$name_lh,$commets,$views,$read_related_product];
    }

    public function products(){
        $loai_hang = $this->loai_hang->read_lh();
        $product = NULL;
        $All_product = NULL;
        if(isset($_GET["id_type"])){
            $id_type = $_GET["id_type"];
            $product = $this->product->read_related_product("$id_type");
        }else {
            $All_product = $this->product->read_product();
        }

        $view = "views/product/v_products.php";
        include ("templates/front-end/layout.php");
    }



}
?>