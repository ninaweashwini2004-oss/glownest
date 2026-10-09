
document.addEventListener('DOMContentLoaded', function () {

    const categories = document.querySelectorAll('.category-item');
    const products = document.querySelectorAll('.product-card');

    categories.forEach(function (category) {

        category.addEventListener('click', function (event) {
            event.preventDefault();

            const selectedCategory = category.dataset.category;

             // Update category heading
            const heading = document.getElementById('products-title');

                 const categoryNames = {
                    all: 'All Products',
                    skincare: 'Skincare Products',
                    makeup: 'Makeup Products',
                    haircare: 'Haircare Products',
                    accessories: 'Beauty Accessories',
                    fragrance: 'Fragrance Products'
                   };

heading.textContent = categoryNames[selectedCategory] || 'All Products';

            products.forEach(function (product) {

                const productCategory = product.dataset.category;

                if (
                    selectedCategory === 'all' ||
                    productCategory === selectedCategory
                ) {
                    product.style.display = '';
                } else {
                    product.style.display = 'none';
                }

            });

            categories.forEach(function (item) {
                item.classList.remove('active');
            });

            category.classList.add('active');
        });

    });

});