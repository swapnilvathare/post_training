<?php
/**
 * Created by JetBrains PhpStorm.
 * User: swapnil
 * Date: 11/2/13
 * Time: 7:23 PM
 * To change this template use File | Settings | File Templates.
 */
class PostsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index(){
        $this->layout = 'bootswatch';
        $this->set('posts',$this->Post->find('all'));
    }
    public function view($id = null){
        if (!$id){
            throw new NotFoundException(_('Invalid post'));
        }
        $post = $this -> Post -> findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }

    public function add() {
        $this->layout = 'bootswatch';
        $this->set('posts',$this->Post->find('all'));
        if ($this->request->is('post')) {
            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your post.');
            }
        }
    }

}