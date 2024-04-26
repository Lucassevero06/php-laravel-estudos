<?php

namespace App\Listeners;

use Illuminate\Queue\Events\JobFailed;
use Illuminate\Support\Facades\Log;
use PhpAmqpLib\Message\AMQPMessage;

class ProcessMessage
{
    public function handle(AMQPMessage $message)
    {
        // Processa a mensagem
        Log::info('Mensagem recebida: ' . $message->getBody());

        // Confirma a mensagem
        $message->ack();
    }

    public function onFailed(JobFailed $event)
    {
        // Trata a falha do processamento da mensagem
        Log::error('Falha ao processar mensagem: ' . $event->exception->getMessage());
    }
}