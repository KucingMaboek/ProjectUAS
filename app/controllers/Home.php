<?php

class Home extends Controller {
    public function index()
    {

        $url = "https://covid19.mathdro.id/api/countries/IDN";
        $json = file_get_contents($url);
        $json_data = json_decode($json, true);
        $lastUpdate = explode("T", $json_data['lastUpdate']);
        $time = explode(".", $lastUpdate[1])[0];
        $date = date('j F Y', strtotime(str_replace("-", "/", $lastUpdate[0])));

        $url = "https://covid19.mathdro.id/api/countries/IDN/confirmed";
        $json = file_get_contents($url);
        $json_data = json_decode($json, true);

        $confirmed = $json_data[0]['confirmed'];
        $recovered = $json_data[0]['recovered'];
        $deaths = $json_data[0]['deaths'];
        $active = $json_data[0]['active'];


        $this->view('templates/header_a');
        $this->view('home/index');
        $this->view('templates/footer');
    }

}
