<?php


namespace App\Http\Controllers\Api\V1\Admin;


use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\Api\V1\Admin\Commons\UploadImageRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Ramsey\Uuid\Uuid;

class CommonController extends ApiController
{

    public function __construct()
    {
    }

    public function uploadImage(UploadImageRequest $request)
    {
        $image = $request->file('file');
        $fileName = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
        $img = Image::make($image->getRealPath());
        $img->stream(); // <-- Key point
        Storage::disk('local')->put('public/images/origins' . '/' . $fileName, $img);
        $img->resize(120, 120, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->stream(); // <-- Key point
        Storage::disk('local')->put('public/images/thumbnails' . '/' . $fileName, $img);
        return $this->successResponse($fileName);
    }
}
