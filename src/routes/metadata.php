<?php

$app->get('/api/GameDatabase', function ($request, $response, $args) {
    $schema = file_get_contents(__DIR__ . '/../../src/metadata/schema.json');
    $metadata = new Models\Metadata($schema);
    $result = $metadata->create();
    return $response->withHeader('Accept', 'application/json')->withStatus(200)->withJson($result);

});