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
        $this->call(UserTableSeeder::class);
        $this->call(PrivilegeTableSeeder::class);
        $this->call(UserPrivTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(AreaTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
        $this->call(StyleTemplateTableSeeder::class);

    }
}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => "Scott",
            'last_name' => "Rafael",
            'email' => "w0218584@nscc.ca",
            'password' => Hash::make("password"),
            'created_by' => "1",
            'updated_by' => "1"
        ]);

        DB::table('users')->insert([
            'first_name' => "Squiggs",
            'last_name' => "Net",
            'email' => "squiggs.rafael@gmail.com",
            'password' => Hash::make("password"),
            'created_by' => "1",
            'updated_by' => "1"
        ]);

        DB::table('users')->insert([
            'first_name' => "Squiggington",
            'last_name' => "Net",
            'email' => "e@mail.com",
            'password' => Hash::make("password"),
            'created_by' => "1",
            'updated_by' => "1"
        ]);
    }
}

class PrivilegeTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('privileges')->insert([
            'description' => "Administrator",
            'created_by' => "1",
            'updated_by' => "1"
        ]);

        DB::table('privileges')->insert([
            'description' => "Author",
            'created_by' => "1",
            'updated_by' => "1"
        ]);

        DB::table('privileges')->insert([
            'description' => "Editor",
            'created_by' => "1",
            'updated_by' => "1"
        ]);
    }
}

class UserPrivTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_privs')->insert([
            'user_id' => 1,
            'privilege_id' => 1,
            'created_by' => "1",
            'updated_by' => "1"
        ]);

        DB::table('user_privs')->insert([
            'user_id' => 1,
            'privilege_id' => 2,
            'created_by' => "1",
            'updated_by' => "1"
        ]);

        DB::table('user_privs')->insert([
            'user_id' => 1,
            'privilege_id' => 3,
            'created_by' => "1",
            'updated_by' => "1"
        ]);

        DB::table('user_privs')->insert([
            'user_id' => 2,
            'privilege_id' => 1,
            'created_by' => "1",
            'updated_by' => "1"
        ]);

        DB::table('user_privs')->insert([
            'user_id' => 2,
            'privilege_id' => 2,
            'created_by' => "1",
            'updated_by' => "1"
        ]);

        DB::table('user_privs')->insert([
            'user_id' => 2,
            'privilege_id' => 3,
            'created_by' => "1",
            'updated_by' => "1"
        ]);

        DB::table('user_privs')->insert([
            'user_id' => 3,
            'privilege_id' => 3,
            'created_by' => "1",
            'updated_by' => "1"
        ]);
    }
}

class PageTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('pages')->insert([
            'name' => "First Page",
            'alias' => "page1",
            'description' => "This is the first page that has been established",
            'created_by' => "2",
            'updated_by' => "2"
        ]);

        DB::table('pages')->insert([
            'name' => "Second Page",
            'alias' => "page2",
            'description' => "this is the second page generated.",
            'created_by' => "2",
            'updated_by' => "2"
        ]);
    }
}

class AreaTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('areas')->insert([
            'name' => "First Area",
            'alias' => "Area1",
            'displayOrder' => 1,
            'description' => "This is the first area established. superb",
            'created_by' => "2",
            'updated_by' => "2"
        ]);

        DB::table('areas')->insert([
            'name' => "Second Area",
            'alias' => "Area2",
            'displayOrder' => 2,
            'description' => "This is the second area... isn't it nice.",
            'created_by' => "2",
            'updated_by' => "2"
        ]);
    }
}

class ArticleTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('articles')->insert([
            'name' => "First Article",
            'title' => "Article 1",
            'allPages' => 1,
            'description' => "First article generation time generated.",
            'htmlSnippet' => "good looking html right there",
            'areas_id' => 1,
            'pages_id' => 1,
            'created_by' => "2",
            'updated_by' => "2"
        ]);

        DB::table('articles')->insert([
            'name' => "Second Article",
            'title' => "Article 2",
            'allPages' => 0,
            'description' => "Second article generation time generated. here we go again",
            'htmlSnippet' => "more good looking html right there",
            'areas_id' => 2,
            'pages_id' => 2,
            'created_by' => "2",
            'updated_by' => "2"
        ]);
    }
}

class StyleTemplateTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('style_templates')->insert([
            'name' => "First Style Template",
            'description' => "This is the description to the first style created.",
            'content' => "this css here makes the pages look gooooood.",
            'activeState' => 1,
            'created_by' => "2",
            'updated_by' => "2"
        ]);

        DB::table('style_templates')->insert([
            'name' => "Second Style Template",
            'description' => "This is the description to the second style created.",
            'content' => "this css here makes the pages look even better than the last!",
            'activeState' => 0,
            'created_by' => "2",
            'updated_by' => "2"
        ]);
    }
}