<?php

namespace App\Http\Controllers\Dashboard\Admin\Period;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PeriodRequest;
use App\Models\Period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    public function index()
    {
        $periods = Period::get();
        return view('dashboard.admin.period.index', compact('periods'));
    }

    public function create()
    {
        return view('dashboard.admin.period.create');
    }

    public function store(PeriodRequest $request)
    {
        $validated = $request->validated();
        $period = Period::create($validated);
        return redirect()->route('admin.periods')->with('success', $period->name . ' created successfully.');
    }

    public function show($period_number)
    {
        $period = Period::find($period_number);
        return view('dashboard.admin.period.show', compact('period'));
    }

    public function edit($period_number)
    {
        $period = Period::find($period_number);
        return view('dashboard.admin.period.edit', compact('period'));
    }

    public function update(PeriodRequest $request, $period_number)
    {
        $period = Period::find($period_number);
        $validated = $request->validated();
        $period->update($validated);
        return redirect()->route('admin.periods')->with('success', $period->period_number . ' updated successfully.');
    }

    public function delete($period_number)
    {
        $period = Period::find($period_number);
        $number = $period->period_number;
        $period->delete();
        return redirect()->route('admin.periods')->with('success-delete', $number . ' deleted successfully.');

    }
}
