<!DOCTYPE html>
<html>
    <head>
        <title>Shop bán táo</title>
    </head>
    <body>
        
        <h2>Shop bán Iphone</h2>
        <hr>

        <form action="." method = "post">
            <input type="hidden" name = 'action' value = 'add'>
            <label>Sản phẩm: </label>
            <select name = "productscode">
                <?php 
                    foreach($products as $key => $product) :                   
                        $cost = number_format($product['cost'],3);
                        $name = $product['name'];
                        $item = $name . ' ('. $cost . ' VNĐ)';       
                ?>
                    <option value="<?php echo $key; ?>">
                        <?php echo $item; ?>
                    </option>
                <?php endforeach; ?>
            </select><br>

            <label>Số lượng: </label>
            <select name = "itemqty">
                <?php 
                    for($i = 1 ; $i <= 10; $i++):
                ?>

                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
                        
                <?php endfor; ?>

            </select><br>
            <input type="submit" value="Them">
        </form>

        <a href=".?action=show_cart">Giỏ hàng</a>
    </body>
</html>