<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

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
            margin-top: 40px;
        }

        form {
            width: 60%;
            max-width: 500px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        form input,
        form textarea {
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <h1>Edit Product</h1>
    <form action="<?= base_url('product/update/' . $product['id']) ?>" method="POST">
        <label for="id">Product Id:</label>
        <input type="text" name="id" value="<?= $product['id'] ?>" required><br><br>

        <label for="name">Product Name:</label>
        <input type="text" name="name" value="<?= $product['name'] ?>" required><br><br>

        <label for="description">Description:</label>
        <textarea name="description"><?= $product['description'] ?></textarea><br><br>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" value="<?= $product['price'] ?>" required><br><br>

        <button type="submit">Update Product</button>
    </form>
</body>

</html>