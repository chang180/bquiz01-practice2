<?php include_once "base.php"; ?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">選單管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="15%">主選單名稱</td>
                    <td width="15%">選單連結網址</td>
                    <td width="15%">次選單數</td>
                    <td width="15%">顯示</td>
                    <td width="15%">刪除</td>
                    <td></td> 
                </tr>
                <?php
                $table = $do;
                $db = new DB($table);
                $rows = $db->all(['parent'=>0]);
                foreach ($rows as $row) {

                ?>
                    <tr class="cent">
                        <td><input type="text" name="name[]" value="<?= $row['name']; ?>"></td>
                        <td><input type="text" name="text[]" value="<?= $row['text']; ?>"></td>
                        <td><?=$Menu->count(['parent'=>$row['id']]);?></td>
                        <td><input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?=($row['sh']==1)?"checked":"";?>></td>
                        <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
                        <td><input type="button" onclick="op('#cover','#cvr','modal/sub<?= $table; ?>.php?id=<?=$row['id'];?>&table=<?= $table; ?>')" value="編輯次選單"></td>
                        <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','modal/<?= $table; ?>.php?table=<?= $table; ?>')" value="新增主選單"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                    <input type="hidden" name="table" value="<?= $table; ?>">
                </tr>
            </tbody>
        </table>

    </form>
</div>