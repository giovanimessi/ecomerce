<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rmodel extends Model
{
    use HasFactory;


    protected $primary = 'id';
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [];

    public function beforeSave(){
    return true;
 }

   public function save(array  $options = []){
       try {
           //code...

           
           if(!$this->beforeSave()){
               return false;

           }


           return parent::save($options);

       } catch (\Exception  $th) {
           //throw $th;
   
           throw new \Exception($e->getMessage());
       }
   }
}
