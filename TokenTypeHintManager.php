<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2019 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace OAuth2Framework\Component\TokenIntrospectionEndpoint;

class TokenTypeHintManager
{
    /**
     * @var TokenTypeHint[]
     */
    private array $tokenTypeHints = [];

    /**
     * @return TokenTypeHint[]
     */
    public function getTokenTypeHints(): array
    {
        return $this->tokenTypeHints;
    }

    public function add(TokenTypeHint $tokenTypeHint): void
    {
        $this->tokenTypeHints[$tokenTypeHint->hint()] = $tokenTypeHint;
    }
}
