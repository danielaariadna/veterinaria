<?php
namespace App\Models;
use CodeIgniter\Model;

class adopcionModel extends Model{
    protected $table = 'amo-mascota';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_amo','id_mascota','fecha_inicio','fecha_fin','motivo'];
    public function insertar ($data){

            if ($this -> insert($data)) {
                // Inserción exitosa
                return 1;
            } else {
                // Error en la inserción
                return -1;
            }
        
    } 
    public function existingAdopcion($id_amo,$id_mascota){
        $builder = $this->db->table('amo-mascota');
        $builder->where('id_amo', $id_amo);
        $builder->where('id_mascota', $id_mascota);
        $result = $builder->get()->getRowArray();

        return $result; 
    }

    public function existingAdopciones($id_amo){
        $builder = $this->db->table('amo-mascota');
        $builder->select('*');
        $builder->where('id_amo', $id_amo);
        $result = $builder->get()->getResultArray();
       // var_dump($result);
        return $result;
    }
    public function existingAdopcionesM($id_mascota){
        $builder = $this->db->table('amo-mascota');
        $builder->select('*');
        $builder->where('id_mascota', $id_mascota);
        $result = $builder->get()->getResultArray();
       // var_dump($result);
        return $result;
    }






    public function cargarBaja($data,$id){
        if ($this->update($id,$data)) {
            // Actualización exitosa
            return 1;
        } else {
            // Error en la actualización
            return -1;
        }
    }


}