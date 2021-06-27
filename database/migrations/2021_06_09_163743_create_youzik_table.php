<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateYouzikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date');
            $table->string('text_description');
            $table->string('full_text');
            $table->boolean('publish');
            $table->string('autor');
            $table->string('url')->nullable();
            $table->string('img_id')->nullable();
            $table->timestamp('created_at')->default(Carbon::now());
            $table->timestamp('updated_at')->default(Carbon::now());
        });

        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('url');
            $table->string('img_id');
            $table->boolean('publish');
            $table->timestamp('created_at')->default(Carbon::now());
            $table->timestamp('updated_at')->default(Carbon::now());
        });

        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date');
            $table->string('text_description');
            $table->integer('artist_id');
            $table->string('url');
            $table->string('img_id');
            $table->boolean('publish');
            $table->timestamp('created_at')->default(Carbon::now());
            $table->timestamp('updated_at')->default(Carbon::now());
        });

        Schema::create('musics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date');
            $table->integer('artist_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->integer('album_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->integer('genre_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('publish');
            $table->string('url');
            $table->string('url_id');
            $table->string('time');
            $table->timestamp('created_at')->default(Carbon::now());
            $table->timestamp('updated_at')->default(Carbon::now());
        });

        Schema::create('recently_played', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->integer('music_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('created_at')->default(Carbon::now());
            $table->timestamp('updated_at')->default(Carbon::now());
        });

        Schema::create('playlists', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->timestamp('created_at')->default(Carbon::now());
            $table->timestamp('updated_at')->default(Carbon::now());
        });

        Schema::create('playlist_music', function (Blueprint $table) {
            $table->id();
            $table->foreignId('playlist_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->timestamp('created_at')->default(Carbon::now());
            $table->timestamp('updated_at')->default(Carbon::now());
        });

        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp('created_at')->default(Carbon::now());
            $table->timestamp('updated_at')->default(Carbon::now());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
        Schema::dropIfExists('artistes');
        Schema::dropIfExists('albums');
        Schema::dropIfExists('musics');
        Schema::dropIfExists('recently_played');
        Schema::dropIfExists('playlist');
        Schema::dropIfExists('playlist_music');
        Schema::dropIfExists('genres');
    }
}
