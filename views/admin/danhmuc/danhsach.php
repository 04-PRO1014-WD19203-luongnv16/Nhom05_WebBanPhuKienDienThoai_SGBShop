<div class="content">
   <div class="contentqldm">
        <div class="danhsachdm">
            <table border="1px">
                <tr>
                   <td>Mã danh mục</td>
                   <td>Tên danh mục</td>
                   <td>Biểu tượng danh mụ</td> 
                   <td>Tùy chọn</td>
                </tr>
                <?php
                foreach($danhsach as $danhmuc){
                    $id=$danhmuc["ma_danhmuc"];
                ?>
                <tr>
                    <td><?php echo $danhmuc["ma_danhmuc"]?></td>
                    <td><?php echo $danhmuc["ten_danhmuc"]?></td>
                    <td><?php echo $danhmuc["anh_danhmuc"]?></td>
                    <td><a href="?act=suadm&id=<?php echo $id?>"><button>Sửa</button></a> | <a href="?act=xoadm&id=<?php echo $id;?>"><button return onclick="confirm('chắc chưa?')">Xóa</button></a></td>
                </tr>
                <?php
                }
                ?>
            </table>
            <a href="?act=themdm"><button>Thêm</button></a>
        </div>

   </div>
</div>