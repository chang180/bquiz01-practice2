<form action="api/add.php" method='post' enctype="multipart/form-data">
    <h3>新增主選單</h3>
    <table>
        <tr>
            <td>主選單名稱：</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>選單連結網址：</td>
            <td><input type="text" name="text"></td>
        </tr>
    </table>
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    <div class="cent">
        <input type="submit" value="新增"><input type="reset" value="重置">
    </div>
</form>