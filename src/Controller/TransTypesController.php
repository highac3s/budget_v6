<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TransTypes Controller
 *
 * @property \App\Model\Table\TransTypesTable $TransTypes
 */
class TransTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients']
        ];
        $transTypes = $this->paginate($this->TransTypes);

        $this->set(compact('transTypes'));
        $this->set('_serialize', ['transTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Trans Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transType = $this->TransTypes->get($id, [
            'contain' => ['Clients', 'Transactions']
        ]);

        $this->set('transType', $transType);
        $this->set('_serialize', ['transType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transType = $this->TransTypes->newEntity();
        if ($this->request->is('post')) {
            $transType = $this->TransTypes->patchEntity($transType, $this->request->getData());
            if ($this->TransTypes->save($transType)) {
                $this->Flash->success(__('The trans type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trans type could not be saved. Please, try again.'));
        }
        $clients = $this->TransTypes->Clients->find('list', ['limit' => 200]);
        $this->set(compact('transType', 'clients'));
        $this->set('_serialize', ['transType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Trans Type id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transType = $this->TransTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transType = $this->TransTypes->patchEntity($transType, $this->request->getData());
            if ($this->TransTypes->save($transType)) {
                $this->Flash->success(__('The trans type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trans type could not be saved. Please, try again.'));
        }
        $clients = $this->TransTypes->Clients->find('list', ['limit' => 200]);
        $this->set(compact('transType', 'clients'));
        $this->set('_serialize', ['transType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Trans Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transType = $this->TransTypes->get($id);
        if ($this->TransTypes->delete($transType)) {
            $this->Flash->success(__('The trans type has been deleted.'));
        } else {
            $this->Flash->error(__('The trans type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
