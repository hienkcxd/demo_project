<?php

    namespace Database\Seeders\demo;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class demoTestSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            DB::table('demo_tests')->insert([
                ['id'=>1, 'rate'=>5, 'sysstolic'=>6, 'diastolic'=>12],
                ['id'=>2, 'rate'=>8, 'sysstolic'=>12, 'diastolic'=>13],
                ['id'=>3, 'rate'=>11, 'sysstolic'=>2, 'diastolic'=>3],
                ['id'=>4, 'rate'=>3, 'sysstolic'=>9, 'diastolic'=>5],
                ['id'=>5, 'rate'=>12, 'sysstolic'=>14, 'diastolic'=>9],
                ['id'=>6, 'rate'=>5, 'sysstolic'=>20, 'diastolic'=>8],

            ]);
        }
    }
