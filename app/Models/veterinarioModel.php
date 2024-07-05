<?php
namespace App\Models;
use CodeIgniter\Model;

class veterinarioModel extends Model{ 
    protected $table = 'veterinarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','apellido','dni','especialidad','telefono','fecha_ingreso','fecha_egreso'];

    public function insertar ($data){
        $existingVeterinario = $this->where('dni', $data['dni'])->first();


        if( $existingVeterinario){
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

    public function existingVeterinario($dni){
        return $existingVeterinario = $this->where('dni', $dni)->first(); 
    }





    public function modificar($data){
        $veterinario = $this->existingVeterinario($data['dni']);
        $id = ['id' => $veterinario['id']];

        if ($this->update($id,$data)) {
            // Actualización exitosa
            return 1;
        } else {
            // Error en la actualización
            return -1;
        }

    }                                                                     

    }



