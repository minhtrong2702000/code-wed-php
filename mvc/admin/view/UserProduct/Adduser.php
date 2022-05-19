<div class="col-md-9">
    <h2>Đăng Ký Tài Khoản</h2>
    <div class="row btn-success">
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
    </div>
    <div class="row">
        <form method=post action='' enctype='multipart/form-data'>

            <table>
                <tr>
                    <td class="col-md-3"><label>User Name</label></td>
                    <td><input type='text' name='inputUserName' required></td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Full Name</label></td>
                    <td><input type='text' name='inputFullName'></td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Pass</label></td>
                    <td>
                    <input type='text' name='inputPass'>
                    </td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Email</label></td>
                    <td>
                    <input type='text' name='inputEmail'>
                    </td>
                </tr>
                <tr>
                    <td class="col-md-3"><label>Status</label></td>
                    <td>
                        <select name="inputStatus">
                            <option value=0>Ẩn</option>
                            <option value=1>Hiện</option>
                        </select>
                    </td>
                </tr>


                <tr>
                <td>
                    <input type=submit name=submit value="Nhập">
                    <input type=Reset name=Reset value=Reset>
                </td>
                </tr>

                </tr>
            </table>
        </form>
    </div>
</div>