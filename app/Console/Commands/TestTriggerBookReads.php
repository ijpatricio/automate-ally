<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class TestTriggerBookReads extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-trigger-book-reads {books?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Trigger Book Reads on N8N instance';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $payload = [
            'name' => 'John Doe',
            'books' => $this->argument('books') ?? 3,
        ];

        $response = Http::baseUrl(config('services.n8n.base_url'))
            ->acceptJson()
            ->asJson()
            ->post('/book-reads', $payload);

        $this->info(
            $response->json('message')
        );
    }
}
