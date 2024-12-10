<?php

namespace Database\Factories;
use App\Models\Etudiant;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{ 
    /**
     * Define the model's default state.
     * 
     * @return array
     */ protected $model = Etudiant::class;
    public function definition()
    {
        return [
            'nom'=>$this->faker->lastname(),
            'prenom'=>$this->faker->firstname(),
            'classe_id'=>rand(1,6),
        ];
    }
}
