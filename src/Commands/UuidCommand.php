<?php

namespace PierreBarbin\Uuid\Commands;

use Illuminate\Foundation\Console\ModelMakeCommand;

class UuidCommand extends ModelMakeCommand
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->option('pivot')
            ? $this->resolveStubPath('/stubs/model.uuid.pivot.stub')
            : $this->resolveStubPath('/stubs/model.uuid.stub');
    }

    /**
     * Resolve the fully-qualified path to the stub.
     *
     * @param  string  $stub
     * @return string
     */
    protected function resolveStubPath($stub)
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : $this->packagePath().$stub;
    }

    protected function packagePath(): string
    {
        return __DIR__.'/../';
    }
}
