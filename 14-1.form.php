<?php $title = 'quick!' ?>
<?php include __DIR__. '/parts/config.php'; ?>
<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>

    <div class="container">
       <div class="row">
           <div class="col-lg-6">
               <pre>
                   <?php print_r($_GET) ?>
               </pre>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <form>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <!-- for對應到input的name -->
                            <input type="text" class="form-control" id="email" name="email">
                            <!-- 要有name這個欄位才能送值出去 -->
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <!-- 要有name這個欄位才能送值出去 -->
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

