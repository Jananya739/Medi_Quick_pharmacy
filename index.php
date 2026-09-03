<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediQuick Pharmacy</title>
<link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">

<div class="container">

<a class="navbar-brand" href="index.php">
MediQuick Pharmacy
</a>

<div>

<a class="btn btn-light" href="login.php">
Login
</a>

<a class="btn btn-warning" href="register.php">
Register
</a>

</div>

</div>

</nav>

<div class="container mt-5">

<h1>Welcome to MediQuick Pharmacy</h1>

<p>
Safe and convenient online pharmaceutical services.
</p>

<div class="row">

<?php foreach ($products as $product): ?>

<div class="col-md-3 mb-4">

<div class="card h-100">

<?php if ($product["image"]): ?>

<img
src="assets/images/<?= htmlspecialchars($product["image"]) ?>"
class="card-img-top">

<?php endif; ?>

<div class="card-body">

<h5>
<?= htmlspecialchars($product["product_name"]) ?>
</h5>

<p>
Rs. <?= number_format($product["price"], 2) ?>
</p>

<a
href="customer/product-details.php?id=<?= $product["product_id"] ?>"
class="btn btn-primary">

View Product

</a>

</div>

</div>

</div>

<?php endforeach; ?>

</div>

</div>

</body>
</html>