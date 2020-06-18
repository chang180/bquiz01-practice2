<form action="api/add.php" method='post' enctype="multipart/form-data">
    <h3>新增動畫圖片</h3>
    <table>
        <tr>
            <td>動畫圖片</td>
            <td><input type="file" name="name"></td>
        </tr>
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    </table>
    <div class="cent">
        <input type="submit" value="新增"><input type="reset" value="重置">
    </div>
</form>