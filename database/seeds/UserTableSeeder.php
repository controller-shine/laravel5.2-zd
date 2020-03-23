<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$arr=[];
		for($i=0;$i<=20;$i++){
			$tmp=[];
			$tmp['username']=str_random(20);
			$tmp['email']=str_random(8).'@163.com';
			$tmp['password']=Hash::make('lampbrother');
			$tmp['profile']='/Uploads/20191210/1575993331871569.jpg';
			$tmp['intro']=str_random(20);
			$tmp['created_at']=date('Y-m-d H:i:s');
			$tmp['updated_at']=date('Y-m-d H:i:s');
			
			$arr[]=$tmp;
		}
		DB::table('users')->insert($arr);
    }
}
