<?php
class PagesController extends AppController {
  public $helpers = array('Form', 'Html', 'Js', 'Time');
  
  public function homepage() {
    $this->layout = 'phq9';
  }

}
