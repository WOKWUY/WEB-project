<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>
<?php
$product = new product;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //var_dump($_POST, $_FILES);
    $insert_product = $product -> insert_product($_POST, $_FILES);
}
?>

<div class="admin-content-right">
            <div class="admin-content-right-product-add">
                <h1>Thêm sản phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_name" required type="text">
                    <label for="">Danh mục <span style="color: red;">*</span></label>
                    <select required name="cartegory_id" id="cartegory_id">
                        <option value="">--Chọn danh mục--</option>    
                        <?php
                        $show_cartegory = $product->show_cartegory();
                        if($show_cartegory){while($result = $show_cartegory ->fetch_assoc()){
                        ?>
                        
                        <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                        <?php
                        }}
                        ?>
                    </select>
                    <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
                    <select required name="brand_id" id="brand_id">    
                        <option value="">--Chọn loại SP--</option>
                        <?php
                        $show_brand = $product->show_brand();
                        if($show_brand){while($result = $show_brand ->fetch_assoc()){
                        ?>
                        
                        <option value="<?php echo $result['brand_id'] ?>"><?php echo $result['brand_name'] ?></option>
                        <?php
                        }}
                        ?>
                    </select>
                    <label for="">Giá <span style="color: red;">*</span></label>
                    <input name="product_price" required type="text">
                    <label for="">Khuyến mãi <span style="color: red;">*</span></label>
                    <input name="product_sale_price" required type="text">
                    <label for="">Mô tả sản phẩm <span style="color: red;">*</span></label>
                    <textarea required name="product_detail" id="" cols="30" rows="10"></textarea>
                    <label for="">Ảnh sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_img" required type="file">
                    <label for="">Ảnh mô tả <span style="color: red;">*</span></label>
                    <input name="product_img_detail[]" required multiple type="file">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>