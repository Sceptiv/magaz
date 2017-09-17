<?php include_once ROOT.'/views/layouts/header.php';?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <?php if(isset($errors) && is_array($errors)):?>
                    <ul>
                    <?php foreach($errors as $error):?>
                        <li>-<?php echo $error;?>-</li>
                    <?php endforeach;?>
                    </ul>
                <?php endif;?>
                
                
                <div class="signup-form">
                    <h2>Авторизация</h2>
                    <form action="" method="post">           
                        <input type="email" placeholder="E-mail" name="email" value="<?= $email;?>"/>
                        <input type="password" placeholder="Пароль" name="password" value="<?= $password;?>"/>
                        <input type="submit" name="submit" class="btn btn-default">
                    </form>
                    
                </div>
                
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include_once ROOT.'/views/layouts/footer.php';?>
