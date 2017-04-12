<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Taxes Controller
 *
 * @property \App\Model\Table\TaxesTable $Taxes
 */
class TaxesController extends AppController
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
        $taxes = $this->paginate($this->Taxes);

        $this->set(compact('taxes'));
        $this->set('_serialize', ['taxes']);
    }

    /**
     * View method
     *
     * @param string|null $id Tax id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tax = $this->Taxes->get($id, [
            'contain' => ['Clients']
        ]);

        $this->set('tax', $tax);
        $this->set('_serialize', ['tax']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tax = $this->Taxes->newEntity();
        if ($this->request->is('post')) {
            $tax = $this->Taxes->patchEntity($tax, $this->request->getData());
            if ($this->Taxes->save($tax)) {
                $this->Flash->success(__('The tax has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tax could not be saved. Please, try again.'));
        }
        $clients = $this->Taxes->Clients->find('list', ['limit' => 200]);
        $this->set(compact('tax', 'clients'));
        $this->set('_serialize', ['tax']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tax id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tax = $this->Taxes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tax = $this->Taxes->patchEntity($tax, $this->request->getData());
            if ($this->Taxes->save($tax)) {
                $this->Flash->success(__('The tax has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tax could not be saved. Please, try again.'));
        }
        $clients = $this->Taxes->Clients->find('list', ['limit' => 200]);
        $this->set(compact('tax', 'clients'));
        $this->set('_serialize', ['tax']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tax id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tax = $this->Taxes->get($id);
        if ($this->Taxes->delete($tax)) {
            $this->Flash->success(__('The tax has been deleted.'));
        } else {
            $this->Flash->error(__('The tax could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
