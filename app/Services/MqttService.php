<?php

namespace App\Services;

Use App\Models\Sensor;
Use PhpMqtt\Client\MqttClient;
Use PhpMqtt\Client\ConnectionSettings;

class MqttService
{

    public function receberDados(){

        $host = env('MQTT_HOST');
        $port = env('MQTT_PORT');
        $username = env('MQTT_USERNAME');
        $password = env('MQTT_PASSWORD');
        $topic = env('MQTT_TOPIC');

        $mqtt = new MqttClient($host, $port, 'novo-Cliente'.uniqid());

        $settings = (new ConnectionSettings)
            ->setUsername($username)
            ->setPassword($password)
            ->setUseTls(true);

        $mqtt->connect($settings, true);
        echo("Conectado ao laravel HiveMQ \n");

        $mqtt->subscribe($topic, function ($topic, $message){
            echo("Mensagem recebida: \n");
            echo $message . "\n";

            $dados = json_decode($message, true);

            Sensor::create([
                'sensor' => $dados['sensor'],
                'temperatura' => $dados['temperatura'],
                'umidade' => $dados['umidade'],

            ]);

            echo("Dados gravados no banco \n");

        }, 0);

        echo("Aguardando mensagens... \n");
        $mqtt->loop(true);
        
    }

}