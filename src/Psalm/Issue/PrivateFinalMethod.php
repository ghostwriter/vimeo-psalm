<?php

declare(strict_types=1);

namespace Psalm\Issue;

final class PrivateFinalMethod extends MethodIssue
{
    public const ERROR_LEVEL = 2;
    public const SHORTCODE = 320;
}
