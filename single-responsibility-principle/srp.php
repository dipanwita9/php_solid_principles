<?php
//a class or a function should do one thing and one thing only
//a class should have only one reason to change
interface Notifier
{
    public function send();
}

class EmailNotifier implements Notifier
{
    private $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function send()
    {
        return 'Email sent';
    }
}

class SMSNotifier implements Notifier
{
    private $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function send()
    {
        return 'SMS sent';
    }
}

class SlackNotifier implements Notifier
{
    private $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function send()
    {
        return 'Slack message sent';
    }
}

class Notification
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function message()
    {
        return $this->message;
    }
}

$notifyEmail = new Notification('Email');
$sendemail = new EmailNotifier($notifyEmail);
$notifySMS = new Notification('SMS');
$sendsms = new SMSNotifier($notifySMS);
$notifySlack = new Notification('Slack');
$sendslack = new SlackNotifier($notifySlack);
print_r($sendemail->send().PHP_EOL);
print_r($sendsms->send().PHP_EOL);
print_r($sendslack->send().PHP_EOL);
