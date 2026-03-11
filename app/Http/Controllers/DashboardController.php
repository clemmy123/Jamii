<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Forum;
use App\Models\Activity;
use App\Models\Funding;

class DashboardController extends Controller
{

    public function statistics()
    {

        return [

            'members'=>Member::count(),
            'forums'=>Forum::count(),
            'activities'=>Activity::count(),
            'funding_total'=>Funding::sum('amount')

        ];

    }

}