<?php

namespace App\Filament\Resources\ProfesseurResource\Pages;

use App\Filament\Resources\ProfesseurResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProfesseur extends CreateRecord
{
    protected static string $resource = ProfesseurResource::class;


    // protected  function beforeSave()
    // {
    //     $this->getRecord()->password = bcrypt($this->getRecord()->password);
    // }

    // //after validate 
    // protected function afterValidate()
    // {
    //     //if password is not hashed
    //     if (!\Hash::needsRehash($this->getRecord()->password)) {
    //         $this->getRecord()->password = bcrypt($this->getRecord()->password);
    //     }
    // }
   

}
