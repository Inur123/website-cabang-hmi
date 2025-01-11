<?php

namespace App\Filament\Resources\KegiatanResource\Pages;

use App\Filament\Resources\KegiatanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\CreateRecordAndRedirectToIndex;

class CreateKegiatan extends CreateRecordAndRedirectToIndex
{
    protected static string $resource = KegiatanResource::class;
}
