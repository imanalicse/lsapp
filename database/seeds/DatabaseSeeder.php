<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('posts')->insert([
            'title' => 'Hello World',
            'user_id' => 1,
            'body' => '<strong>Hello world content</strong> Hello world content Hello world content Hello world content Hello world content ',            
        ]);

        DB::table('categories')->insert([
            'name' => 'Android',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);                
    }
}
