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
            ['ProjectID' => 'residential01','ProjectName' => 'Eco Green Interior01','TagName' => 'residential','images'=>'images/portfolio/pf(1).jpg'],
            ['ProjectID' => 'residential02','ProjectName' => 'Eco Green Interior02','TagName' => 'residential','images'=>'images/portfolio/pf(2).jpg'],
            ['ProjectID' => 'residential03','ProjectName' => 'Eco Green Interior03','TagName' => 'residential','images'=>'images/portfolio/pf(3).jpg'],
            ['ProjectID' => 'residential04','ProjectName' => 'Eco Green Interior04','TagName' => 'residential','images'=>'images/portfolio/pf(4).jpg'],
            ['ProjectID' => 'residential05','ProjectName' => 'Eco Green Interior05','TagName' => 'residential','images'=>'images/portfolio/pf(5).jpg'],
            ['ProjectID' => 'residential06','ProjectName' => 'Eco Green Interior06','TagName' => 'residential','images'=>'images/portfolio/pf(6).jpg'],
            ['ProjectID' => 'residential07','ProjectName' => 'Eco Green Interior07','TagName' => 'residential','images'=>'images/portfolio/pf(7).jpg'],
            ['ProjectID' => 'residential08','ProjectName' => 'Eco Green Interior08','TagName' => 'residential','images'=>'images/portfolio/pf(8).jpg'],
        ]);
    }
}
