<?php include_once "base.php"; ?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="70%">校園映像資料圖片</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $table = $do;
                $db = new DB($table);

                $total=$db->count('');
                $div=3;
                $pages=ceil($total/$div);
                $now=$_GET['p']??1;
                $start=($now-1)*$div;

                $rows = $db->all([]," limit $start,$div");
                foreach ($rows as $row) {
                    $isChk = ($row['sh']) ? "checked" : 0;

                ?>
                    <tr class="cent">
                        <td><img src="img/<?= $row['name']; ?>" style="width:150px;height:80px;"></td>
                        <td><input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= $isChk; ?>></td>
                        <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
                        <td><input type="button" value="更換圖片" onclick="op('#cover','#cvr','modal/upload_<?= $table; ?>.php?id=<?= $row['id']; ?>&table=<?= $table; ?>')"></td>
                        <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>

        <div class="cent">
<?php
if(($now-1)>0){
    echo "<a href='admin.php?do=image&p=".($now-1)."'> < </a>";
}

for($i=1;$i<=$pages;$i++){
    $fontsize=($now==$i)?"24px":"16px";
    echo "<a href='admin.php?do=image&p=$i' style='font-size:$fontsize'> $i </a>";
}
                if(($now+1)<$pages){
                    echo "<a href='admin.php?do=image&p=".($now+1)."'> > </a>";
                }
?>


        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','modal/<?= $table; ?>.php?table=<?= $table; ?>')" value="新增校園映像圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                    <input type="hidden" name="table" value="<?= $table; ?>">
                </tr>
            </tbody>
        </table>

    </form>
</div>