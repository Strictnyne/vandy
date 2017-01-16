<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GitHubRepos extends Model
{
    /**
     * @var string
     */
    protected $primaryKey = 'repo_id';
    /**
     * @var string
     */
    public $table = 'github_repos';

    /**
     * @var array
     */
    protected $fillable = ['repo_id', 'full_repo_name', 'name', 'url', 'avatar_url', 'repo_created_date', 'last_push_date', 'description', 'forks', 'watchers', 'stars'];


}
