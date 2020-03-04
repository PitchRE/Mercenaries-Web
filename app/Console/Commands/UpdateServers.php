<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateServers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UpdateServers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update data about servers.';

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
     * @return mixed
     */
    public function handle()
    {
        $servers = \App\server::all();

        foreach ($servers as $key => $value) {
            $server = \App\server::find($value->id);
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $value->ip,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_TIMEOUT => 200,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    // Set Here Your Requesred Headers
                    'Content-Type: application/json',
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);
            $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $xml = simplexml_load_string($response);
            curl_close($curl);
            if ($xml == null) {
                $server->status = 'Offline';
                $server->cur_players = 0;
                $server->save();
                continue;
            }

            $json = json_encode($xml);
            $array = json_decode($json, false);

            $server->Name = $array->Name;
            $server->cur_players = $array->NumberOfActivePlayers;
            $server->max_players = $array->MaxNumberOfPlayers;
            $server->map = $array->MapName;
            switch ($array->ModuleSetting0) {
                case '14':
                    $faction1 = 'Polish Commonwealth';
                    break;

                case '15':
                    $faction1 = 'Muscovite Tsardom';
                    break;

                case '16':
                    $faction1 = 'Crimean Khanate';
                    break;
                case '17':
                    $faction1 = 'Kingdom of Sweden';
                    break;
                case '18':
                    $faction1 = 'Cossack of Hetmanate';
                    break;
            }

            switch ($array->ModuleSetting1) {
                case '14':
                    $faction2 = 'Polish Commonwealth';
                    break;

                case '15':
                    $faction2 = 'Muscovite Tsardom';
                    break;

                case '16':
                    $faction2 = 'Crimean Khanate';
                    break;
                case '17':
                    $faction2 = 'Kingdom of Sweden';
                    break;
                case '18':
                    $faction2 = 'Cossack of Hetmanate';
                    break;
            }
            $server->faction_1 = $faction1;
            $server->faction_2 = $faction2;
            $server->status = 'Online';
            $server->save();

            $this->info('Done!');

        }

    }
}
