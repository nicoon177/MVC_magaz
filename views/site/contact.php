<?php include ROOT . '/views/layouts/header.php'; ?>


<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if ($result): ?>
                    <p>Повідомлення надіслано! Чекайте на відповідь на вказаному email</p>
                <?php else: ?>      

                <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>   
                </ul>
                <?php endif; ?>   

                <div class="signup-form">
                    <h2>Зворотній відгук</h2>
                    <h5>Винекло питаня? Задайте його нам.</h5>
                    <br>
                    
                    <form action="#" method="post">
                        <p>Ваша пошта:</p> 
                        <input type="email" name="userEmail" placeholder="Email" value="<?php echo $userEmail; ?>">
                        <p>Повідомлення:</p>
                        <input type="text" name="userText" placeholder="Повідомлення для відправлення" value="<?php echo $userText; ?>">
                        <input type="submit" name="submit" class="btn btn-defoult" value="Відправити">
                    </form> 
                </div>

                <?php endif; ?>

                <br><br>
            </div>

        </div>
    </div>
</section>


<?php include ROOT . '/views/layouts/footer.php'; ?>