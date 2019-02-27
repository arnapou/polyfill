<?php

/*
 * This file is part of the Arnapou Php71FixCount package.
 *
 * (c) Arnaud Buathier <arnaud@arnapou.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Arnapou\Php72FixCount\Fixer;

trait TargetTrait
{
    /**
     * @var array
     */
    private $fixable = ['count' => [], 'sizeof' => []];
    /**
     * @var array
     */
    private $unfixable = ['count' => [], 'sizeof' => []];
    /**
     * @var array
     */
    private $conflicts = ['count' => [], 'sizeof' => []];
    /**
     * @var array
     */
    private $targets = ['count', 'sizeof'];
    /*
     * @var array
     */
    private $backslashTargets = ['\\count', '\\sizeof'];

    /**
     * @param string $target
     * @return array
     */
    public function getConflicts($target)
    {
        if (!\in_array($target, $this->targets)) {
            throw new \InvalidArgumentException('Target argument is invalid, correct values : ' . implode(', ', $this->targets));
        }
        return $this->conflicts[$target];
    }

    /**
     * @param string $target
     * @return array
     */
    public function getFixable($target)
    {
        if (!\in_array($target, $this->targets)) {
            throw new \InvalidArgumentException('Target argument is invalid, correct values : ' . implode(', ', $this->targets));
        }
        return $this->fixable[$target];
    }

    /**
     * @param string $target
     * @return array
     */
    public function getUnfixable($target)
    {
        if (!\in_array($target, $this->targets)) {
            throw new \InvalidArgumentException('Target argument is invalid, correct values : ' . implode(', ', $this->targets));
        }
        return $this->unfixable[$target];
    }
}
