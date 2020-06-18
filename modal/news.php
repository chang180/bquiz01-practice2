<form action="api/add.php" method='post' enctype="multipart/form-data">
    <h3>新增消息資料管理</h3>
    <table>
        <tr>
            <td>最新消息資料：</td>
            <td><textarea name="text" cols="60" rows="5"></textarea></td>
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        </tr>
    </table>
    <div class="cent">
        <input type="submit" value="新增"><input type="reset" value="重置">
    </div>
</form>