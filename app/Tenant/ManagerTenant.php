<?php

namespace App\Tenant;

use App\Models\Tenant;


class ManagerTenant
{
    public function subdomain()
    {
        $piecesHosts = explode('.', request()->getHost());

        return $piecesHosts[0];
    }

    public function tenant()
    {
        $subdomain = $this->subdomain();

        $tenant = Tenant::where('subdomain', $subdomain)->first();

        return $tenant;
    }
}
