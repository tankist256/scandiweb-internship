document.addEventListener('DOMContentLoaded', function() {
    const productType = document.getElementById('productType');
    const attributeContainer = document.getElementById('attribute-container');
    const attributeFields = document.getElementById('attribute-fields');
    const attributeDescription = document.getElementById('attribute-description');
    
    if (productType) {
        productType.addEventListener('change', function() {
            const type = this.value;
            
            if (type) {
                attributeContainer.style.display = 'block';
                attributeFields.innerHTML = '';
                
                switch (type) {
                    case 'DVD':
                        attributeFields.innerHTML = `
                            <div class="form-group">
                                <label for="size">Size (MB)</label>
                                <input type="number" id="size" name="size" min="1" required>
                                ${getErrorHTML('size')}
                            </div>
                        `;
                        attributeDescription.textContent = "Please provide size in MB";
                        break;
                        
                    case 'Book':
                        attributeFields.innerHTML = `
                            <div class="form-group">
                                <label for="weight">Weight (KG)</label>
                                <input type="number" id="weight" name="weight" step="0.01" min="0.01" required>
                                ${getErrorHTML('weight')}
                            </div>
                        `;
                        attributeDescription.textContent = "Please provide weight in KG";
                        break;
                        
                    case 'Furniture':
                        attributeFields.innerHTML = `
                            <div class="form-group">
                                <label for="height">Height (CM)</label>
                                <input type="number" id="height" name="height" step="0.01" min="0.01" required>
                                ${getErrorHTML('height')}
                            </div>
                            <div class="form-group">
                                <label for="width">Width (CM)</label>
                                <input type="number" id="width" name="width" step="0.01" min="0.01" required>
                                ${getErrorHTML('width')}
                            </div>
                            <div class="form-group">
                                <label for="length">Length (CM)</label>
                                <input type="number" id="length" name="length" step="0.01" min="0.01" required>
                                ${getErrorHTML('length')}
                            </div>
                        `;
                        attributeDescription.textContent = "Please provide dimensions in HxWxL format";
                        break;
                }
            } else {
                attributeContainer.style.display = 'none';
            }
        });
        
        if (productType.value) {
            productType.dispatchEvent(new Event('change'));
        }
    }
    
    function getErrorHTML(fieldName) {
        return `<?php if (isset($errors['${fieldName}'])): ?>
            <span class="error"><?= $errors['${fieldName}'] ?></span>
        <?php endif; ?>`;
    }
});