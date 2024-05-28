<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Stagiaire;
use Barryvdh\DomPDF\Facade\PDF;

class PdfGenerationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $userId;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    public function handle()
    {
        $stagiaire = Stagiaire::findOrFail($this->userId);

        $pdf = PDF::loadView('attestation', compact('stagiaire'));

        $pdf->save(storage_path('app/public/pdfs/' . $this->userId . '_attestation.pdf'));
    }
}
