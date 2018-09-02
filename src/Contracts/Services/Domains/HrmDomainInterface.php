<?php

namespace Czim\Simplicate\Contracts\Services\Domains;

use Czim\Simplicate\Contracts\Services\SimplicateDomainInterface;
use Czim\Simplicate\Data\Responses\EmployeeListResponse;
use Czim\Simplicate\Data\Responses\EmployeeSingleResponse;
use Czim\Simplicate\Data\Responses\LeaveBalanceListResponse;
use Czim\Simplicate\Data\Responses\LeaveListResponse;
use Czim\Simplicate\Data\Responses\LeaveSingleResponse;
use Czim\Simplicate\Data\Responses\TeamListResponse;
use Czim\Simplicate\Data\Responses\TeamSingleResponse;
use Czim\Simplicate\Data\Responses\TimeTableListResponse;

interface HrmDomainInterface extends SimplicateDomainInterface
{

    public function allEmployees(): EmployeeListResponse;

    public function employee(string $id): EmployeeSingleResponse;

    public function allLeave(): LeaveListResponse;

    public function leave(string $id): LeaveSingleResponse;

    public function leaveBalance(): LeaveBalanceListResponse;

    public function allTeams(): TeamListResponse;

    public function team(string $id): TeamSingleResponse;

    public function timeTables(): TimeTableListResponse;
    
}
