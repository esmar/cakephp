<?php
namespace App\Controller;


use App\Controller\AppController;


use YoutubeDl\YoutubeDl;
use YoutubeDl\Exception\CopyrightException;
use YoutubeDl\Exception\NotFoundException;
use YoutubeDl\Exception\PrivateVideoException;


/**
 * Descargas Controller
 *
 * @property \App\Model\Table\DescargasTable $Descargas
 */
class DescargasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('descargas', $this->paginate($this->Descargas));
        $this->set('_serialize', ['descargas']);
    }

    /**
     * View method
     *
     * @param string|null $id Descarga id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $descarga = $this->Descargas->get($id, [
            'contain' => []
        ]);
        $this->set('descarga', $descarga);
        $this->set('_serialize', ['descarga']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $descarga = $this->Descargas->newEntity();
        if ($this->request->is('post')) {
            $descarga = $this->Descargas->patchEntity($descarga, $this->request->data);
        
            $link = $this->request->data('link');
            shell_exec('youtube-dl $link');
         
             
            if ($this->Descargas->save($descarga)) {
                $this->Flash->success(__('The descarga has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The descarga could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('descarga'));
        $this->set('_serialize', ['descarga']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Descarga id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $descarga = $this->Descargas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $descarga = $this->Descargas->patchEntity($descarga, $this->request->data);
            if ($this->Descargas->save($descarga)) {
                $this->Flash->success(__('The descarga has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The descarga could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('descarga'));
        $this->set('_serialize', ['descarga']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Descarga id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $descarga = $this->Descargas->get($id);
        if ($this->Descargas->delete($descarga)) {
            $this->Flash->success(__('The descarga has been deleted.'));
        } else {
            $this->Flash->error(__('The descarga could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
?>