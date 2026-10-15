<?php

namespace App\Console\Commands;
use App\Services\MqttService;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:mqtt-listen')]
#[Description('Command description')]
class MqttListen extends Command
{
    protected $signature = 'mqtt-listen';
    protected $description = 'Escuta mensagens MQTT do HiveMQ';

    public function handle()
    {
        $mqttService = new MqttService();
        $mqttService->receberDados();
        return Command::SUCCESS;
    }
}
