<?php
namespace Demo\ImageBot;

class Settings
{
    const DOWNLOAD_QUEUE = 'download';
    const ERROR_QUEUE = 'error';
    const DONE_QUEUE = 'done';
    const RABBITMQ_HOST = 'localhost';
    const RABBITMQ_PORT = '5672';
    const RABBITMQ_USER = 'guest';
    const RABBITMQ_PASSWORD = 'guest';
}