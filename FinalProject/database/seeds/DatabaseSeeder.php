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
        $this->call(PageTableSeeder::class);
        $this->call(AreaTableSeeder::class);
        $this->call(StyleTemplateTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
    }
}

class PageTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('pages')->insert([
            'name' => "First Page",
            'alias' => "page1",
            'description' => "This is the first page that has been established"
        ]);

        DB::table('pages')->insert([
            'name' => "Second Page",
            'alias' => "page2",
            'description' => "this is the second page generated."
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
            'description' => "This is the first area established. superb"
        ]);

        DB::table('areas')->insert([
            'name' => "Second Area",
            'alias' => "Area2",
            'displayOrder' => 2,
            'description' => "This is the second area... isn't it nice."
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
            'page' => 1,
            'allPages' => 1,
            'description' => "First article generation time generated.",
            'contentArea' => "Well look, what a delightful first article we have here.",
            'htmlSnippet' => "good looking html right there",
            'area_id' => 1,
            'page_id' => 1,
        ]);

        DB::table('articles')->insert([
            'name' => "Second Article",
            'title' => "Article 2",
            'page' => 1,
            'allPages' => 0,
            'description' => "Second article generation time generated. here we go again",
            'contentArea' => "what a pretty second article. it should get one of Bob Ross' happy little cabins.",
            'htmlSnippet' => "more good looking html right there",
            'area_id' => 2,
            'page_id' => 2,
        ]);
    }
}

class StyleTemplateTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('style_Templates')->insert([
            'name' => "First Style Template",
            'description' => "This is the description to the first style created.",
            'content' => "this css here makes the pages look gooooood.",
            'activeState' => 1
        ]);

        DB::table('style_Templates')->insert([
            'name' => "Second Style Template",
            'description' => "This is the description to the second style created.",
            'content' => "this css here makes the pages look even better than the last!",
            'activeState' => 0
        ]);
    }
}