<?php
require __DIR__ . '/headless.php';
$today = date('Y-m-d');

$cron_log = CronLog::where('date', $today)->first();

$logs = 'Run on: ' . date('D M Y h:i A') . PHP_EOL;
$logs .= '_______________________________________';

if (!$cron_log) {
    $cron_log = new CronLog();
    $cron_log->date = $today;
}

$every_minutes_cron = new Cron\CronExpression('* * * * *');

if ($every_minutes_cron->isDue()) {
    #----extra_code_for_every_minutes_cron----*do_not_remove_this_line
}

$every_five_minutes_cron = new Cron\CronExpression('*/5 * * * *');

if ($every_five_minutes_cron->isDue()) {
    // Do something every minutes.
}

$every_ten_minutes_cron = new Cron\CronExpression('*/10 * * * *');

if ($every_ten_minutes_cron->isDue()) {
    // Do something every minutes.
}

$every_fifteen_minutes_cron = new Cron\CronExpression('*/15 * * * *');

if ($every_fifteen_minutes_cron->isDue()) {
    // Do something every minutes.
}

$every_thirty_minutes_cron = new Cron\CronExpression('*/30 * * * *');

if ($every_thirty_minutes_cron->isDue()) {
    // Do something every minutes.
}

$every_hour_cron = new Cron\CronExpression('@hourly');

if ($every_hour_cron->isDue()) {
    // Do something every minutes.
}

$daily_cron = new Cron\CronExpression('@daily');

if ($daily_cron->isDue()) {

    Invoice::generateRecurringInvoices($settings, $_L);

    $send_payment_reminder = $settings['task_automatic_payment_reminder'] ?? false;
    $task_daily_accounting_snapshot = $settings['task_daily_accounting_snapshot'] ?? false;

    if ($send_payment_reminder == '1') {
        Invoice::sendPaymentReminder($settings, $_L);
    }

    if($task_daily_accounting_snapshot == '1'){
        $accounting_snapshot = Account::createSnapshot($settings, $_L, true);
    }
}

$cron_log->logs = $logs . PHP_EOL . $cron_log->logs;
$cron_log->save();
sp_display_in_the_console('Success!');
