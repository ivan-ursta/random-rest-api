<?php
class BoredApiActivityProvider implements ActivityProviderInterface
{
    public function getActivity(int $participants, string $type): string
    {
        $url = "http://www.boredapi.com/api/activity?participants=$participants&type=$type";
        $response = file_get_contents($url);

        if (!$response) {
            throw new Exception("Failed to fetch activity.");
        }

        $data = json_decode($response, true);

        return $data['activity'];
    }
}