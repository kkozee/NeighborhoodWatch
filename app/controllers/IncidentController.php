<?php

class IncidentController extends BaseController {

    public function getIncidents() {
        return View::make('incidents');
    }

    public function getIncidentReport() {
        return View::make('report-incident');
    }

}