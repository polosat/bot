<?php
namespace Demo\ImageBot;

class Processor
{
    public static function Run()
    {
        echo "Hello the new world!";
    }

    public function enqueueFile($path)
    {
        echo "Hello world! $path";
    }

    public function downloadImages()
    {

    }

    protected function enqueueImageUrl($url)
    {

    }
}

/*
<?php
namespace Demo\ImageBot;

require __DIR__ . '/vendor/autoload.php';

$processor = new Processor();
$processor->enqueueFile('sample');




use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$message = 'This is a great message';



$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('pizzaTime', false, false, false, false);
$message = new AMQPMessage($message);

$channel->basic_publish($message, '', 'pizzaTime');
$channel->close();
$connection->close();


$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();
$channel->queue_declare('pizzaTime', false, false, false, false);

echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";

$callback = function($message) {
    echo " [x] Received ", $message->body, "\n";
};

$channel->basic_consume('pizzaTime', '', false, true, false, false, $callback);

while(count($channel->callbacks)) {
    $channel->wait();
}

*/