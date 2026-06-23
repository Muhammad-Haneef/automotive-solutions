<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateGoogleCategoryJson extends Command
{
    protected $signature = 'google:categories-json';

    protected $description = 'Generate nested JSON from Google taxonomy';

    public function handle()
    {
        $inputFile = storage_path('app/google-taxonomy.txt');

        $outputFile = base_path('database/data/google-categories.json');

        if (!file_exists($inputFile)) {
            $this->error('Google taxonomy file not found!');
            return;
        }

        $lines = file($inputFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        $tree = [];

        foreach ($lines as $line) {

            if (str_starts_with($line, '#')) {
                continue;
            }

            preg_match('/^(\d+)\s*-\s*(.+)$/', $line, $matches);

            if (!$matches) {
                continue;
            }

            $path = trim($matches[2]);

            $parts = explode(' > ', $path);

            $this->buildTree($tree, $parts);
        }

        if (!file_exists(base_path('database/data'))) {
            mkdir(base_path('database/data'), 0777, true);
        }

        file_put_contents(
            $outputFile,
            json_encode(array_values($tree), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );

        $this->info('JSON generated successfully!');
        $this->info($outputFile);
    }

    private function buildTree(array &$tree, array $parts)
    {
        $current = &$tree;

        foreach ($parts as $part) {

            $found = false;

            foreach ($current as &$node) {

                if ($node['title'] === $part) {
                    $current = &$node['children'];
                    $found = true;
                    break;
                }
            }

            if (!$found) {

                $current[] = [
                    'title' => $part,
                    'children' => []
                ];

                $lastIndex = array_key_last($current);

                $current = &$current[$lastIndex]['children'];
            }
        }
    }
}