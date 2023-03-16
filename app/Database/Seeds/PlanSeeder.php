<?php

namespace App\Database\Seeds;

use App\Models\PlanModel;
use CodeIgniter\Config\Factories;
use CodeIgniter\Database\Seeder;

class PlanSeeder extends Seeder
{
    public function run()
    {
        try {
            $this->db->transStart();

            $planModel = Factories::models(PlanModel::class);

            foreach(self::plans() as $plan){
                $planModel->insert($plan);
            }


            $this->db->transComplete();

            echo 'Planos criados com sucesso!';
        } catch (\Throwable $th) {
            log_message('error', '[ERROR] {exception}', ['exception' => $th]);
            die($th);
        }
    }

    private static function plans(): array
    {
        return [
            [
                "plan_id" => 10233,
                "name" => "Plano Mensal",
                "recorrence" => "monthly",
                "adverts" => 5,
                "description" => "Realizando cadastro de uma novo plano",
                "value" => 39.90,
                "is_highlighted" => 0
            ],
            [
                "plan_id" => 10234,
                "name" => "Plano Trimestral",
                "recorrence" =>  "quarterly",
                "adverts" => 20,
                "description" => "Criação de plano trimestral",
                "value" => 89.90,
                "is_highlighted" => 1
            ],
            [
                "plan_id" => 10236,
                "name" => "Plano Semestral",
                "recorrence" => "semester",
                "adverts" => 10,
                "description" => "Plano Semestral",
                "value" => 159.99,
                "is_highlighted" => 0
            ],
            [
                "plan_id" => 10237,
                "name" => "Plano Anual",
                "recorrence" => "yearly",
                "adverts" => 28,
                "description" => "Plano Anual",
                "value" => 259.99,
                "is_highlighted" => 0
            ],
        ];
    }
}
