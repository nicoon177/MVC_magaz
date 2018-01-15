<?php include ROOT . '/views/layouts/header.php'; ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Каталог</h2>
                            <div class="panel-group category-products">

                                <?php foreach($categories as $categoryItem): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/category/<?php echo $categoryItem['id']; ?>" class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"><?php echo $categoryItem['name']; ?></a>
                                        </h4>
                                    </div>
                                </div>
                                <?php endforeach; ?>

                            </div>

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="product-details">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="view-product">
                                        <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="product-information">
                                        <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                                        <h2><?php echo $product['name']; ?></h2>
                                        <p>Код товара: <?php echo $product['code']; ?></p>
                                        <span>
                                            <span>US $<?php echo $product['price']; ?></span>
                                            <label>Кількість:</label>
                                            <input type="text" value="1" />
                                            <button type="button" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                В корзину
                                            </button>
                                        </span>
                                        <p><b>Наявність:</b> <?php echo Product::getAvailabilyText($product['availability']); ?></p>
                                        <p><b>Стан:</b> Новий</p>
                                        <p><b>Виробник:</b> <?php echo $product['brand']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">                                
                                <div class="col-sm-12">
                                    <h5>Опис товара</h5>
                                    <?php echo $product['description']; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


<?php include ROOT . '/views/layouts/footer.php'; ?>