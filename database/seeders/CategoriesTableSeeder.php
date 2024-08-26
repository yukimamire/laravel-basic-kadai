<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $major_category_id = [
            '1', '2', '3'
        ];

        $book_categories = [
            'ビジネス', '文学・評論', '人文・思想', 'スポーツ',
            'コンピュータ・IT', '資格・検定・就職', '絵本・児童書', '写真集',
            'ゲーム攻略本', '雑誌', 'アート・デザイン', 'ノンフィクション'
        ];

        $computer_categories = [
            'ノートPC', 'デスクトップPC', 'タブレット' 
        ];

        $display_categories = [
            '19~20インチ', 'デスクトップPC', 'タブレット' 
        ];

        foreach ($major_category_id as $major_category) {
            if ($major_category == '1') {
                foreach ($book_categories as $book_category) {
                    Category::create([
                        'name' => $book_category,
                        'description' => $book_category,
                        'major_category_id' => $major_category
                    ]);
                }
            }

            if ($major_category == '2') {
                foreach ($computer_categories as $computer_category) {
                    Category::create([
                        'name' => $computer_category,
                        'description' => $computer_category,
                        'major_category_id' => $major_category
                    ]);
                }
            }

            if ($major_category == '3') {
                foreach ($display_categories as $display_category) {
                    Category::create([
                        'name' => $display_category,
                        'description' => $display_category,
                        'major_category_id' => $major_category
                    ]);
                }
            }
        }
    }
}
