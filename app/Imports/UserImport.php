<?php

namespace App\Imports;

use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Http\Controllers\User;

class UserImport implements ToCollection
{
    
   public function collection(Collection $collection)
    {
        foreach ($collection as $key => 

            $row) {
            if($key>=3){
            \App\Models\User::create([
                'role' => 'anggota',
                'name' => $row[1],
                'nim' => $row[2],
                 'email' => $row[3],
                 'password' => bcrypt($row[2]),
                  'remember_token' => Str::random(60)
                
            ]);

            
            \App\Models\Author::create([
                'author' => $row[1],
                 'nim' => $row[2],
               
            ]);

            
              

            }
       }
        
    } 
}

