<?php $this->assign('title', 'Welcome to your PHQ9') ?>
<div>
  <h1><?php echo
    $this->Html->link(
    'Inkblot',
    'https://inkblottherapy.com/');
    ?>
  </h1>
</div>

<h4>
  <?php echo
      $this->Html->link(
      'Questionaire',
      array('controller' => 'pages', 'action' => 'questions')
  ); ?>
</h4>
