<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Forecasts Controller
 *
 * @property \App\Model\Table\ForecastsTable $Forecasts
 */
class ForecastsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Accounts']
        ];
        $forecasts = $this->paginate($this->Forecasts);

        $this->set(compact('forecasts'));
        $this->set('_serialize', ['forecasts']);
    }

    /**
     * View method
     *
     * @param string|null $id Forecast id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $forecast = $this->Forecasts->get($id, [
            'contain' => ['Users', 'Accounts']
        ]);

        $this->set('forecast', $forecast);
        $this->set('_serialize', ['forecast']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $forecast = $this->Forecasts->newEntity();
        if ($this->request->is('post')) {
            $forecast = $this->Forecasts->patchEntity($forecast, $this->request->getData());
            if ($this->Forecasts->save($forecast)) {
                $this->Flash->success(__('The forecast has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The forecast could not be saved. Please, try again.'));
        }
        $users = $this->Forecasts->Users->find('list', ['limit' => 200]);
        $accounts = $this->Forecasts->Accounts->find('list', ['limit' => 200]);
        $this->set(compact('forecast', 'users', 'accounts'));
        $this->set('_serialize', ['forecast']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Forecast id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $forecast = $this->Forecasts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $forecast = $this->Forecasts->patchEntity($forecast, $this->request->getData());
            if ($this->Forecasts->save($forecast)) {
                $this->Flash->success(__('The forecast has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The forecast could not be saved. Please, try again.'));
        }
        $users = $this->Forecasts->Users->find('list', ['limit' => 200]);
        $accounts = $this->Forecasts->Accounts->find('list', ['limit' => 200]);
        $this->set(compact('forecast', 'users', 'accounts'));
        $this->set('_serialize', ['forecast']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Forecast id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $forecast = $this->Forecasts->get($id);
        if ($this->Forecasts->delete($forecast)) {
            $this->Flash->success(__('The forecast has been deleted.'));
        } else {
            $this->Flash->error(__('The forecast could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
