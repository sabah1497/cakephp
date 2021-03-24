<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\Table3;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * Table22 Controller
 *
 * @property \App\Model\Table\Table22Table $Table22
 * @method \App\Model\Entity\Table22[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class Table22Controller extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function index()
    {
        //$table22 = $this->paginate($this->Yordas);


        $key = $this->request->getQuery('key');
        if($key)
        {
            //$table4 = TableRegistry::get('table4');
            $query = $this->Table22->find('all')
                ->where(['OR'=>['ECnumber like'=>'%'.$key.'%', 'CASnumber like'=>'%'.$key.'%' ]]);
            $this->set('results', $query);
        }
        else {

            $querys = $this->Table22;
//           echo 'ERROR';

            $table22 = TableRegistry::get('table22');
            $query = $table22->find();
            $this->set('results', $query);
//        $this->set('yordas', $this->Yordas->find()->all());

        }
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
//    public function index()
//    {
//////        $table2 = $this->paginate($this->Table22);
////
////        $table2 = $table2->find('all');
////        $this->set('table2',$table2);
//////        $this->set(compact('table2'));
//
//
//        $table2 =TableRegistry::get('table2');
//        $querys = $table2->find();
//        $this->set('$table2',$querys);
//
//    }

    /**
     * View method
     *
     * @param string|null $id Table22 id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //     */
//    public function view($id = null)
//    {
//        $table2 = $this->Table22->get($id, [
//            'contain' => [],
//        ]);
//
//        $this->set(compact('table2'));
//    }
//
//    /**
//     * Add method
//     *
//     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
//     */
//    public function add()
//    {
//        $table2 = $this->Table22->newEmptyEntity();
//        if ($this->request->is('post')) {
//            $table2 = $this->Table22->patchEntity($table2, $this->request->getData());
//            if ($this->Table22->save($table2)) {
//                $this->Flash->success(__('The table2 has been saved.'));
//
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('The table2 could not be saved. Please, try again.'));
//        }
//        $this->set(compact('table2'));
//    }
//
//    /**
//     * Edit method
//     *
//     * @param string|null $id Table22 id.
//     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
//     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
//     */
//    public function edit($id = null)
//    {
//        $table2 = $this->Table22->get($id, [
//            'contain' => [],
//        ]);
//        if ($this->request->is(['patch', 'post', 'put'])) {
//            $table2 = $this->Table22->patchEntity($table2, $this->request->getData());
//            if ($this->Table22->save($table2)) {
//                $this->Flash->success(__('The table2 has been saved.'));
//
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('The table2 could not be saved. Please, try again.'));
//        }
//        $this->set(compact('table2'));
//    }
//
//    /**
//     * Delete method
//     *
//     * @param string|null $id Table22 id.
//     * @return \Cake\Http\Response|null|void Redirects to index.
//     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
//     */
//    public function delete($id = null)
//    {
//        $this->request->allowMethod(['post', 'delete']);
//        $table2 = $this->Table22->get($id);
//        if ($this->Table22->delete($table2)) {
//            $this->Flash->success(__('The table2 has been deleted.'));
//        } else {
//            $this->Flash->error(__('The table2 could not be deleted. Please, try again.'));
//        }
//
//        return $this->redirect(['action' => 'index']);
//    }
}
