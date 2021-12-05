<?php
require_once 'app/views/layout/header.php';
?>

<head>
    <style>
    .success {
        text-align: center;
        padding: 12%;
    }

    button.button {
        border-radius: 40px;
        background-color: orange;
        height: 53px;
    }
    </style>
</head>
<div class="success">
    <h3 class="texts">Đặt hàng thành công</h3>
    <button class="button"><a href="index">Quay về trang chủ</a></button>
</div>


<?php
require_once 'app/views/layout/footer.php';
?>