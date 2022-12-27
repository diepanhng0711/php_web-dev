<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->string('publisher');
            $table->string('platform');
            $table->string('description');
            $table->float('price');
            $table->string('img_url');
            // $table->timestamps();
        });

        DB::table('products')
            ->insert([
                [
                    'product_name'  => 'Visual Studio Code' ,
                    'publisher'     => 'Microsoft',
                    'platform'      => 'Windows, Linux, MacOS',
                    'description'   => 'Text Editor acquired withf plenty of extensions that helps programmers optimize programming',
                    'price'         => 0,
                    'img_url'       => 'https://cdn.icon-icons.com/icons2/2107/PNG/512/file_type_vscode_icon_130084.png'
                ],
                [
                    'product_name'  => 'Microsoft Visual Studio 2022' ,
                    'publisher'     => 'Microsoft',
                    'platform'      => 'Windows, MacOS',
                    'description'   => 'The best IDE for fully develop C/C++, C# softwares',
                    'price'         => 5.20,
                    'img_url'       => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRda0DJBSxwYFu3_6eJYq4U2csp6BEGtYNHhQgT4HjIo4Z1DV1q3dctrTJmyc4U6t79SoI&usqp=CAU'
                ],
                [
                    'product_name'  => 'Intellij Ultimate 2022' ,
                    'publisher'     => 'JetBrains',
                    'platform'      => 'Windows, Linux, MacOS',
                    'description'   => 'The best IDE for fully develop Java softwares',
                    'price'         => 3.44,
                    'img_url'       => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/IntelliJ_IDEA_Icon.svg/1024px-IntelliJ_IDEA_Icon.svg.png'
                ],
                [
                    'product_name'  => 'PyCharm' ,
                    'publisher'     => 'JetBrains',
                    'platform'      => 'Windows, Linux, MacOS',
                    'description'   => 'The best IDE for fully develop Python softwares',
                    'price'         => 6.75,
                    'img_url'       => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/PyCharm_Icon.svg/1200px-PyCharm_Icon.svg.png'
                ]
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
