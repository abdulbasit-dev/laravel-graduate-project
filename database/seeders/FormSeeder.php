<?php

namespace Database\Seeders;

use App\Models\Form;
use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Form::firstorCreate([
            "college_id" => 1,
            "dept_id" => 4,
            "name" => "Evaluation Form",
            "file" => "/uploads/forms/evaluation-form.xlsx",
            "upload" => null,
        ]);
    }
}
