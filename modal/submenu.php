<form action="api/submenu.php" method='post' enctype="multipart/form-data">
    <h3>編輯次選單</h3>
    <hr>
    <?php
    include_once "../base.php";
    $table = $_GET['table'];
    $id = $_GET['id'];
    $db = new DB($table);
    $subs = $db->all(['parent' => $id]);

    ?>
    <table id="submenu">
        <tr>
            <td>次選單名稱</td>
            <td>次選單連結網址</td>
            <td>刪除</td>
        </tr>
        <?php
        foreach ($subs as $key => $value) {


        ?>

            <tr>
                <td><input type="text" name="name[]" value="<?= $value['name']; ?>"></td>
                <td><input type="text" name="text[]" value="<?= $value['text']; ?>"></td>
                <td><input type="checkbox" name="del[]" value="<?= $value['id']; ?>"></td>
                <input type="hidden" name="id[]" value="<?= $value['id']; ?>">
            </tr>
        <?php
        }
        ?>

    </table>
    <input type="hidden" name="parent" value="<?= $id; ?>">
    <input type="hidden" name="table" value="<?= $table; ?>">
    <div class="cent">
        <input type="submit" value="修改確定">
        <input type="reset" value="重置">
        <input type="button" value="更多次選單" onclick="moreSub()">
    </div>
</form>


<script>
    function moreSub() {
        let row = `<tr>
            <td><input type="text" name="name2[]"></td>
            <td><input type="text" name="text2[]"></td>
            <td><input type="checkbox" name="del[]" value=""></td>
        </tr>
    `;
        $("#submenu").append(row);
    }
</script>