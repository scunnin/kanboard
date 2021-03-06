<div class="form-login">
    <h2><?= t('Password Reset') ?></h2>
    <form method="post" action="<?= $this->url->href('PasswordReset', 'save') ?>">
        <?= $this->form->csrf() ?>

        <?= $this->form->label(t('Username'), 'username') ?>
        <?= $this->form->text('username', $values, $errors, array('autofocus', 'required')) ?>

        <?= $this->form->label(t('Enter the text below'), 'captcha') ?>
        <img src="<?= $this->url->href('Captcha', 'image') ?>"/>
        <?= $this->form->text('captcha', array(), $errors, array('required')) ?>

        <div class="form-actions">
            <input type="submit" value="<?= t('Change Password') ?>" class="btn btn-blue"/>
        </div>
    </form>
</div>