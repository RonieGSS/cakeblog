<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Login'), ['action' => 'login']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">

    <?= $this->Form->create($user) ?>
      <fieldset>
        <legend><?= __('Sign Up Form') ?></legend>
        <div class="form-group row">
        </div>
        <div class="form-group">

          <?= $this->Form->control('email', ['placeholder' => 'Enter email',
                                             'id' => 'inputEmail',
                                             'class' => 'form-control',
                                             'aria-describedby' => 'emailHelp']) ?>
        </div>
        <div class="form-group">
    
          <?= $this->Form->control('phone', ['placeholder' => 'Enter phone',
                                             'id' => 'inputPhone',
                                             'class' => 'form-control',
                                             'aria-describedby' => 'phoneHelp']) ?>
        </div>
        <div class="form-group">

          <?= $this->Form->control('password', ['placeholder' => 'Password',
                                                'id' => 'inputPassword',
                                                'class' => 'form-control',
                                                'type' => 'password',
                                                ]) ?>
        </div>
        
        <?= $this->Form->button(__('Sign Up'), ['class' => 'btn btn-primary']) ?>
      </fieldset>
    <?= $this->Form->end() ?>
</div>
