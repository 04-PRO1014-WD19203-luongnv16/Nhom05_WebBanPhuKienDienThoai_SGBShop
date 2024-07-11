<div class="content">
    <div class="formtaikhoan">
        <div class="dangnhaptaikhoan">
            <div class="nameform">
                <h2>ĐĂNG NHẬP</h2>
            </div>
            <span class="loitaikhoan">
                <p><?php echo isset($loidn["saitt"]) ? $loidn["saitt"] : ""; ?></p>
            </span>
            <form action="?act=dangnhap" method="post">
                <div class="contentformdn">
                    <div class="tendangnhap">
                        <div class="titleinput">
                            <label for="tendn">Tên đăng nhập *</label>
                        </div>
                        <div class="valueinput">
                            <input type="text" id="tennd" name="tendn" value="<?php echo isset($tendn)?$tendn:"";?>">
                            <span class="loitaikhoan">
                                <p><?php echo isset($loidn['tendn']) ? $loidn['tendn'] : ""; ?></p>
                            </span>
                        </div>
                    </div>
                    <div class="matkhau">
                        <div class="titleinput">
                            <label for="matkhau">Mật khẩu *</label>
                        </div>
                        <div class="valueinput">
                            <input type="password" id="matkhau" name="matkhaudn" value="<?php echo isset($matkhau)?$matkhau:"";?>">
                            <span class="loitaikhoan">
                                <p><?php echo isset($loidn['matkhaudn']) ? $loidn['matkhaudn'] : ""; ?></p>
                            </span>
                        </div>
                    </div>
                    <div class="luuvaquen">
                        <div class="luutk">
                            <input type="checkbox">
                            <label for="">Ghi nhớ đăng nhập</label>
                        </div>
                        <div class="quentk">
                            <a href="">Quên tài khoản?</a>
                        </div>
                    </div>
                    <div class="btntaikhoan">
                        <input type="submit" name="dangnhap" value="Đăng Nhập">
                    </div>
                </div>
            </form>
        </div>
        <div class="dangkytaikhoan">
            <div class="nameform">
                <h2>ĐĂNG KÝ</h2>
            </div>
            <span class="dangkytc">
                <p><?php echo isset($message) ? $message : ""; ?></p>
            </span>
            <form action="?act=dangky" method="post">
                <div class="contentformdk">
                    <div class="tennguoidung">
                        <div class="titleinput">
                            <label for="tennd">Tên người dùng *</label>
                        </div>
                        <div class="valueinput">
                            <input type="text" id="tennd" name="tennguoidungdk" value="<?php echo isset($tennd)?$tennd:"";?>">
                            <span class="loitaikhoan">
                                <p><?php echo isset($loidk["tennd"]) ? $loidk["tennd"] : ""; ?></p>
                            </span>
                        </div>
                    </div>
                    <div class="tendangnhap">
                        <div class="titleinput">
                            <label for="tendn">Tên đăng nhập *</label>
                        </div>
                        <div class="valueinput">
                            <input type="text" id="tennd" name="tendangnhapdk" value="<?php echo isset($tendndk)?$tendndk:"";?>">
                            <span class="loitaikhoan">
                                <p><?php echo isset($loidk["tendndk"]) ? $loidk["tendndk"] : ""; ?></p>
                            </span>
                            <span class="loitaikhoan">
                                <p><?php echo isset($loidk["tentontai"]) ? $loidk["tentontai"] : ""; ?></p>
                            </span>
                        </div>
                    </div>
                    <div class="matkhau">
                        <div class="titleinput">
                            <label for="matkhau">Mật khẩu *</label>
                        </div>
                        <div class="valueinput">
                            <input type="password" id="matkhau" name="matkhaudk" value="<?php echo isset($matkhaudk)?$matkhaudk:"";?>">
                            <span class="loitaikhoan">
                                <p><?php echo isset($loidk["matkhaudk"]) ? $loidk["matkhaudk"] : ""; ?></p>
                            </span>
                            <span class="loitaikhoan">
                                <p><?php echo isset($loidk["dodaimkdk"]) ? $loidk["dodaimkdk"] : ""; ?></p>
                            </span>
                        </div>
                    </div>
                    <div class="matkhau">
                        <div class="titleinput">
                            <label for="matkhau">Nhập lại mật khẩu *</label>
                        </div>
                        <div class="valueinput">
                            <input type="password" id="matkhau" name="matkhaunhaplai" value="<?php echo isset($matkhaunl)?$matkhaunl:"";?>">
                            <span class="loitaikhoan">
                                <p><?php echo isset($loidk["matkhaunl"]) ? $loidk["matkhaunl"] : ""; ?></p>
                            </span>
                            <span class="loitaikhoan">
                                <p><?php echo isset($loidk["nlsai"]) ? $loidk["nlsai"] : ""; ?></p>
                            </span>
                        </div>
                    </div>
                    <div class="chinhsach">
                        <p>Thông tin cá nhân của bạn sẽ được sử dụng để tăng cường trải nghiệm sử dụng website, để quản lý truy cập vào tài khoản của bạn, và cho các mục đích cụ thể khác được mô tả trong <a href="">chính sách riêng tư</a> của chúng tôi.</p>
                    </div>
                    <div class="btntaikhoan">
                        <input type="submit" name="dangky" value="Đăng Ký">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>