<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HardwareController extends Controller
{
    public function index()
    {
        $labs = Lab::all(); // Get all labs
        return view('technician.hardware', compact('labs'));
    }

    // Handle report file upload
    public function uploadReport(Request $request, $labId)
    {
        $request->validate([
            'report_file' => 'required|mimes:csv,pdf,xlsx,xls|max:2048', // Validate file types
        ]);

        $lab = Lab::findOrFail($labId); // Find the lab by its ID

        // Handle file upload
        if ($request->hasFile('report_file')) {
            $file = $request->file('report_file');
            $filePath = $file->store('reports'); // Store file in the 'reports' directory

            // Save file path in database
            $lab->report_file = $filePath;
            $lab->save();
        }

        return redirect()->route('hardware')->with('success', 'Report uploaded successfully.');
    }

    // Verify uploaded report
    public function verifyReport($labId)
    {
        $lab = Lab::findOrFail($labId);
        $lab->is_verified = true; // Assuming 'is_verified' field exists in the 'labs' table
        $lab->save();

        return redirect()->route('hardware')->with('success', 'Report verified successfully.');
    }
}

