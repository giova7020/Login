<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Permiso Entity
 *
 * @property string $id
 * @property string $role_id
 * @property string $usuario_id
 * @property string $plugin
 * @property string $controller
 * @property string $action
 * @property string $parametros
 * @property bool $allowed
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Usuario $usuario
 */
class Permiso extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
