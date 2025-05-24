<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use Illuminate\Support\Collection;

class SubmissionController extends Controller
{
    public function index()
    {
        $subm_req = \App\Models\Submission::all()
            ->map(function ($item) {
                return [
                    'key' => $item->key,
                    'name' => json_decode($item->value)->name ?? '',
                    'description' => json_decode($item->value)->description ?? '',
                ];
            });

        return view('wp-public.pages.spmb', compact('subm_req'));
    }
}
