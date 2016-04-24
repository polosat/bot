<?php
namespace Demo\ImageBot;

class Settings
{
    const DOWNLOAD_QUEUE = 'download';
    const ERROR_QUEUE = 'error';
    const DONE_QUEUE = 'done';
    const BROKER_HOST = 'localhost';
    const BROKER_PORT = '5672';
    const BROKER_USER = 'guest';
    const BROKER_PASSWORD = 'guest';
}