<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class ReserveRoomCommand extends Command
{
    public $user;
    public $rooms;
    public $start_date;
    public $end_date;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * ReserveRoomCommand constructor.
     * @param User $user
     * @param $start_date
     * @param $end_date
     * @param $rooms
     */
    public function __construct(User $user, $start_date, $end_date, $rooms)
    {
        parent::__construct();
        $this->rooms = $rooms;
        $this->user = $user;
        $this->start_date = $start_date;
        $this->end_date  = $end_date;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(ReserveRoomCommand $command)
    {
        $reservation = new \MyCompany\Accomodation\ReservationValidator();
        $reservation->validate($command->start_date, $command->end_date, $command->rooms);
    }
}
