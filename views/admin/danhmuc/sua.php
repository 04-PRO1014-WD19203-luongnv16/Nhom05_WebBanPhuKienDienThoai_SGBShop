<div class="content">
    <div class="contentqldm">
        <div class="themdm">
            <h1>Thêm Danh Mục</h1>
        </div>
        <div class="formadddm">
            <form action="?act=capnhat" method="post">
                <div class="madm">
                    <div class="label">
                        <label for="iddm">Mã danh mục</label>
                    </div>
                    <div class="value">
                        <input type="text" name="madm" disabled placeholder="Mã danh mục">
                    </div>
                </div>
                <div class="tendm">
                    <div class="label">
                        <label for="tendm">Tên danh mục</label>
                    </div>
                    <div class="value">
                        <input type="text" name="tendm" value="<?php echo $danhmuc["ten_danhmuc"] ?>">
                    </div>
                </div>
                <div class="icondm">
                    <div class="label">
                        <label for="icondm">Biểu tượng</label>
                    </div>
                    <div class="value">
                        <input type="text" name="icondm" value="<?php echo $danhmuc["anh_danhmuc"] ?>">
                    </div>
                </div>
                <input type="hidden" value="<?php echo $danhmuc["ma_danhmuc"]?>" name="madm">
                <div class="buttondm">
                    <a href="?act=capnhat"><input type="submit" name="capnhatdm" value="Sửa"></a>
                    <a href="?act=danhsachdm"><input type="button" name="danhsachdm" value="Danh Sách"></a>
                </div>
            </form>
        </div>
    </div>
</div>