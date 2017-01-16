<?php

namespace App\Http\Controllers;

use App\GitHubRepos;
use Faker\Provider\cs_CZ\DateTime;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class GitHubController extends Controller
{
    /**
     * @var string
     */
    public $url;

    /**
     * GitHubController constructor.
     */
    public function __construct() {
        $this->url = "https://api.github.com/search/repositories?q=language:php&sort=stars&&order=desc&per_page=100";
    }

    /**
     *
     */
    public function download_data() {

        for ($i = 1; $i <= 5; $i++) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $this->url . '&page=' . $i);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
            curl_setopt($curl, CURLOPT_HTTPHEADER, ['User-Agent: PHP']);

            $results = curl_exec($curl);

            $decoded = json_decode($results, 1);

            foreach($decoded['items'] as $result) {
                GitHubRepos::updateOrCreate(
                    ['repo_id' => $result['id']],
                    [
                        'repo_id' => $result['id'],
                        'name' => $result['name'],
                        'full_repo_name' => $result['full_name'],
                        'url' => $result['html_url'],
                        'avatar_url' => $result['owner']['avatar_url'],
                        'repo_created_date' => date('Y-m-d h:i:s', strtotime($result['created_at'])),
                        'last_push_date' => date('Y-m-d h:i:s', strtotime($result['updated_at'])),
                        'description' => $result['description'],
                        'forks' => $result['forks'],
                        'watchers' => $result['watchers'],
                        'stars' => $result['stargazers_count'],
                    ]
                );
            }
            curl_close($curl);
        }

    }

    /**
     * @return View
     */
    public function list_results() {
        $check_tables = GitHubRepos::limit(1);

        if(!$check_tables) {
            echo 'No Results found';
        }

        return view('github.index');
    }

    /**
     * @param $id
     * @return View
     */
    public function show_repo_details($id) {
        $data = [
            'repo' => GitHubRepos::where('repo_id', $id)->first(),
        ];

        return view('repos.details', $data);
    }
}
