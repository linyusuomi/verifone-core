<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is released under commercial license by Lamia Oy.
 *
 * @copyright  Copyright (c) 2017 Lamia Oy (https://lamia.fi)
 * @author     Irina Mäkipaja <irina@lamia.fi>
 */

namespace Verifone\Core\Converter\Request;

use Verifone\Core\Exception\UnableToConvertFieldsException;
use Verifone\Core\Storage\Storage;

/**
 * Class ArrayConverter
 * @package Verifone\Core\Converter\Request
 */
final class JsonConverter implements RequestConverter
{
    /**
     * Converts the fields in StorageInterface into a html form and returns it
     * @param Storage $storage containing fields
     * @param string $action
     * @return string json representation of fields
     * @throws UnableToConvertFieldsException if can't convert fields from given parameter
     */
    public function convert(Storage $storage, $action)
    {
        if (!is_array($storage->getAsArray())) {
            throw new UnableToConvertFieldsException();
        }

        return json_encode($storage->getAsArray());
    }
}