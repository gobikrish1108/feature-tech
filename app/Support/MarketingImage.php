<?php

namespace App\Support;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class MarketingImage
{
    public function replace(UploadedFile|TemporaryUploadedFile $file, ?string $oldPath, string $folder, int $targetKb, int $maxWidth = 1400): string
    {
        $this->delete($oldPath);

        $extension = strtolower($file->getClientOriginalExtension() ?: 'jpg');
        $extension = in_array($extension, ['jpg', 'jpeg', 'png', 'webp'], true) ? $extension : 'jpg';
        $filename = $folder.'/'.Str::uuid().'.'.$extension;

        if (extension_loaded('gd') && $this->canProcess($extension)) {
            $this->storeOptimized($file->getRealPath(), $filename, $extension, $targetKb, $maxWidth);

            return 'storage/'.$filename;
        }

        $file->storeAs($folder, basename($filename), 'public');

        return 'storage/'.$filename;
    }

    public function delete(?string $path): void
    {
        if (! $path || ! str_starts_with($path, 'storage/')) {
            return;
        }

        Storage::disk('public')->delete(Str::after($path, 'storage/'));
    }

    private function canProcess(string $extension): bool
    {
        return match ($extension) {
            'jpg', 'jpeg' => function_exists('imagecreatefromjpeg'),
            'png' => function_exists('imagecreatefrompng'),
            'webp' => function_exists('imagecreatefromwebp'),
            default => false,
        };
    }

    private function storeOptimized(string $source, string $filename, string $extension, int $targetKb, int $maxWidth): void
    {
        $image = match ($extension) {
            'png' => imagecreatefrompng($source),
            'webp' => imagecreatefromwebp($source),
            default => imagecreatefromjpeg($source),
        };

        $width = imagesx($image);
        $height = imagesy($image);
        $ratio = min(1, $maxWidth / max(1, $width));
        $newWidth = (int) round($width * $ratio);
        $newHeight = (int) round($height * $ratio);
        $canvas = imagecreatetruecolor($newWidth, $newHeight);

        imagecopyresampled($canvas, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

        $tmp = tempnam(sys_get_temp_dir(), 'marketing-image');
        $quality = 82;

        do {
            imagejpeg($canvas, $tmp, $quality);
            $quality -= 7;
        } while (filesize($tmp) > ($targetKb * 1024) && $quality >= 45);

        Storage::disk('public')->put($filename, file_get_contents($tmp));

        @unlink($tmp);
        imagedestroy($image);
        imagedestroy($canvas);
    }
}
