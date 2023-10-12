<!DOCTYPE html>
<html>
    <head>
        <title>Shop bán Táo</title>
    </head>
    <body>
        <h1>Giỏ hàng</h1>
        <hr>
        <?php if(empty($_SESSION['cart12'])) :?>
            
            <h2>Không có sản phẩm trong giỏ hàng</h2>
        
        <?php else :?>
            <form action="." method="post">
                <input type="hidden" name = 'action' value = 'update'>
                <table>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                    </tr>
                    <?php foreach( $_SESSION['cart12'] as $key => $item ):?>
                        <tr>
                            <td><?php echo $item['name'] ?></td>
                            <td><?php echo $item['cost'] ?></td>
                            <td> <input type="text" name = "newqty[<?php echo $key; ?>]" value =  <?php echo $item['qty']; ?> require></td>
                            <td><?php echo number_format($item['total'],3) ?></td>
                        </tr>
                    <?php endforeach ?>
                </table>
                <input type="submit" value="cập nhật">
            </form>
            <h3>Tiền tổng các sản phẩm : <?php echo getsubtotal();?> VNĐ</h3>
        <?php endif ?>

        <a href=".?action=show_add_item">Thêm sản phẩm</a>
        <a href=".?action=delete_all">Xóa hết</a>
    </body>
</html>