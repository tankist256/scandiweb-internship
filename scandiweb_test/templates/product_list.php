<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1>Product List</h1>
    
    <form id="product_list_form" action="/delete" method="post">
        <div class="actions">
            <a href="/add-product" class="btn">ADD</a>
            <button type="submit" name="delete" id="delete-product-btn">MASS DELETE</button>
        </div>
        
        <div class="product-grid">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <input type="checkbox" class="delete-checkbox" name="selected_products[]" value="<?= $product['id'] ?>">
                    <div class="product-sku"><?= htmlspecialchars($product['sku']) ?></div>
                    <div class="product-name"><?= htmlspecialchars($product['name']) ?></div>
                    <div class="product-price"><?= htmlspecialchars($product['price']) ?> $</div>
                    <div class="product-attribute">
                        <?php 
                        switch ($product['type']) {
                            case 'DVD':
                                echo "Size: " . htmlspecialchars($product['size']) . " MB";
                                break;
                            case 'Book':
                                echo "Weight: " . htmlspecialchars($product['weight']) . " KG";
                                break;
                            case 'Furniture':
                                echo "Dimension: " . htmlspecialchars($product['height'] . "x" . 
                                     htmlspecialchars($product['width']) . "x" . 
                                     htmlspecialchars($product['length']) . '');
                                break;
                        }
                        ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </form>
    
    <footer>Scandiweb Test assignment</footer>
</body>
</html>