<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
// use App\Http\Controllers\Carbon;
use Carbon\Carbon;

class ClientController extends Controller
{
    public function applicationForm()
    {
        return view('client.applicationForm');
    }

    public function clientLogs()
    {
        $clients = Client::all();
        return view('client.clientLogs', ['clients' => $clients]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'emailAddress' => 'required',
            'homeAddress' => 'required',
            'clientType' => 'required',
            'firstName' => 'required',
            'middleName' => 'nullable',
            'lastName' => 'required',
            'gender' => 'required',
            'birthDate' => 'required',
            'contact' => 'required',
            'divisionOfResidence' => 'required',
            'officeConcerned' => 'required',
            'purposeId' => 'required',
            'virtualIdNumber' => 'required',
            'timeOut' => 'nullable',
            'logsNumber' => 'nullable',
        ]);

        $logsNumber = Client::count() + 1;
        $data['logsNumber'] = $logsNumber;
        $data['timeIn'] = Carbon::now();
        $data['series'] = Carbon::now()->year;


        $newClient = Client::create($data);
        return redirect(route('client.store'));
    }

    //I just used this for experimentation.
    // public function destroy(Client $client){
    //     $client->delete();
    //     return redirect(route('client.clientLogs'));
    // }

    // Controller method for logging out client
    public function logout(Client $client)
    {
        //Update the timeOut field in the database
        $client->update(['timeOut' => Carbon::now()]);

        return redirect()->route('client.clientLogs')->with('success', 'Logged out successfully.');
    }
}
