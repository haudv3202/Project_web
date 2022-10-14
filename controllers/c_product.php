<?php
@session_start();
class c_product {
    protected $loai_hang;
    protected $hang_hoa;
    public function __construct()
    {
        include ("models/m_loai_hang.php");
        include ("models/m_hang_hoa.php");
        $this->loai_hang = new m_loai_hang();
        $this->hang_hoa = new m_hang_hoa();
    }

    public function index() {
        $loai_hang = $this->loai_hang->read_lh();
        $product = $this->detail_product()[0];
        $name_lh = $this->detail_product()[1];
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
        return [$product,$name_lh];
    }
}
?>