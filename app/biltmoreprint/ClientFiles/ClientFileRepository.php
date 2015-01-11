<?php

namespace BiltmorePrint\ClientFiles;

use Symfony\Component\HttpFoundation\File\File;

class ClientFileRepository {

    public function create(File $file, $owner) {
        $path = $file->move(storage_path() . '/CustomerFile/', time() . '-' . $file->getClientOriginalName());
        return $owner->clientFiles()->create(['path' => $path]);
    }

    public function delete(ClientFile $clientFile) {
        \File::delete($clientFile->path);
        return $clientFile->delete();
    }

    public function findById($id) {
        return ClientFile::findOrFail($id);
    }

} 