<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
/**
 * Correos Controller
 *
 * @property \App\Model\Table\CorreosTable $Correos
 */
class CorreosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('correos', $this->paginate($this->Correos));
        $this->set('_serialize', ['correos']);
    }

    /**
     * View method
     *
     * @param string|null $id Correo id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $correo = $this->Correos->get($id, [
            'contain' => []
        ]);
        $this->set('correo', $correo);
        $this->set('_serialize', ['correo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $correo = $this->Correos->newEntity();
        if ($this->request->is('post')) {
            $correo = $this->Correos->patchEntity($correo, $this->request->data);
           
           $email = new Email('default');
        
            $email->to($this->request->data('destinario'))
                  ->subject($this->request->data('asunto'))                   
                  ->send($this->request->data('mensaje'));

            if ($this->Correos->save($correo)) {
                $this->Flash->success(__('The correo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The correo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('correo'));
        $this->set('_serialize', ['correo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Correo id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $correo = $this->Correos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $correo = $this->Correos->patchEntity($correo, $this->request->data);
            if ($this->Correos->save($correo)) {
                $this->Flash->success(__('The correo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The correo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('correo'));
        $this->set('_serialize', ['correo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Correo id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $correo = $this->Correos->get($id);
        if ($this->Correos->delete($correo)) {
            $this->Flash->success(__('The correo has been deleted.'));
        } else {
            $this->Flash->error(__('The correo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    
}
