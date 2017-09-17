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
                                        <h4 class="panel-title"><a  href="/category/<?= $categoryItem['id']?>" class="<?php if($categoryId == $categoryItem['id']) echo 'active';?>"><?= $categoryItem['name'];?></a></h4>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Последние товары</h2>
                            <?php foreach($categoryProduct as $productItem):?>
                            <div class="col-sm-4"> 
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?= $productItem['image'];?>" alt="" />
                                            <h2><?= $productItem['price'];?></h2>
                                            <p><a href="/product/<?= $productItem['id'];?>"><?= $productItem['id'];?><?= $productItem['name'];?></a></p>
                                            <a href="/cart/add/<?= $productItem['id'];?>" data-id="<?= $productItem['id'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                            <!--Постраничная навигация-->
                            <div class="paginationBlock"><?php echo $pagination->get();?></div>
                        </div><!--features_items-->

                        

                    </div>
                </div>
            </div>
        </section>

<?php require_once(ROOT.'/views/layouts/footer.php');?>