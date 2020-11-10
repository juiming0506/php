<?php include __DIR__. '/parts/config.php'; ?>
<?php
if(isset($_POST['account']) and isset($_POST['password'])){
    if($_POST['account']==='judy' and $_POST['password']==='1234'){
        $_SESSION['user'] = [
            'acount' => 'judy',
            'nickname' => 'msjeudi'
        ];
    } else {
        $msg = '帳號或密碼錯誤';
    }   
}
?>


<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>

    <div class="container">
       <div class="row">
           <div class="col-lg-6">
                <?php if(isset($msg)): ?>
                    <div class="alert alert-danger" role="alert">
                            <?= $msg ?>
                    </div>
                <?php endif; ?>
               <pre>
                   <?php print_r($_POST) ?>
               </pre>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="account">account address</label>
                            <!-- for對應到input的name -->
                            <input type="text" class="form-control" id="account" name="account" value="<?= isset ($_POST['account']) ? htmlentities($_POST['account']) : '' ?>">
                            <!-- 要有name這個欄位才能送值出去，如果值有"會破壞到html的值，htmlentities做跳脫，isset判斷變數是否有值存在 -->
                            <small class="form-text"><?= $_POST['account'] ?? '' ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?= isset ($_POST['password']) ? htmlentities($_POST['password']) : '' ?>">
                            <small class="form-text"><?= $_POST['password'] ?></small>
                            <!-- 要有name這個欄位才能送值出去，如果值有"會破壞到html的值，htmlentities做跳脫，isset判斷變數是否有值存在 -->
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="my_check" value="是">
                            <!-- 要有name這個欄位才能送值出去 -->
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
           </div>
       </div>
    </div>
    

<?php include __DIR__. '/parts/scripts.php'; ?>
<?php include __DIR__. '/parts/html-foot.php'; ?>

