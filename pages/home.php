<?php 

require_once 'app/models/Product.php';
require_once 'app/models/Order.php';
require_once 'app/models/OrderItem.php';
require_once 'app/models/Setting.php';

$user = $_SESSION['user'] ?? null;
if (!$user) {
    header('Location: pages/auth/signin.php');
    exit;
}

$productModel = new App\Models\Product();
$products = $productModel->getAll();

$orderModel = new App\Models\Order();
$orderItemModel = new App\Models\OrderItem();
$orders = $orderModel->getByUserId($user['id']);

$settingModel = new App\Models\Setting();
$settings = $settingModel->getSettings();
$social_media = $settings['social_media'] ?? [];
$cs_support = $settings['cs_support'] ?? [];
$whatsapp_number = $settings['whatsapp_number'] ?? '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Dashboard</title>
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="navbar">
        <div class="brand"><?= htmlspecialchars($settings['store_name'] ?? 'Store') ?></div>
        <div class="profile" id="profileLink">
            <img src="https://picsum.photos/200/300" alt="Avatar" />
            <span><?= htmlspecialchars($user['name']) ?></span>
            <div class="dropdown">
                <a href="profile">Profile</a>
                <a href="logout">Logout</a>
                <?php if ($user['role'] == 'admin'): ?>
                <a href="admin">Admin Dashboard</a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <h1>Products</h1>
        <div class="row" id="product-list">
            <?php foreach ($products as $product): ?>
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="<?= htmlspecialchars($product['image_url']) ?>" class="card-img-top" alt="<?= htmlspecialchars($product['name']) ?>" />
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= htmlspecialchars($product['name']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($product['description']) ?></p>
                        <p class="card-text fw-bold">Price: $<?= htmlspecialchars($product['price']) ?></p>
                        <button class="btn btn-primary mt-auto add-to-cart" data-id="<?= $product['id'] ?>" data-name="<?= htmlspecialchars($product['name']) ?>" data-price="<?= $product['price'] ?>">Add to Cart</button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <h2>Cart</h2>
        <div id="cart" class="mb-3">
            <ul class="list-group" id="cart-items"></ul>
            <p id="cart-total" class="mt-2 fw-bold">Total: $0.00</p>
            <button id="checkout-btn" class="btn btn-success" disabled>Checkout</button>
        </div>

        <h2>Order History</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= htmlspecialchars($order['id']) ?></td>
                    <td>$<?= htmlspecialchars($order['total_price']) ?></td>
                    <td><?= htmlspecialchars($order['status']) ?></td>
                    <td><?= htmlspecialchars($order['created_at']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Customer Support Popup -->
    <div id="cs-popup" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
        <button id="cs-toggle" class="btn btn-info">CS Support</button>
        <div id="cs-menu" class="card p-3" style="display: none; min-width: 200px;">
            <h5>Contact CS</h5>
            <ul class="list-unstyled">
                <?php foreach ($cs_support as $key => $value): ?>
                <li><a href="<?= htmlspecialchars($value) ?>" target="_blank"><?= htmlspecialchars(ucfirst($key)) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <script src="assets/javascript/main.js"></script>
    <script>
        // Toggle CS support menu
        document.getElementById('cs-toggle').addEventListener('click', function () {
            const menu = document.getElementById('cs-menu');
            menu.style.display = menu.style.display === 'none' ? 'block' : 'none';
        });
    </script>
</body>

</html>
