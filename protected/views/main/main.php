<?php

$this->pageTitle = Yii::app()->name . ' - Main';

?>

<div class="row">
    <?php echo CHtml::link('Logout', Yii::app()->createUrl('logout')); ?>
</div>

<div id="users">
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <div class="user">
                    <div class="id"><?php echo $user->id ?></div>
                    <div class="email"><?php echo $user->email ?></div>
                    <div class="company"><?php echo $user->company ?></div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

</div>
