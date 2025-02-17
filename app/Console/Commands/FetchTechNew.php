<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\TechNews;
use GuzzleHttp\Client;


class FetchTechNew extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-tech-new';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch technology news from the API and store it in the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $url = 'https://newsapi.org/v2/everything';
        $params = [
            'q'      => 'technology',
            'apiKey' => '613580d1af8f4c7497f625267bd38679',
        ];

        $response = Http::withOptions(['verify' => false])->get($url, $params);

        if ($response->failed()) {
            $this->error('Error fetching data from API');
            return 1;
        }

        $data = $response->json();

        if (!isset($data['articles'])) {
            $this->error('No articles found in API response');
            return 1;
        }

        $articles = array_slice($data['articles'], 0, 100);

        foreach ($articles as $article) {
            TechNews::updateOrCreate(
                ['url' => $article['url']],
                [
                    'source_id'   => $article['source']['id'] ?? null,
                    'source_name' => $article['source']['name'] ?? null,
                    'author'      => $article['author'] ?? null,
                    'title'       => $article['title'] ?? null,
                    'description' => $article['description'] ?? null,
                    'url_to_image'=> $article['urlToImage'] ?? null,
                    'published_at'=> isset($article['publishedAt']) ? date('Y-m-d H:i:s', strtotime($article['publishedAt'])) : null,
                    'content'     => $article['content'] ?? null,
                ]
            );
        }

        $this->info('Technology articles have been updated/stored successfully!');
        return 0;

    }
}
