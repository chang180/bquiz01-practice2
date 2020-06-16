<form action="api/add.php" method='post' enctype="multipart/form-data">
    <h3>新增標題區圖片</h3>
    <table>
        <tr>
            <td>標題區圖片</td>
            <td><input type="file" name="name"></td>
        </tr>
        <tr>
            <td>標題區替代文字：</td>
            <td><input type="text" name="text"></td>
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        </tr>
    </table>
    <div class="cent">
        <input type="submit" value="新增"><input type="reset" value="重置">
    </div>
</form>