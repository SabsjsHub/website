<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class JSPController extends Controller
{
    public function index()
    {
        $jspBasic = Http::get('https://website.sadhumargi.in/api/jsp-basic');
        $jsp = $jspBasic->successful() ? $jspBasic->json()[0] : null;

        $jspExam = Http::get('https://website.sadhumargi.in/api/jsp-exam');
        $examFiles = $jspExam->successful() ? $jspExam->json() : [];

        $jspBigExam = Http::get('https://website.sadhumargi.in/api/jsp-bigexam');
        $bigExamFiles = $jspBigExam->successful() ? $jspBigExam->json() : [];

        $jspHindiBooks = Http::get('https://website.sadhumargi.in/api/jsp-hindi-books');
        $hindiBooks = $jspHindiBooks->successful() ? $jspHindiBooks->json() : [];

        // 🆕 Gujarati Books
        $jspGujaratiBooks = Http::get('https://website.sadhumargi.in/api/jsp-gujrati-books');
        $gujaratiBooks = $jspGujaratiBooks->successful() ? $jspGujaratiBooks->json() : [];

        // 🆕 Old Papers
        $jspOld = Http::get('https://website.sadhumargi.in/api/jsp-old-papers');
        $oldPapersRaw = $jspOld->successful() ? $jspOld->json() : [];

        return view('activities.jsp', compact(
            'jsp',
            'examFiles',
            'bigExamFiles',
            'hindiBooks',
            'gujaratiBooks',
            'oldPapersRaw'
        ));
    }
}
