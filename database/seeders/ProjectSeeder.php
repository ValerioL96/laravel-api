<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $myProjectList = [
            [
                "id" => 1,
                "type_id" => "3",
                "name" => "erboristeria-gardenia-blu",
                "url_repo" => "https://github.com/ValerioL96/erboristeria-gardenia-blu",
                "url_site" => ""
            ],
            [
                "id" => 2,
                "type_id" => "1",
                "name" => "vite-boolfolio",
                "url_repo" => "https://github.com/ValerioL96/vite-boolfolio",
                "url_site" => ""
            ],
            [
                "id" => 3,
                "type_id" => "2",
                "name" => "laravel-api",
                "url_repo" => "https://github.com/ValerioL96/laravel-api",
                "url_site" => ""
            ],
            [
                "id" => 4,
                "type_id" => "2",
                "name" => "laravel-many-to-many",
                "url_repo" => "https://github.com/ValerioL96/laravel-many-to-many",
                "url_site" => ""
            ],
            [
                "id" => 5,
                "type_id" => "2",
                "name" => "laravel-one-to-many",
                "url_repo" => "https://github.com/ValerioL96/laravel-one-to-many",
                "url_site" => ""
            ],
            [
                "id" => 6,
                "type_id" => "2",
                "name" => "laravel-auth",
                "url_repo" => "https://github.com/ValerioL96/laravel-auth",
                "url_site" => ""
            ],
            [
                "id" => 7,
                "type_id" => "2",
                "name" => "laravel-base-crud",
                "url_repo" => "https://github.com/ValerioL96/laravel-base-crud",
                "url_site" => ""
            ],
            [
                "id" => 8,
                "type_id" => "2",
                "name" => "laravel-auth-template",
                "url_repo" => "https://github.com/ValerioL96/laravel-auth-template",
                "url_site" => ""
            ],
            [
                "id" => 9,
                "type_id" => "2",
                "name" => "laravel-migration-seeder",
                "url_repo" => "https://github.com/ValerioL96/laravel-migration-seeder",
                "url_site" => ""
            ],
            [
                "id" => 10,
                "type_id" => "2",
                "name" => "laravel-model-controller",
                "url_repo" => "https://github.com/ValerioL96/laravel-model-controller",
                "url_site" => ""
            ],
            [
                "id" => 11,
                "type_id" => "2",
                "name" => "laravel-10-bootstrap-template",
                "url_repo" => "https://github.com/ValerioL96/laravel-10-bootstrap-template",
                "url_site" => ""
            ],
            [
                "id" => 12,
                "type_id" => "2",
                "name" => "laravel-comics",
                "url_repo" => "https://github.com/ValerioL96/laravel-comics",
                "url_site" => ""
            ],
            [
                "id" => 13,
                "type_id" => "2",
                "name" => "laravel-primi-passi",
                "url_repo" => "https://github.com/ValerioL96/laravel-primi-passi",
                "url_site" => ""
            ],
            [
                "id" => 14,
                "type_id" => "2",
                "name" => "db-university",
                "url_repo" => "https://github.com/ValerioL96/db-university",
                "url_site" => ""
            ],
            [
                "id" => 15,
                "type_id" => "2",
                "name" => "db-first",
                "url_repo" => "https://github.com/ValerioL96/db-first",
                "url_site" => ""
            ],
            [
                "id" => 16,
                "type_id" => "2",
                "name" => "php-todo-list-json",
                "url_repo" => "https://github.com/ValerioL96/php-todo-list-json",
                "url_site" => ""
            ],
            [
                "id" => 17,
                "type_id" => "2",
                "name" => "php-oop-2",
                "url_repo" => "https://github.com/ValerioL96/php-oop-2",
                "url_site" => ""
            ],
            [
                "id" => 18,
                "type_id" => "2",
                "name" => "php-snacks-b1",
                "url_repo" => "https://github.com/ValerioL96/php-snacks-b1",
                "url_site" => ""
            ],
            [
                "id" => 19,
                "type_id" => "2",
                "name" => "php-oop-1",
                "url_repo" => "https://github.com/ValerioL96/php-oop-1",
                "url_site" => ""
            ],
            [
                "id" => 20,
                "type_id" => "2",
                "name" => "php-strong-password-generator",
                "url_repo" => "https://github.com/ValerioL96/php-strong-password-generator",
                "url_site" => ""
            ],
            [
                "id" => 21,
                "type_id" => "2",
                "name" => "php-hotel",
                "url_repo" => "https://github.com/ValerioL96/php-hotel",
                "url_site" => ""
            ],
            [
                "id" => 22,
                "type_id" => "2",
                "name" => "php-badwords",
                "url_repo" => "https://github.com/ValerioL96/php-badwords",
                "url_site" => ""
            ],
            [
                "id" => 23,
                "type_id" => "1",
                "name" => "proj-html-vuejs",
                "url_repo" => "https://github.com/ValerioL96/proj-html-vuejs",
                "url_site" => ""
            ],
            [
                "id" => 24,
                "type_id" => "1",
                "name" => "vite-boolflix",
                "url_repo" => "https://github.com/ValerioL96/vite-boolflix",
                "url_site" => ""
            ],
            [
                "id" => 25,
                "type_id" => "1",
                "name" => "vite-comics",
                "url_repo" => "https://github.com/ValerioL96/vite-comics",
                "url_site" => ""
            ],
            [
                "id" => 26,
                "type_id" => "1",
                "name" => "vite-yu-gi-oh",
                "url_repo" => "https://github.com/ValerioL96/vite-yu-gi-oh",
                "url_site" => ""
            ],
            [
                "id" => 27,
                "type_id" => "1",
                "name" => "vite-hello-world",
                "url_repo" => "https://github.com/ValerioL96/vite-hello-world",
                "url_site" => ""
            ],
            [
                "id" => 28,
                "type_id" => "1",
                "name" => "vue-email-list",
                "url_repo" => "https://github.com/ValerioL96/vue-email-list",
                "url_site" => ""
            ],
            [
                "id" => 29,
                "type_id" => "1",
                "name" => "vue-slider",
                "url_repo" => "https://github.com/ValerioL96/vue-slider",
                "url_site" => ""
            ],
            [
                "id" => 30,
                "type_id" => "1",
                "name" => "vue-boolzapp",
                "url_repo" => "https://github.com/ValerioL96/vue-boolzapp",
                "url_site" => ""
            ],
            [
                "id" => 31,
                "type_id" => "1",
                "name" => "vue-todolist",
                "url_repo" => "https://github.com/ValerioL96/vue-todolist",
                "url_site" => ""
            ],
            [
                "id" => 32,
                "type_id" => "1",
                "name" => "js-snack-es6",
                "url_repo" => "https://github.com/ValerioL96/js-snack-es6",
                "url_site" => ""
            ],
            [
                "id" => 33,
                "type_id" => "1",
                "name" => "vue-hello",
                "url_repo" => "https://github.com/ValerioL96/vue-hello",
                "url_site" => ""
            ],
            [
                "id" => 34,
                "type_id" => "1",
                "name" => "js-campominato-dom",
                "url_repo" => "https://github.com/ValerioL96/js-campominato-dom",
                "url_site" => ""
            ],
            [
                "id" => 35,
                "type_id" => "1",
                "name" => "js-jsnacks-blocco-3",
                "url_repo" => "https://github.com/ValerioL96/js-jsnacks-blocco-3",
                "url_site" => ""
            ],
            [
                "id" => 36,
                "type_id" => "1",
                "name" => "js-our-team",
                "url_repo" => "https://github.com/ValerioL96/js-our-team",
                "url_site" => ""
            ],
            [
                "id" => 37,
                "type_id" => "1",
                "name" => "js-paliedispari",
                "url_repo" => "https://github.com/ValerioL96/js-paliedispari",
                "url_site" => ""
            ],
            [
                "id" => 38,
                "type_id" => "1",
                "name" => "js-simon",
                "url_repo" => "https://github.com/ValerioL96/js-simon",
                "url_site" => ""
            ],
            [
                "id" => 39,
                "type_id" => "1",
                "name" => "js-biglietto-treno-form",
                "url_repo" => "https://github.com/ValerioL96/js-biglietto-treno-form",
                "url_site" => ""
            ],
            [
                "id" => 40,
                "type_id" => "1",
                "name" => "js-lista-spesa",
                "url_repo" => "https://github.com/ValerioL96/js-lista-spesa",
                "url_site" => ""
            ],
            [
                "id" => 41,
                "type_id" => "1",
                "name" => "js-mail-dadi",
                "url_repo" => "https://github.com/ValerioL96/js-mail-dadi",
                "url_site" => ""
            ],
            [
                "id" => 42,
                "type_id" => "1",
                "name" => "js-jsnacks-blocco-1",
                "url_repo" => "https://github.com/ValerioL96/js-jsnacks-blocco-1",
                "url_site" => ""
            ],
            [
                "id" => 43,
                "type_id" => "1",
                "name" => "js-fizzbuzz",
                "url_repo" => "https://github.com/ValerioL96/js-fizzbuzz",
                "url_site" => ""
            ],
            [
                "id" => 44,
                "type_id" => "1",
                "name" => "js-biglietto-treno",
                "url_repo" => "https://github.com/ValerioL96/js-biglietto-treno",
                "url_site" => ""
            ],
            [
                "id" => 45,
                "type_id" => "1",
                "name" => "html-css-bootstrap-dashboard",
                "url_repo" => "https://github.com/ValerioL96/html-css-bootstrap-dashboard",
                "url_site" => ""
            ],
            [
                "id" => 46,
                "type_id" => "1",
                "name" => "js-pwdgen-wannabe",
                "url_repo" => "https://github.com/ValerioL96/js-pwdgen-wannabe",
                "url_site" => ""
            ],
            [
                "id" => 47,
                "type_id" => "1",
                "name" => "human-code",
                "url_repo" => "https://github.com/ValerioL96/human-code",
                "url_site" => ""
            ],
            [
                "id" => 48,
                "type_id" => "1",
                "name" => "html-css-bootstrap-freelancer",
                "url_repo" => "https://github.com/ValerioL96/html-css-bootstrap-freelancer",
                "url_site" => ""
            ],
            [
                "id" => 49,
                "type_id" => "1",
                "name" => "html-css-spotifyweb",
                "url_repo" => "https://github.com/ValerioL96/html-css-spotifyweb",
                "url_site" => ""
            ],
            [
                "id" => 50,
                "type_id" => "1",
                "name" => "html-css-resp-wannabe",
                "url_repo" => "https://github.com/ValerioL96/html-css-resp-wannabe",
                "url_site" => ""
            ],
            [
                "id" => 51,
                "type_id" => "1",
                "name" => "htmlcss-dropbox",
                "url_repo" => "https://github.com/ValerioL96/htmlcss-dropbox",
                "url_site" => ""
            ],
            [
                "id" => 52,
                "type_id" => "1",
                "name" => "html-css-toboolist",
                "url_repo" => "https://github.com/ValerioL96/html-css-toboolist",
                "url_site" => ""
            ],
            [
                "id" => 53,
                "type_id" => "1",
                "name" => "htmlcss-discord",
                "url_repo" => "https://github.com/ValerioL96/htmlcss-discord",
                "url_site" => ""
            ],
            [
                "id" => 54,
                "type_id" => "1",
                "name" => "htmlcss-shoes",
                "url_repo" => "https://github.com/ValerioL96/htmlcss-shoes",
                "url_site" => ""
            ],
            [
                "id" => 55,
                "type_id" => "1",
                "name" => "html-css-boolando",
                "url_repo" => "https://github.com/ValerioL96/html-css-boolando",
                "url_site" => ""
            ],
            [
                "id" => 56,
                "type_id" => "1",
                "name" => "htmlcss-struttura-discord",
                "url_repo" => "https://github.com/ValerioL96/htmlcss-struttura-discord",
                "url_site" => ""
            ],
            [
                "id" => 57,
                "type_id" => "1",
                "name" => "html-css-booleaner",
                "url_repo" => "https://github.com/ValerioL96/html-css-booleaner",
                "url_site" => ""
            ],
            [
                "id" => 58,
                "type_id" => "1",
                "name" => "html-london-trip",
                "url_repo" => "https://github.com/ValerioL96/html-london-trip",
                "url_site" => ""
            ],
            [
                "id" => 59,
                "type_id" => "1",
                "name" => "htmlcss-hello",
                "url_repo" => "https://github.com/ValerioL96/htmlcss-hello",
                "url_site" => ""
            ],
            [
                "id" => 60,
                "type_id" => "1",
                "name" => "Lim-Monopattino-2",
                "url_repo" => "https://github.com/ValerioL96/Lim-Monopattino-2",
                "url_site" => ""
            ],
        ];


        foreach ($myProjectList as $project) {
            $newProject = new Project();
            $newProject->id=$project['id'];
            $newProject->type_id = $project['type_id'];
            $newProject->name = $project['name'];
            $newProject->url_repo = $project['url_repo'];
            $newProject->save();
        }
    }
}
