<?php

namespace Acme\Parsers;

use Acme\Parsers\Exceptions\UnrecognizedType;

class Field
{
    public function parse($fields)
    {
       $chunks = $this->splitFieldsIntoChunk($fields);
       $parsed = [];

       foreach ($chunks as $chunk) {
           $parsed = $this->parseChunk($chunk, $parsed);
       }

       return $parsed;
    }

    /**
     * @param $fields
     * @return array
     */
    public function splitFieldsIntoChunk($fields)
    {
        return preg_split('/, ?/', $fields);
    }

    /**
     * @param $declaration
     * @param $parsed
     * @return mixed
     * @throws UnrecognizedType
     */
    public function parseChunk($declaration, $parsed)
    {
        list($property, $type) = explode(":", $declaration);

        if (!$this->typeIsRecognized($type)) {
            throw new UnrecognizedType;
        }
        $parsed[$property] = $type;
        return $parsed;
    }

    /**
     * @param $type
     * @return bool
     */
    public function typeIsRecognized($type)
    {
        return $type == 'string' or $type == 'text';
    }
}
