<?php

/*
 * This file is part of Gitamin.
 * 
 * Copyright (C) 2015-2016 The Gitamin Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gitamin\Commands\ProjectTeam;

use Gitamin\Models\ProjectTeam;

final class RemoveProjectTeamCommand
{
    /**
     * The project team to remove.
     *
     * @var \Gitamin\Models\ProjectTeam
     */
    public $team;

    /**
     * Create a new remove project team command instance.
     *
     * @param \Gitamin\Models\ProjectTeam $team
     *
     * @return void
     */
    public function __construct(ProjectTeam $team)
    {
        $this->team = $team;
    }
}
