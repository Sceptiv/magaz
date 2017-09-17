<?php include_once(ROOT.'/views/layouts/header.php');?>
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4 padding-right">
            <?php if($result):?>
            <h2>Данные отредактированы</h2>
            <?php else:?>
            <div class="signup-form">
                <?php if(isset($errors) && is_array($errors)):?>
                    <ul>
                    <?php foreach($errors as $error):?>
                        <li>-<?php echo $error;?>-</li>
                    <?php endforeach;?>
                    </ul>
                <?php endif;?>
                <h2>Редактировать данные</h2>
                <form action="#" method="post">
                    <input type="text" name="name" placeholder="<?= $user['name'];?>">
                    <input type="password" name="password" placeholder="Пароль">
                    <input type="submit" name="submit" class="btn btn-default">
                </form>
            </div>
            <?php endif;?>
            <br/>
            <br/>
        </div>
    </div>
</div>

<?php include_once(ROOT.'/views/layouts/footer.php');?>