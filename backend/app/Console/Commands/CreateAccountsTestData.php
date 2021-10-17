<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateAccountsTestData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:accountsTestData';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Accountsテーブルにテストcsvファイルを作成';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      $faker = Faker\Factory::create('ja_JP');

      
    }
}
