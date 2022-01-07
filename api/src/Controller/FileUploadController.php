<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploadController extends BaseController
{
    /**
     * @Route("/api/upload", name="upload")
     */
    public function temporaryUploadAction(Request $request)
    {
        /** @var UploadedFile $uploadedFile */
        $uploadedFile = $request->files->get('image');
        $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
        $target_file = $destination . "/" . basename($uploadedFile->getClientOriginalName());
        $imageFileType = substr($uploadedFile->getClientOriginalName(), strpos($uploadedFile->getClientOriginalName(), ".") + 1);  
        // var_dump($destination . basename($uploadedFile->getClientOriginalName()));
        if (file_exists($target_file)) {
          return new Response('File already exists', 400);
        };
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
          return new Response('Invalid format', 400);
        };

        $uploadedFile->move($destination, $uploadedFile->getClientOriginalName());
        return new Response('Success', 200);
    }
}
