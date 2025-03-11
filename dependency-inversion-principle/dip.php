<?php
//High-level modules should not import anything from low-level modules.
// Both should depend on abstractions 
//Abstractions should not depend on details. Details should depend on abstractions

<?php
interface LoggerInterface
{
    public function logError(): string;
}

class DatabaseLogger implements LoggerInterface
{
    private $message;
    public function __construct(string $message) {
        $this->message = $message;
    }
    public function logError(): string
    {
        return 'Log error from '.$this->message;
    }
}

class MailerService
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function sendEmail() : void
    {
        try {
            
        } catch (\Exception $exception) {
            $this->logger->logError($exception->getMessage());
        }
    }
}
$dblogger = new DatabaseLogger('DB');
print_r($dblogger->logError('db'));