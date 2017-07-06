<?php $this->Html->css('nouislider.min', array('inline' => false)); ?>
<?php $this->Html->script('nouislider.min', array('inline' => false)); ?>
<?php $this->assign('title', 'Questionaire') ?>

<h1>Questions</h1>

<div class= 'row'>
  <div class="col s6 offset-s3">
    <?php
      echo $this->Form->create('Question', array(
        'inputDefaults' => array('label' => false)));
        echo "<label>What is your name?<label>";
        echo $this->Form->input('firstname');

        echo "<label>How are you feeling?<label>";
        echo "<p class=\"range-field\">";
        echo $this->Form->range('mood', array("min"=>"0", "max"=>"100"));
        echo "</p>";
      echo $this->Form->submit('Submit', array('class' => "waves-effect waves-light btn"));
      echo $this->Form->end();
     ?>
  </div>
</div>
