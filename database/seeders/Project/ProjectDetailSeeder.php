<?php

namespace Database\Seeders\Project;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_details')->insert([

            [   'ProDetailID' => 'DCH01', 'ProjectID'       => 'DCH01',
                'DateFinish'  => 'January 2015', 'Location' => 'Quận 5', 'Price' => '800 triệu VND', 'Client' => 'Mr.Hien', 'tagName' => 'Decor Căn Hộ',
                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_bot_01.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_top_01.jpg',
                'contentTop'  => 'Đây là nội dung bên trên',
                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],

            [   'ProDetailID' => 'DCH02', 'ProjectID'       => 'DCH02',
                'DateFinish'  => 'January 2019', 'Location' => 'Quận 2', 'Price' => '800 triệu VND', 'Client' => 'Mr.Duy', 'tagName' => 'Decor Căn Hộ',
                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_bot_02.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_top_02.jpg',
                'contentTop'  => 'Đây là nội dung bên trên',
                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],

            [   'ProDetailID' => 'DCH03', 'ProjectID'       => 'DCH03',
                'DateFinish'  => 'January 2020', 'Location' => 'Quận 5', 'Price' => '800 triệu VND', 'Client' => 'Mr.Vuong', 'tagName' => 'Decor Căn Hộ',
                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_bot_03.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_top_03.jpg',
                'contentTop'  => 'Đây là nội dung bên trên',
                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],

            [   'ProDetailID' => 'DCH04', 'ProjectID'       => 'DCH04',
                'DateFinish'  => 'January 2021', 'Location' => 'Quận Bình Thạnh', 'Price' => '800 triệu VND', 'Client' => 'Mr.Minh', 'tagName' => 'Decor Căn Hộ',
                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_bot_04.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_top_04.jpg',
                'contentTop'  => 'Đây là nội dung bên trên',
                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],

        ]);
    }
}
