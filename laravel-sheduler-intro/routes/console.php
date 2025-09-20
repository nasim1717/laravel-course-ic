<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use App\Jobs\BirthdayReminderJob;
use App\Jobs\SalesReportMailerJob;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('hellox', function () {
    // $this->comment("From Artisan");
    \Log::info("Hello from Artisan");
    \Log::error("This is an Error Message".now());
})->purpose('Welcome Users');

Schedule::call(function(){
    echo "Welcome to Laravel Scheduling";
})->everyMinute();

Schedule::command('hellox')->everyMinute()->timezone("Asia/Dhaka");

// Schedule::call(function(){

$date = date("m-d-y",time());
//mysqldump -u root -p -h 127.0.0.1 dbinfo > filename-{$date}.sql
//tar -zcf filename-{$date}.tar.gz filename-{$date}.sql
//rm filename-{$date}.sql

// })->sundays()->at('10:00');

// Schedule::exec('rm -rf /tmp/rubbish/*')->everyMinute();

Schedule::job(new BirthdayReminderJob)->everyMinute()->name("everyone");
Schedule::job(new BirthdayReminderJob("Mustafiz"))->everyMinute()->name("only_for_mustafiz");

// Schedule::job(new SalesReportMailerJob)->everyMinute()->runInBackground();
Schedule::job(new SalesReportMailerJob)->everyMinute()->withoutOverlapping();
Schedule::call(function(){})->weeklyOn(1,'20:00');
