<?php $this->Html->css('nouislider.min', array('inline' => false)); ?>
<?php $this->Html->script('nouislider.min', array('inline' => false)); ?>
<?php $this->assign('title', 'Questionaire') ?>

<h1>Questions</h1>

<div class= 'row'>
  <div class="col s6 offset-s3">
    <?php
      echo $this->Form->create('Question');
      echo $this->Form->input('firstname');
      echo $this->Form->input('mood');
      echo $this->Form->submit('Submit', array('class' => "waves-effect waves-light btn"));
      echo $this->Form->end();
     ?>
  </div>
</div>
