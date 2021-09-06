<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Mail\CorreoProgramado;
use Illuminate\Support\Facades\Mail;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\DB;
use App\Models\Evento;
use Carbon\Carbon;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        

        // $schedule->call(function () {
        //     $data = array(
        //         'name'      =>  'Juan',
        //         'message'   =>   'Mensaje de prueba cada minuto'
        //     );
        //     Mail::to('erlymcoss06@gmail.com')->send(new CorreoProgramado($data));

        // })->everyMinute();

        $schedule->call(function () {
            $sid = 'AC32810c6810d923ed3605e6cd939e2e32';
            $token = '54c95942a063258c3f497da902cb557b';
            $twilio = new Client($sid, $token);

            $today = Carbon::now();
            $tomorrow = Carbon::tomorrow();

            $eventos = Evento::whereDate('start', $tomorrow)->where('estado','En proceso')->get();
$num=1;
            foreach($eventos as $evento){
                echo($num++."Fecha evento: ".$evento->start." "." Nombre: " .$evento->name);
            }
            // $message = $twilio->messages
            //                 ->create("+18094023056", // to
            //                         ["body" => "Hola", "from" => "+13399703934"]
            //                 );

        })->everyMinute();
        
        
       //SMSMASIVO
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
