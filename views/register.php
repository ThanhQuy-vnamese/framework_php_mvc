<?php
use App\Core\Form\Form;
?>
<h1>Register</h1>
<?php $form =  Form::begin('', 'post') ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'firstname') ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'lastname') ?>
        </div>
    </div>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>
    <?php echo $form->field($model, 'passwordRepeat')->passwordField() ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php Form::end() ?>
<!--<form action="" method="post">-->
<!--    <div class="row">-->
<!--        <div class="col">-->
<!--            <div class="mb-3">-->
<!--                <label for="firstname" class="form-label">Firstname</label>-->
<!--                <input type="text" class="form-control --><?php //echo $model->hasError('firstname') ? ' is-invalid' : 'sss' ?><!--" value="--><?php //echo $model->firstname ?><!--" name="firstname" id="firstname">-->
<!--                <div class="invalid-feedback">-->
<!--                    --><?php //echo $model->getError('firstname'); ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col">-->
<!--            <div class="mb-3">-->
<!--                <label for="lastname" class="form-label">Lastname</label>-->
<!--                <input type="text" class="form-control" name="lastname" id="lastname">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="mb-3">-->
<!--        <label for="email" class="form-label">Email</label>-->
<!--        <input type="text" class="form-control" name="email" id="email">-->
<!--    </div>-->
<!--    <div class="mb-3">-->
<!--        <label for="password" class="form-label">Password</label>-->
<!--        <input type="password" class="form-control" name="password" id="password">-->
<!--    </div>-->
<!--    <div class="mb-3">-->
<!--        <label for="passwordRepeat" class="form-label">Password Repeat</label>-->
<!--        <input type="password" class="form-control" name="passwordRepeat" id="passwordRepeat">-->
<!--    </div>-->
<!--    <button type="submit" class="btn btn-primary">Submit</button>-->
<!--</form>-->
