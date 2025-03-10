<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 500);
            $table->string('slug', 500);
            $table->string('description')->nullable();
            $table->string('content')->nullable();
            $table->string('image')->nullable();
            $table->enum('posted', ['yes', 'not'])->default('not');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->json('movies')->default(new Expression('(JSON_ARRAY())'));
            $table->timestamps();
        });

        // Permite crear campo(s) en alguna tabla, en este caso crea 3 campos en la tabla "posts" después del campo "image".
        /* Schema::table('posts', function (Blueprint $table) {
            $table->after('image', function (Blueprint $table) {
                $table->string('address_line1');
                $table->string('address_line2');
                $table->string('city');
            });
        }); */

        // Permite modificar el typo y el tamaño de los campos, en este caso es el del campo "slug".
        /* Schema::table('posts', function (Blueprint $table) {
            $table->string('slug', 700)->nullable()->comment('my comment')->change();
        }); */

        // Permite modificar el nombre de un campo, en este caso el nombre del campo "image".
        /* Schema::table('posts', function (Blueprint $table) {
            $table->renameColumn('image', 'imagen');
        }); */


        /* Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('address_line2');
        }); */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
