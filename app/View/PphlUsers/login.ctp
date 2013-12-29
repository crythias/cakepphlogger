<div class="pphlusers form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('PphlUser'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('pw');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
