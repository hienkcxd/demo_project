<?php

    namespace Database\Seeders\Project;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class ProjectListSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            DB::table('project_lists')->insert([
                //Insert data decor nhà phố
//                ['ProjectID' => 'canho01', 'ProjectName' => 'Nha Pho Quan 1', 'TagName' => 'canho', 'images' => 'images\Project\nhapho\nhapho01_bg.png'],
//                ['ProjectID' => 'canho03', 'ProjectName' => 'Nha Pho Quan binh thanh', 'TagName' => 'canho', 'images' => 'images\Project\nhapho\nhapho03_bg.jpg'],

//            //Insert data decor căn hộ
//                ['ProjectID' => 'DCH01', 'ProjectName' => 'Can Hộ Quận 5', 'TagName' => 'DCH01', 'images' => 'images\Project\canho\DCH_bg_01.jpg'],
//                ['ProjectID' => 'DCH02', 'ProjectName' => 'Căn Hộ QUận 2', 'TagName' => 'DCH01', 'images' => 'images\Project\canho\DCH_bg_02.jpg'],
//                ['ProjectID' => 'DCH03', 'ProjectName' => 'Căn Hộ Everrich', 'TagName' => 'DCH01', 'images' => 'images\Project\canho\DCH_bg_03.jpg'],
//                ['ProjectID' => 'DCH04', 'ProjectName' => 'Căn Hộ Vinhomes', 'TagName' => 'DCH01', 'images' => 'images\Project\canho\DCH_bg_04.jpg'],
                ]);
        }
    }
