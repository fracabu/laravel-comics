<div class="products-container">
    <div class="row row-cols-6">
        <div class="col py-3" v-for="product in products" :key="product.series">
            <ProductCard :card-title="product.series" :imgUrl="product.thumb">
            </ProductCard>
        </div>
    </div>
</div>