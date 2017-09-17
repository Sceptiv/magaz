<?php include_once ROOT.'/views/layouts/header.php';?>
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4 padding-right">
            <?php if($result):?>
                <p>Сообщение отправлено! мы ответим Вам на указанный E-mail</p>
            <?php else:?>
                <?php if(isset($errors) && is_array($errors)):?>
                <ul>
                    <?php foreach($errors as $error):?>
                        <li>-<?= $error;?>-</li>
                    <?php endforeach;?>
                </ul>
                <?php endif;?>
                
                <div class="signup-form">
                    <h2>Обратная свзяь</h2>
                    <h5>Есть вопросы ? напишите нам!</h5>
                    <br/>
                    <form action="#" method="post">
                        <p>Ваша почта</p>
                            <input type="email" name="userEmail" placeholder="E-mail" value="<?= $userEmail;?>"/>
                        
                            <p>Сообщение</p>
                            <input type="text" name="userText" placeholder="Текст сообщения" value="<?= $userText;?>"/>
                        
                        <br/>
                        <input type="submit" name="submit" class="btn btn-default" value="Отправить"/>
                        
                    </form>
                    
                </div>
            <?php endif;?>   
                <br/>
                <br/>
        </div>
    </div>
</div>

<?php include_once ROOT.'/views/layouts/footer.php';?>
