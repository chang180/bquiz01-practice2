<form action="api/add.php" method='post' enctype="multipart/form-data">
    <h3>新增管理者帳號</h3>
    <table>
        <tr>
            <td>帳號：</td>
            <td><input type="text" name="acc"></td>
        </tr>
        <tr>
            <td>密碼：</td>
            <td><input type="password" name="pw"></td>
        </tr>
        <tr>
            <td>確認密碼：</td>
            <td><input type="password" name="pw1"></td>
        </tr>
    </table>
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    <div class="cent">
        <input type="submit" value="新增"><input type="reset" value="重置">
    </div>
</form>