<?php

namespace Azuriom\Extensions;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Filesystem\Filesystem;

abstract class ExtensionManager
{
    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * Create a new ExtensionManager instance.
     *
     * @param  \Illuminate\Filesystem\Filesystem  $files
     */
    public function __construct(Filesystem $files)
    {
        $this->files = $files;
    }

    /**
     * Read the content of a json
     *
     * @param  string  $path
     * @param  bool  $asoc
     * @return mixed|null
     */
    protected function getJson(string $path, bool $asoc = false)
    {
        if (! $this->files->isFile($path)) {
            return null;
        }

        try {
            $json = json_decode($this->files->get($path), $asoc);

            if ($json && ! isset($json->enabled)) {
                $json->enabled = false;
            }

            return $json;
        } catch (FileNotFoundException $e) {
            return null;
        }
    }
}
