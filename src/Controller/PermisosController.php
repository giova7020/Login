<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Permisos Controller
 *
 * @property \App\Model\Table\PermisosTable $Permisos
 *
 * @method \App\Model\Entity\Permiso[] paginate($object = null, array $settings = [])
 */
class PermisosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles', 'Usuarios']
        ];
        $permisos = $this->paginate($this->Permisos);

        $this->set(compact('permisos'));
        $this->set('_serialize', ['permisos']);
    }

    /**
     * View method
     *
     * @param string|null $id Permiso id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $permiso = $this->Permisos->get($id, [
            'contain' => ['Roles', 'Usuarios']
        ]);

        $this->set('permiso', $permiso);
        $this->set('_serialize', ['permiso']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $permiso = $this->Permisos->newEntity();
        if ($this->request->is('post')) {
            $permiso = $this->Permisos->patchEntity($permiso, $this->request->getData());
            if ($this->Permisos->save($permiso)) {
                $this->Flash->success(__('The permiso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The permiso could not be saved. Please, try again.'));
        }
        $roles = $this->Permisos->Roles->find('list', ['limit' => 200]);
        $usuarios = $this->Permisos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('permiso', 'roles', 'usuarios'));
        $this->set('_serialize', ['permiso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Permiso id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $permiso = $this->Permisos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $permiso = $this->Permisos->patchEntity($permiso, $this->request->getData());
            if ($this->Permisos->save($permiso)) {
                $this->Flash->success(__('The permiso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The permiso could not be saved. Please, try again.'));
        }
        $roles = $this->Permisos->Roles->find('list', ['limit' => 200]);
        $usuarios = $this->Permisos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('permiso', 'roles', 'usuarios'));
        $this->set('_serialize', ['permiso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Permiso id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $permiso = $this->Permisos->get($id);
        if ($this->Permisos->delete($permiso)) {
            $this->Flash->success(__('The permiso has been deleted.'));
        } else {
            $this->Flash->error(__('The permiso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
