<h3 style='text-align: center;'>新增動畫圖片</h3>
        <hr>
        <!-- 這裡的api是在js拿出來的另一個beckend下面的api -->
        <form action="./api/insert.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="">動畫圖片：</label>
                <input type="file" name="img">
            </div>
            <div>
                <input type="hidden" name="table" value="<?=$_GET['table'];?>">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </div>
        </form>