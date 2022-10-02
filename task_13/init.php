<?php

switch (getenv('key-storage')) {
    case 'cloud':
        $storage = new CloudStorage();
        break;
    case 'db':
        $storage = new DBStorage();
        break;
    case 'file':
        $storage = new FileStorage();
        break;
    case 'memory':
        $storage = new MemoryStorage();
        break;
    default:
        throw new Exception('Invalid storage name');
}
Settings::setItem('storage', $storage);
