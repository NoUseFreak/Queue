<?php

/**
 * This file is part of the Queue package.
 *
 * (c) Dries De Peuter <dries@nousefreak.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Queue\Executor;

use Queue\Job\JobInterface;

interface JobExecutorInterface
{
    /**
     * @param JobInterface $job
     *
     * @return bool
     */
    public function execute(JobInterface $job);
}
