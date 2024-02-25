<?php

namespace Devdojo\Frames;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Devdojo\Frames\Skeleton\SkeletonClass
 */
class FramesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'frames';
    }
}
