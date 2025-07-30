<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Add</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/app.js"></script>
</head>
<body>
    <h1>Product Add</h1>
    
    <form id="product_form" action="/add-product" method="post">
        <div class="form-group">
            <label for="sku">SKU</label>
            <input type="text" id="sku" name="sku" value="<?= isset($_POST['sku']) ? htmlspecialchars($_POST['sku']) : '' ?>" required>
            <?php if (isset($errors['sku'])): ?>
                <span class="error"><?= $errors['sku'] ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>" required>
            <?php if (isset($errors['name'])): ?>
                <span class="error"><?= $errors['name'] ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group">
            <label for="price">Price ($)</label>
            <input type="number" id="price" name="price" step="0.01" min="0" 
                   value="<?= isset($_POST['price']) ? htmlspecialchars($_POST['price']) : '' ?>" required>
            <?php if (isset($errors['price'])): ?>
                <span class="error"><?= $errors['price'] ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group">
            <label for="productType">Type Switcher</label>
            <select id="productType" name="productType" required>
                <option value="">Select a type</option>
                <?php foreach ($productTypes as $type): ?>
                    <option value="<?= $type ?>" 
                        <?= (isset($_POST['productType']) && $_POST['productType'] === $type) ? 'selected' : '' ?>>
                        <?= $type ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <?php if (isset($errors['productType'])): ?>
                <span class="error"><?= $errors['productType'] ?></span>
            <?php endif; ?>
        </div>
        
        <div id="attribute-container" class="attribute-container" style="display: none;">
            <div id="attribute-fields"></div>
            <div id="attribute-description" class="attribute-description"></div>
        </div>
        
        <div class="buttons">
            <button type="submit" id="save-btn">Save</button>
            <a href="/" id="cancel-btn">Cancel</a>
        </div>
    </form>
    
    <footer>Scandiweb Test assignment</footer>
</body>
</html>