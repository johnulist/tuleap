<?php
/**
 * Copyright (c) Enalean, 2016. All Rights Reserved.
 *
 * This file is a part of Tuleap.
 *
 * Tuleap is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Tuleap is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tuleap. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Tuleap\OpenIDConnectClient\UserMapping;


class UserMapping {
    private $user_id;
    private $provider_id;
    private $identifier;

    public function __construct($user_id, $provider_id, $identifier) {
        $this->user_id     = $user_id;
        $this->provider_id = $provider_id;
        $this->identifier  = $identifier;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function getProviderId() {
        return $this->provider_id;
    }

    public function getIdentifier() {
        return $this->identifier;
    }
}