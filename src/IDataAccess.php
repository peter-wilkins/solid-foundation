<?php


interface IDataAccess 
{

    public function getData();

    public function doQuery();

    public function saveData();

    public function deleteData();
}