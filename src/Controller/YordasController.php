<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * Yordas Controller
 *
 * @property \App\Model\Table\YordasTable $Yordas
 * @method \App\Model\Entity\Yorda[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class YordasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
//        $yordas = $this->paginate($this->Yordas);

        $yordas =TableRegistry::get('yordas');
        $query = $yordas->find();
        $this->set('results',$query);
//        $this->set('yordas', $this->Yordas->find()->all());
    }

    /**
     * View method
     *
     * @param string|null $id Yorda id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
//    public function view($id = null)
//    {
//        $yorda = $this->Yordas->get($id, [
//            'contain' => [],
//        ]);
//
//        $this->set(compact('yordas'));
//    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
//    public function add()
//    {
//        $yorda = $this->Yordas->newEmptyEntity();
//        if ($this->request->is('post')) {
//            $yorda = $this->Yordas->patchEntity($yorda, $this->request->getData());
//            if ($this->Yordas->save($yorda)) {
//                $this->Flash->success(__('The yorda has been saved.'));
//
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('The yorda could not be saved. Please, try again.'));
//        }
//        $this->set(compact('yorda'));
//    }
//
//    /**
//     * Edit method
//     *
//     * @param string|null $id Yorda id.
//     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
//     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
//     */
//    public function edit($id = null)
//    {
//        $yorda = $this->Yordas->get($id, [
//            'contain' => [],
//        ]);
//        if ($this->request->is(['patch', 'post', 'put'])) {
//            $yorda = $this->Yordas->patchEntity($yorda, $this->request->getData());
//            if ($this->Yordas->save($yorda)) {
//                $this->Flash->success(__('The yorda has been saved.'));
//
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('The yorda could not be saved. Please, try again.'));
//        }
//        $this->set(compact('yorda'));
//    }
//
//    /**
//     * Delete method
//     *
//     * @param string|null $id Yorda id.
//     * @return \Cake\Http\Response|null|void Redirects to index.
//     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
//     */
//    public function delete($id = null)
//    {
//        $this->request->allowMethod(['post', 'delete']);
//        $yorda = $this->Yordas->get($id);
//        if ($this->Yordas->delete($yorda)) {
//            $this->Flash->success(__('The yorda has been deleted.'));
//        } else {
//            $this->Flash->error(__('The yorda could not be deleted. Please, try again.'));
//        }
//
//        return $this->redirect(['action' => 'index']);
//    }
}
