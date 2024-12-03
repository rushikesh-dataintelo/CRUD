<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
            padding: 20px 0;
        }

        form {
            display: inline-block;
            margin: 20px 0;
            text-align: center;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }

        button:hover {
            background-color: #45a049;
        }

        .alert {
            margin: 10px auto;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            width: 80%;
            max-width: 500px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a,
        button {
            text-decoration: none;
            background-color: #f1f1f1;
            color: #333;
            padding: 5px 10px;
            border-radius: 5px;
            margin-right: 10px;
        }

        a:hover,
        button:hover {
            background-color: #ddd;
        }

        form button {
            background-color: #f44336;
            color: white;
        }

        form button:hover {
            background-color: #e53935;
        }

        @media (max-width: 600px) {
            table {
                width: 100%;
            }

            h1 {
                font-size: 24px;
            }

            button {
                width: 100%;
                font-size: 18px;
            }
        }
    </style>
</head>

<body>
    <h1>Product List</h1>

    <form action="<?= base_url('/product/create') ?>" method="GET" style="text-align: center; margin-top: 20px;">
        <button type="submit">Add New Product</button>
    </form>

    <?php if (session()->getFlashdata('message')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <?php if (empty($products)): ?>
        <p>No products found.</p>
    <?php else: ?>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td>
                        <a href="<?= site_url('product/edit/' . $product['id']) ?>">Edit</a> |
                        <form action="<?= base_url('product/delete/' . $product['id']) ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')">
                            <?= csrf_field(); ?>
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>

</html>