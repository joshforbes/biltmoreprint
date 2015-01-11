<?php

namespace BiltmorePrint\Work;

use Intervention\Image\ImageManager as Image;

class PrepareWorkImageHandler {


    /**
     * @var Intervention\Image\Facades\Image
     */
    private $image;

    function __construct(Image $image)
    {
        $this->image = $image;
    }

    public function handle($input)
    {
        $image = $this->image->make($input['image']);
        $thumbnail = $this->image->make($input['image']);
        $fileName = $input['image']->getClientOriginalName();
        $imagePath = public_path() . '/images/work/';

        $image->resize(null, 700, function($constraint) {
            $constraint->aspectRatio();
        })->save($imagePath . time() . '-' . $fileName);

        $thumbnail->resize(null, 400, function($constraint) {
            $constraint->aspectRatio();
        })->save($imagePath . time() . '-thumbnail-' . $fileName);

        $input['image'] = $imagePath . $image->basename;
        $input['thumbnail'] = $imagePath . $thumbnail->basename;


        return $input;
    }

}