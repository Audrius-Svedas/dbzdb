<?php

namespace App\Helpers;

class PhotoHelper
{
  public function deleteOne($photo)
  {
    $this->deleteOneFromFileSystem($photo);
    $photo->delete();
  }


  protected function deleteOneFromFileSystem($photo)
  {
    $path = storage_path('app/' . $photo->file_name);
    if (file_exits($path)) {
      unlink($path);
    }
  }
}
 ?>
