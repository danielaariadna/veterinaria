<?php
namespace App\Models;
use CodeIgniter\Model;

class amoModel extends Model{
    protected $table = 'amos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','apellido','dni','direccion','telefono','fecha_alta'];

    public function existingAmo($dni){
        return $existingAmo = $this->where('dni', $dni)->first(); 
    }

    public function existingAmos($id){
        return $existingAmo = $this->where('id', $id)->first();  
    }


    public function insertar ($data){
        
     if($this->existingAmo($data['dni'])){
          return 0;
     }else{ 
                            
         if ($this->insert($data)) {
            // Inserción exitosa
         return 1;
        } else {
            // Error en la inserción
        return -1;
             }
      }                      
 

    }

    public function modificar($data){
        $amo = $this-> existingAmo($data['dni']);
        $id = ['id' => $amo['id']];
            if ($this->update($id,$data)) {
                // Actualización exitosa
                return 1;
            } else {
                // Error en la actualización
                return -1;
            }

    }










}