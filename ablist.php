<?php
require __DIR__. '/parts/config.php';

$stmt = $pdo->query("SELECT * FROM address_book");

$rows = $stmt->fetchAll(); // 取得一筆

// // echo json_encode($row);

// $data = [];

// while($row = $stmt->fetch()){
//     $data[] = $row;
// }
// header('Content-Type: application/json');
// echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">mobile</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($rows as $r): ?>
            <tr>
                <td><?= $r['sid'] ?></td>
                <td><?= $r['name'] ?></td> 
                <td><?= $r['email'] ?></td> 
                <td><?= $r['mobile'] ?></td>  
            </tr>
            <?php endforeach; ?>    
        </tbody>
    </table>
</div>
    

<?php include __DIR__. '/parts/scripts.php'; ?>
<?php include __DIR__. '/parts/html-foot.php'; ?>
