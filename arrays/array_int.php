<?php
declare(strict_types=1);

/**
 * What are you doing here !?!?

 * This file is for php engine not for humans!

 * Goto templates/strict_array.php.twig
 */


    
final class array_int implements \StrictArray
{
    private $data;

            public function __construct(int ...$data)
        {
            $this->data = $data;
        }
    
    public function offsetExists($offset): bool
    {
        
            try {
                (function (int ...$v){})($offset);
            } catch (\TypeError $ex) {
                $message = \preg_replace(
                    '/Argument/',
                    'Key',
                    $ex->getMessage(),
                    1
                );
                $message = \preg_replace(
                    '/\w+::{\w+}/',
                    __METHOD__,
                    $message
                );

                throw new \TypeError($message);
            }
        

                    return isset($this->data[$offset]);
            }

    public function offsetGet($offset): ?int
    {
        
            try {
                (function (int ...$v){})($offset);
            } catch (\TypeError $ex) {
                $message = \preg_replace(
                    '/Argument/',
                    'Key',
                    $ex->getMessage(),
                    1
                );
                $message = \preg_replace(
                    '/\w+::{\w+}/',
                    __METHOD__,
                    $message
                );

                throw new \TypeError($message);
            }
        

                    return $this->data[$offset];
            }

    public function offsetSet($offset, $value): void
    {
                    if ($offset === null) {
                
            try {
                (function (int ...$v){})($value);
            } catch (\TypeError $ex) {
                $message = \preg_replace(
                    '/Argument/',
                    'Value',
                    $ex->getMessage(),
                    1
                );
                $message = \preg_replace(
                    '/\w+::{\w+}/',
                    __METHOD__,
                    $message
                );

                throw new \TypeError($message);
            }
        

                $this->data[] = $value;
            } else {
                
            try {
                (function (int ...$v){})($offset);
            } catch (\TypeError $ex) {
                $message = \preg_replace(
                    '/Argument/',
                    'Key',
                    $ex->getMessage(),
                    1
                );
                $message = \preg_replace(
                    '/\w+::{\w+}/',
                    __METHOD__,
                    $message
                );

                throw new \TypeError($message);
            }
        
                
            try {
                (function (int ...$v){})($value);
            } catch (\TypeError $ex) {
                $message = \preg_replace(
                    '/Argument/',
                    'Value',
                    $ex->getMessage(),
                    1
                );
                $message = \preg_replace(
                    '/\w+::{\w+}/',
                    __METHOD__,
                    $message
                );

                throw new \TypeError($message);
            }
        

                $this->data[$offset] = $value;
            }
            }

    public function offsetUnset($offset): void
    {
        
            try {
                (function (int ...$v){})($offset);
            } catch (\TypeError $ex) {
                $message = \preg_replace(
                    '/Argument/',
                    'Key',
                    $ex->getMessage(),
                    1
                );
                $message = \preg_replace(
                    '/\w+::{\w+}/',
                    __METHOD__,
                    $message
                );

                throw new \TypeError($message);
            }
        

                    unset($this->data[$offset]);
            }

    public function count(): int
    {
        return \count($this->data);
    }

    public function current(): ?int
    {
                    return $this->valid() ? \current($this->data) : null;
            }

    public function key(): ?int
    {
                    return \key($this->data);
            }

    public function next(): void
    {
        \next($this->data);
    }

    public function rewind(): void
    {
        \reset($this->data);
    }
    public function valid(): bool

    {
        return \key($this->data) !== null;
    }

    public function jsonSerialize(): array
    {
                    return $this->data;
            }

    public function __debugInfo(): array
    {
                    return $this->data;
            }

    }
