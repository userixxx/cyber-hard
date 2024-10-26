<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ListSites;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Services\FtpService;
use Inertia\Inertia;

class DashboardController extends Controller
{
    protected $ftpService;

    public function __construct(FtpService $ftpService)
    {
        $this->ftpService = $ftpService;
    }
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $sites = ListSites::all();

        return Inertia::render('Dashboard', [
            'sites' => $sites,
        ]);
    }
    public function showCardDetail($siteName, $date)
    {
        $filePath = "/$siteName/reports/$date/data.json";
        $data = $this->ftpService->getFile($filePath);

        if ($data) {
            $decodedData = json_decode($data, true);
            return Inertia::render('CardDetail', [
                'siteName' => $siteName,
                'date' => $date,
                'data' => $decodedData
            ]);
        }

        return Inertia::render('CardDetail', [
            'error' => 'Не удалось получить данные для этого сайта.'
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
