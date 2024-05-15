<?php

namespace Solvari;

use Solvari\Exception\SolvariException;

class Solvari {

    private string $endpoint;

    private string $apiToken;

    public function __construct(string $apiToken) {
        $this->endpoint = "https://api.solvari.nl/v3/solvari/webhook";
        $this->apiToken = $apiToken;
    }

    /**
     * @throws SolvariException
     */
    public function setLeadStatus(int $solvariLeadId, SolvariLeadStatus $solvariLeadStatus): bool {
        $ch = curl_init();

        $url = "$this->endpoint/$this->apiToken";
        $postContent = array(
            "lead_id" => $solvariLeadId,
            "status" => $solvariLeadStatus->value
        );

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postContent));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);

        $json = json_decode($response, true);

        if(!$json || !isset($json["success"]) || !$json["success"]) {
            throw new SolvariException("Solvari Lead Status Error: $solvariLeadId $solvariLeadStatus->value. Response: " . $response);
        }

        return true;
    }

}
