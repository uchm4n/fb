<?php declare(strict_types=1);

namespace Ucha19871\FB;

class FB
{
    static function __callStatic($method, $args)
    {
        return Firebase::instance()->{$method}(...$args);
    }
}

class Firebase
{

    public function __construct()
    {
        $this->database_url = config('services.firebase.database_url');
        $this->secret = config('services.firebase.secret');
    }


    static function instance()
    {
        return new self();
    }

    public function send()
    {
        return new \Firebase\FirebaseLib($this->database_url, $this->secret);
    }

    /**
     * Fetch data from Firebase
     * @param string $path
     * @return array
     */
    public function get(string $path)
    {
        return $this->send()->get($path);
    }

    /**
     * Writing data into Firebase with a PUT request
     * @param string $path
     * @param array $data
     * @return array
     */
    public function set(string $path, array $data, array $options = [])
    {
        return $this->send()->set($path, $data);
    }

    /**
     * Updating data into Firebase with a PATH request
     * @param string $path
     * @param array $data
     * @param array $options
     * @return array
     */
    public function update(string $path, array $data, array $options = [])
    {
        return $this->send()->update($path, $data, $options);
    }

    /**
     * Pushing data into Firebase with a POST request
     *
     * @param string $path
     * @param array $data
     * @param array $options
     * @return array
     */
    public function push(string $path, array $data, array $options = [])
    {
        return $this->send()->push($path, $data);
    }

    /**
     * Deletes data from Firebase
     * @param string $path
     * @return array
     */
    public function delete(string $path)
    {
        return $this->send()->delete($path);
    }
}

function tap($value, $callback)
{
    $callback($value);
    return $value;
}