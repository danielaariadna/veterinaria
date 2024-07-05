<?php
namespace App\Models;
use CodeIgniter\Model;

class mascotaModel extends Model{
    protected $table = 'mascotas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','raza','especie','sexo','nro_registro','edad','fecha_alta', 'fecha_defuncion'];

    public function insertar ($data){
        $existingMascota = $this->where('nro_registro', $data['nro_registro'])->first();


        if( $existingMascota){
            //Error en la inserción
            return 0;
        }else{
            
            if ($this -> insert($data)) {
                // Inserción exitosa
                return 1;
            } else {
                // Error en la inserción
                return -1;
            }
        }
    }  

    public function existingMascota($registro){
        return $existingMascota = $this->where('nro_registro', $registro)->first(); 
    }
    public function existingMascotas($id){
        return $existingMascota = $this->where('id', $id)->first(); 
    }


    public function modificar($data){
        $existingMascota= $this -> existingMascota($data['nro_registro']);
        $id = ['id' => $existingMascota['id']];

        if ($this->update($id,$data)) {
            // Actualización exitosa
            return 1;
        } else {
            // Error en la actualización
            return -1;
        }
 
    }
}