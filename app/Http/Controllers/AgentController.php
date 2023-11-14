<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AgentController extends Controller
{
    public function AgentDashboard(){
        return view('agent.agent_index');
    }
    public function agentlog(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/landing');
    }//end 
}
