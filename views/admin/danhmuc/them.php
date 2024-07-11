<div class="content">
    <div class="contentqldm">
        <div class="themdm">
            <h1>Thêm Danh Mục</h1>
        </div>
        <div class="formadddm">
            <form action="?act=themdm" method="post">
                <div class="madm">
                    <div class="label">
                        <label for="iddm">Mã danh mục</label>
                    </div>
                    <div class="value">
                        <input type="text" name="madm" disabled>
                    </div>
                </div>
                <div class="tendm">
                    <div class="label">
                        <label for="tendm">Tên danh mục</label>
                    </div>
                    <div class="value">
                        <input type="text" name="tendm">
                    </div>
                </div>
                <div class="icondm">
                    <div class="label">
                        <label for="icondm">Biểu tượng</label>
                    </div>
                    <div class="value">
                        <input type="text" name="icondm">
                    </div>
                </div>
                <span><?php echo isset($themok)? $themok:""; ?></span>
                <div class="buttondm">
                    <a href="?act=themdm"><input type="submit" name="themdm" value="Thêm"></a>
                    <a href="?act=danhsachdm"><input type="button" name="danhsachdm" value="Danh Sách"></a>
                    <a href=""><button type="reset">Nhập Lại</button></a>
                </div>
            </form>
        </div>
    </div>
</div>