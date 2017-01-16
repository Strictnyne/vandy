<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGithubRepoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('github_repos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('repo_id');
            $table->string('name');
            $table->string('full_repo_name');
            $table->string('url');
            $table->string('avatar_url')->nullable();
            $table->dateTime('repo_created_date');
            $table->dateTime('last_push_date');
            $table->longText('description')->nullable();
            $table->integer('forks');
            $table->integer('watchers');
            $table->integer('stars');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('github_repos');
    }
}
