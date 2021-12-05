<?php
require_once 'app/views/layout/header.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<style>
a {
    text-decoration: none;
    color: black;
}

ul {
    list-style: none;
}

section.shop.checkout.section {
    margin-bottom: 12%;
}

h2.pb-3 {
    margin-top: 8%;
    margin-bottom: 2%;
}

h2.p-4 {
    margin: 8% 0px;
}

button.btn {
    margin-left: 33px;
    background-color: orange;
}
</style>


<!-- Start Checkout -->
<section class="shop checkout section">
    <div class="container">
        <form class="form" method="post" action="payment">
            <?php if (isset($_SESSION['cart'])) : ?>
            <?php foreach ($_SESSION['cart'] as $item) : ?>
            <div style="display:none">
                <input type="text" name="productId" value=<?= $item['id'] ?>>
                <input type="text" name="quantity" value=<?= $item['quantity'] ?>>
                <input type="text" name="price" value=<?= $item['price'] ?>>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="checkout-form">
                        <h2 class="pb-3">Thông tin thanh toán</h2>
                        <!-- Form -->
                        <div class="row">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label>Tên<span>*</span></label><br>
                                    <input type="text" name="firstname" placeholder="">
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-group">
                                    <label>Địa chỉ email<span>*</span></label><br>
                                    <input type="email" name="email" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Số điện thoại<span>*</span></label><br>
                                    <input type="text" name="phone" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Địa chỉ<span>*</span></label><br>
                                    <textarea type="text" name="address" rows="2" cols="50"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Ghi chú<span>*</span></label>
                                    <br>
                                    <textarea type="text" name="note" rows="5" cols="50"></textarea>
                                </div>
                            </div>
                        </div>

                        <!--/ End Form -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="order-details">
                        <!-- Order Widget -->
                        <div class="single-widget">
                            <h2 class="p-4">Tổng giỏ hàng</h2>
                            <div class="content">
                                <ul>
                                    <li class="last">Tổng thanh toán : <span id="totalCounter"></span></li>
                                </ul>
                            </div>
                        </div>
                        <!--/ End Order Widget -->

                        <!-- Button Widget -->
                        <div class="single-widget get-button">
                            <div class="content">
                                <div class="button">
                                    <button type="submit" name="btn" class="btn">Thanh toán</button>
                                </div>
                            </div>
                        </div>
                        <!--/ End Button Widget -->
                    </div>
                </div>
            </div>
        </form>

    </div>
</section>
<!--/ End Checkout -->
<script>
document.getElementById("totalCounter").innerHTML = `${localStorage.getItem('totalCounter')}.000 VND`;
</script>
<?php
require_once 'app/views/layout/footer.php';
?>