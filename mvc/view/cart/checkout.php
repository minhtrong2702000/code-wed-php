
<div class="col-md-9">
    <h2>Check Out</h2>
    <div class="row btn-success">
        <?php
        if (isset($_SESSION['msg'])) 
        {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
    </div>
    <div class="row">
        <form method=post action='' >

            <table>
            <tr>
                    <td class="col-md-3"><label>Họ và Tên</label></td>
                    <td><input type='text' name='inputFullName' required></td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Địa Chỉ</label></td>
                    <td><input type='text' name='inputAddress' required></td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>SĐT</label></td>
                    <td><input type='phone' name='inputPhone' required></td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Email</label></td>
                    <td><input type='email' name='inputEmail' required></td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Ghi Chú</label></td>
                    <td><textarea name='inputNote' cols="30" rows="5"></textarea></td>
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