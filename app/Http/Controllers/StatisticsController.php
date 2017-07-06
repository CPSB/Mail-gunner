<?php

namespace App\Http\Controllers;

use App\Senders;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $chart = Charts::database(Senders::all(), 'bar', 'highcharts')
            ->title('Actie statistiek')
            ->elementLabel("Mails verzonden")
            ->dimensions(1000, 500)
            ->responsive(true)
            ->groupByDay();

        return view('statistics.index', ['chart' => $chart]);
    }
}
