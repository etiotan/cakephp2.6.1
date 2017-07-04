<?php
class PostsController extends AppController {
  public $helper = array('Html', 'Form');


  public function index() {
    $this->set('posts', $this->Post->find('all'));
  }

  public function view($id = null) {
    $post = $this->Post->findById($id);
    if (!$id){
      throw new NotfoundException(__('Invalid Post'));
    }
    if (!$post){
      throw new NotfoundException(__('Invalid Post'));
    }
    $this->set('post', $post);
  }

  public function add() {
    if ($this->request->is('post')){
      $this->Post->create();
      if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Your post has been saved.');
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash('Unable to add your post.');
    }
  }

  public function edit($id = null) {
    $post = $this->Post->findById($id);
    if (!$id) {
    throw new NotFoundException(__('Invalid post'));
    }
    if (!$post) {
        throw new NotFoundException(__('Invalid post'));
    }
    if ($this->request->is(array('post', 'put'))) {
        $this->Post->id = $id;
        if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash('Your post has been updated.');
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash('Unable to update your post.');
    }

    if (!$this->request->data) {
        $this->request->data = $post;
    }
  }
  public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Post->delete($id)) {
        $this->Session->setFlash
            ('The post has been deleted.');
    } else {
        $this->Session->setFlash
            ('The post with id: %s could not be deleted.');
    }

    return $this->redirect(array('action' => 'index'));
}



}
