<?php
// Routes

$app->get('/requests', function($request, $response, $args) {
  $result = array("status" => false);
  $http_status =  200;
  $query_params = $request->getQueryParams();
  $parsed_body = $request->getParsedBody();

  $data = file_get_contents("http://san-diego.spotreporters.com/open311/v2/requests.json?page_size=10");
  $response->getBody()->write($data);
return $response;
  //return $response->withJson($result, $http_status);
});

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
