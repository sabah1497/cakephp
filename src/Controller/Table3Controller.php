<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * Table3 Controller
 *
 * @property \App\Model\Table\Table3Table $Table3
 * @method \App\Model\Entity\Table3[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class Table3Controller extends AppController
{

//    public function beforeFilter(Event $event)
//    {
//        parent::beforeFilter($event);
//        // Set the layout.
//        $this->viewBuilder()->setLayout('Table22');
//    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
//        $table3 = $this->paginate($this->Table3);
//
//        $this->set(compact('table3'));



        $key = $this->request->getQuery('key');
        if($key)
        {
            //$table4 = TableRegistry::get('table4');
            $query = $this->Table3->find('all')
                ->where(['OR'=>['Substances like'=>'%'.$key.'%', 'RelatedInformation like'=>'%'.$key.'%' ]]);
            $this->set('results', $query);
        }
        else {

            $querys = $this->Table3;
//            echo 'ERROR';

            $table3 = TableRegistry::get('table3');
            $query = $table3->find();
            $this->set('results', $query);

        }

//ATTEMPT

//        public function index()
//        {
////        $table3 = $this->paginate($this->Table3);
////
////        $this->set(compact('table3'));
//
//
//
//
//        $key = $this->request->getQuery('key');
//        if($key)
//        {
//            //$table4 = TableRegistry::get('table4');
//            $query = $this->Table3->Table22->find('all')
//                ->where(['OR'=>['Table3.Substances like'=>'%'.$key.'%', 'Table22.SubstanceID']]);
//            $this->set('results', $query);
////            dump($query);
//        }
//        else {
//
//            $querys = $this->Table3;
//           echo 'ERROR';
//
//            $table3 = TableRegistry::get('table3');
//            $query = $table3->find();
//            $this->set('results', $query);
//
//
//            $table22 = TableRegistry::get('table22');
//            $query = $table22->find();
//            $this->set('results', $query);
//
//
//
//        }




//
//        $table3 =TableRegistry::get('table3');
//        $query = $table3->find();
//        $this->set('results',$query);
    }

    /**
     * View method
     *
     * @param string|null $id Table3 id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $table3 = $this->Table3->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('table3'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $table3 = $this->Table3->newEmptyEntity();
        if ($this->request->is('post')) {
            $table3 = $this->Table3->patchEntity($table3, $this->request->getData());
            if ($this->Table3->save($table3)) {
                $this->Flash->success(__('The table3 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The table3 could not be saved. Please, try again.'));
        }
        $this->set(compact('table3'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Table3 id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $table3 = $this->Table3->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $table3 = $this->Table3->patchEntity($table3, $this->request->getData());
            if ($this->Table3->save($table3)) {
                $this->Flash->success(__('The table3 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The table3 could not be saved. Please, try again.'));
        }
        $this->set(compact('table3'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Table3 id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $table3 = $this->Table3->get($id);
        if ($this->Table3->delete($table3)) {
            $this->Flash->success(__('The table3 has been deleted.'));
        } else {
            $this->Flash->error(__('The table3 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
