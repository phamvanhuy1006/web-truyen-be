<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileController extends Controller
{
	public function postUpload(Request $request)
	{
		$paths = [];

		if ($request->hasFile('files')) {
			$files = $request->file('files');

			foreach ($files as $file) {
				$originalFileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
				$extension = $file->getClientOriginalExtension();
				$timestamp = now()->timestamp;
				$newFileName = $originalFileName . '_' . $timestamp;
				$filePath = 'images/' . $newFileName . '.' . $extension;
	
				Storage::disk('s3')->put($filePath, file_get_contents($file));
				$paths[] = [
					'fileName' => $file->getClientOriginalName(),
					'fileUrl' => Storage::disk('s3')->url($filePath)
				];
			}
		}

		return response()->json($paths, 200);
	}
}
