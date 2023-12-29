<?php

namespace App\Traits;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

trait InstagramTrait
{
    private $graphApiBaseUrl = 'https://graph.facebook.com/';
    private $version = 'v18.0';
    private $accesstoken;


    public function __construct()
    {
        $this->accesstoken = env('INSTAGRAM_ACCESS_TOKEN');
    }

    private function makeRequest($method, $url, $options = [])
    {
        $client = new Client();
        $response = $client->request($method, $url, $options);

        return json_decode($response->getBody(), true);
    }

    public function getPageId()
    {
        $url = $this->graphApiBaseUrl . 'v9.0/me/accounts?access_token=' . $this->accesstoken;
        $response = $this->makeRequest('GET', $url);

        // Process $response to get page_id
        $pageId = $response['data'][0]['id']; // Assuming the first page is the desired one

        return $pageId;
    }

    public function getConversationId($pageId)
    {
        $url = $this->graphApiBaseUrl . $this->version . '/' . $pageId . '/conversations?platform=PLATFORM&access_token=' . $this->accesstoken;
        $response = $this->makeRequest('GET', $url);

        // Process $response to get conversation_id
        $conversationId = $response['data'][0]['id']; // Assuming the first conversation is the desired one

        return $conversationId;
    }

    public function getMessageId($conversationId)
    {
        $url = $this->graphApiBaseUrl . $this->version . '/' . $conversationId . '?fields=messages&access_token=' . $this->accesstoken;
        $response = $this->makeRequest('GET', $url);

        // Process $response to get message_id
        $messageId = $response['messages']['data'][0]['id']; // Assuming the first message is the desired one

        return $messageId;
    }

    public function getInstagramScopedId($messageId)
    {
        $url = $this->graphApiBaseUrl . $this->version . '/' . $messageId . '?fields=id,created_time,from,to,message&access_token=' . $this->accesstoken;
        $response = $this->makeRequest('GET', $url);

        // Process $response to get Instagram Scoped ID (IGSID)
        $instagramScopedId = $response['from']['id'];

        return $instagramScopedId;
    }

    public function sendMessage($instagramScopedId, $textOrLink)
    {
        $url = $this->graphApiBaseUrl . $this->version . '/me/messages?access_token=' . $this->accesstoken;
        $data = [
            'recipient' => '{"id":"' . $instagramScopedId . '"}',
            'message' => '{"text":"' . $textOrLink . '"}',
        ];

        $response = $this->makeRequest('POST', $url, ['form_params' => $data]);

        // Process $response as needed
        return $response;
    }


    public function replyToMessage($recipientId, $messageText)
    {
        $url = 'https://graph.facebook.com/v14.0/me/messages';

        $response = Http::post($url, [
            'messaging_type' => 'RESPONSE',
            'recipient' => [
                'id' => 6820778378000592
            ],
            'message' => [
                'text' => $messageText
            ],
            'access_token' => $this->accesstoken
        ]);

        return $response->json();
    }
}
