<?php
interface ActivityProviderInterface
{
    public function getActivity(int $participants, string $type): string;
}