<?php

    namespace app\controller;
    use app\core\Dispatch;

    class defaultController extends Dispatch
    {

        public function index(Array $request, Array $response): void
        {
            $content = file_get_contents("mapExample.json");
            $json = json_decode($content, true);

            $this->view('index', 'Editor Map', [
                'map' => $json
            ]);
        }

    }