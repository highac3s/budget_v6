<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Children Controller
 *
 * @property \App\Model\Table\ChildrenTable $Children
 */
class ChildrenController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $children = $this->paginate($this->Children);

        $this->set(compact('children'));
        $this->set('_serialize', ['children']);
    }

    /**
     * View method
     *
     * @param string|null $id Child id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $child = $this->Children->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('child', $child);
        $this->set('_serialize', ['child']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $child = $this->Children->newEntity();
        if ($this->request->is('post')) {
            $child = $this->Children->patchEntity($child, $this->request->getData());
            if ($this->Children->save($child)) {
                $this->Flash->success(__('The child has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The child could not be saved. Please, try again.'));
        }
        $users = $this->Children->Users->find('list', ['limit' => 200]);
        $this->set(compact('child', 'users'));
        $this->set('_serialize', ['child']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Child id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $child = $this->Children->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $child = $this->Children->patchEntity($child, $this->request->getData());
            if ($this->Children->save($child)) {
                $this->Flash->success(__('The child has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The child could not be saved. Please, try again.'));
        }
        $users = $this->Children->Users->find('list', ['limit' => 200]);
        $this->set(compact('child', 'users'));
        $this->set('_serialize', ['child']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Child id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $child = $this->Children->get($id);
        if ($this->Children->delete($child)) {
            $this->Flash->success(__('The child has been deleted.'));
        } else {
            $this->Flash->error(__('The child could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
