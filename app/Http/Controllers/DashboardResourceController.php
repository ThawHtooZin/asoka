<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardResourceController extends Controller
{
    public function index()
    {
        $resources = Resource::all();
        $videos = Video::all();
        return view('dashboard.resources', compact('resources', 'videos'));
    }

    public function create()
    {
        $videos = Video::all();
        return view('dashboard.resources', compact('videos'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'video_id' => 'required|exists:videos,id',
            'pdf' => 'file|max:25000',
        ]);

        // Handle the PDF upload
        if ($request->hasFile('pdf')) {
            $pdfPath = $request->file('pdf')->store('pdfs/resources', 'public');
            $data['pdf'] = '/' . $pdfPath; // Store the path in database format
        }

        Resource::create($data);

        return redirect()->route('resources.index')->with('success', 'Resource created successfully!');
    }

    public function show($id)
    {
        $resource = Resource::findOrFail($id);
        $videos = Video::all();
        return view('dashboard.resources', compact('resource', 'videos'));
    }

    public function edit($id)
    {
        $resource = Resource::findOrFail($id);
        $videos = Video::all();
        return view('dashboard.resources', compact('resource', 'videos'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'video_id' => 'required|exists:videos,id',
            'pdf' => 'file|max:25000',
        ]);

        $resource = Resource::findOrFail($id);

        if ($resource) {
            // Handle the PDF upload if a new file is provided
            if ($request->hasFile('pdf')) {
                $pdfPath = $request->file('pdf')->store('pdfs/resources', 'public');
                $data['pdf'] = '/' . $pdfPath;

                // Optionally delete the old PDF if you don't want to keep it
                if ($resource->pdf) {
                    Storage::disk('public')->delete($resource->pdf);
                }
            } else {
                // Keep the existing PDF if no new PDF is uploaded
                $data['pdf'] = $resource->pdf;
            }

            $resource->update($data);

            return redirect()->route('resources.index')->with('success', 'Resource updated successfully!');
        }

        return redirect()->route('resources.index')->with('error', 'Resource not found');
    }

    public function destroy($id)
    {
        $resource = Resource::findOrFail($id);
        if ($resource) {
            $resource->delete();
            return redirect()->route('resources.index')->with('success', 'Resource deleted successfully!');
        }
        return redirect()->route('resources.index')->with('error', 'Resource not found');
    }
}
