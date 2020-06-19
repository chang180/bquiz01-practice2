

<form action="api/update.php" method='post' enctype="multipart/form-data">
    <h3>更新標題區圖片</h3>
    <table>
        <tr>
            <td>標題區圖片</td>
            <td><input type="file" name="name"></td>
        </tr>
    </table>
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    <div class="cent">
        <input type="submit" value="更新"><input type="reset" value="重置">
    </div>
</form>