<?php include_once "base.php"; ?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">進站總人數管理</p>
    <form method="post" action="./api/total.php">
        <table width="100%">
            <tbody>
                <tr>
                    <td width="50%" style="background:yellow;text-align:right">進站總人數</td>
                    <td width="50%"><input type="number" name="total" value="<?=$Total->find(1)['total'];?>"></td>
                </tr>
                

            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                    <input type="hidden" name="table" value="<?= $table; ?>">
                </tr>
            </tbody>
        </table>

    </form>
</div>