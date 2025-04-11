<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $query = Service::query();
        
        if ($request->has('search') && !empty($request->search)) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }
    
        $services = $query->get(); // Ambil hasil pencarian
        return view('services.index', compact('services'));
    }    

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:services',
            'phone' => 'required',
        ]);

        Service::create($request->all());
        return redirect()->route('services.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:services,email,'.$service->id,
            'phone' => 'required',
        ]);

        $service->update($request->all());
        return redirect()->route('services.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Data berhasil dihapus');
    }
}