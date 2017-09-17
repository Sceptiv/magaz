<?php require_once(ROOT.'/views/layouts/header.php');?>
<section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Каталог</h2>
                            <div class="panel-group category-products">
                                <?php foreach($categories as $categoryItem):?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="/category/<?= $categoryItem['id']?>"><?= $categoryItem['name'];?></a></h4>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-9 padding-right">
                        <div class="product-details"><!--product-details-->
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="view-product">
                                        <img src="<?= $product['image']?>" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="product-information"><!--/product-information-->
                                        <img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                        <h2><?= $product['name']?></h2>
                                        <p>Код товара: <?= $product['code']?></p>
                                        <span>
                                            <span><?= $product['price']?> грн.</span>
                                            <label>Количество:</label>
                                            <input type="text" value="1" name="count"/>
                                            <a href="/cart/add/<?= $product['id'];?>" data-id="<?= $product['id'];?>" type="button" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                В корзину
                                            </a>
                                        </span>
                                        
                                        <p><b>Наличие:</b> На складе</p>
                                        <?php if($product['is_new'] == 1):?>
                                        <p><b>Состояние:</b> Новое</p>
                                        <?php else:?>
                                        <p><b>Состояние:</b> Б/У</p>
                                        <?php endif;?>
                                        <p><b>Производитель:</b> <?= $product['brand']?></p>
                                    </div><!--/product-information-->
                                </div>
                            </div>
                            <div class="row">                                
                                <div class="col-sm-12">
                                    <h5>Описание товара</h5>
                                    <p><?= $product['description']?></p>
                                </div>
                            </div>
                        </div><!--/product-details-->

                    </div>
                </div>
            </div>
        </section>
        

        <br/>
        <br/>
        
<?php require_once(ROOT.'/views/layouts/footer.php');?>
        