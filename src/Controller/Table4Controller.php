<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;


/**
 * Table4 Controller
 *
 * @property \App\Model\Table\Table4Table $Table4
 * @method \App\Model\Entity\Table4[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class Table4Controller extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
//        $table4 = $this->paginate($this->Table4);
//
//        $this->set(compact('table4'));

        $key = $this->request->getQuery('key');
        if($key)
        {
            //$table4 = TableRegistry::get('table4');
            $query = $this->Table4->find('all')
                                    ->where(['OR'=>['Substances like'=>'%'.$key.'%', 'RelatedInformation like'=>'%'.$key.'%' ]]);
            $this->set('results', $query);
        }
        else {

            $querys = $this->Table4;
//            echo 'ERROR';

            $table4 = TableRegistry::get('table4');
            $query = $table4->find();
            $this->set('results', $query);

        }

    }

    /**
     * View method
     *
     * @param string|null $id Table4 id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $table4 = $this->Table4->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('table4'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $table4 = $this->Table4->newEmptyEntity();
        if ($this->request->is('post')) {
            $table4 = $this->Table4->patchEntity($table4, $this->request->getData());
            if ($this->Table4->save($table4)) {
                $this->Flash->success(__('The table4 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The table4 could not be saved. Please, try again.'));
        }
        $this->set(compact('table4'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Table4 id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $table4 = $this->Table4->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $table4 = $this->Table4->patchEntity($table4, $this->request->getData());
            if ($this->Table4->save($table4)) {
                $this->Flash->success(__('The table4 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The table4 could not be saved. Please, try again.'));
        }
        $this->set(compact('table4'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Table4 id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $table4 = $this->Table4->get($id);
        if ($this->Table4->delete($table4)) {
            $this->Flash->success(__('The table4 has been deleted.'));
        } else {
            $this->Flash->error(__('The table4 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
