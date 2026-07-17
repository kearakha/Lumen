<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Smalot\PdfParser\Parser;

class TextExtractor
{
    public function extract(UploadedFile $file): string
    {
        if ($file->getClientOriginalExtension() === 'pdf') {
            return (new Parser)->parseFile($file->getRealPath())->getText();
        }

        return file_get_contents($file->getRealPath());
    }
}
