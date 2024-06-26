<?php

namespace Symfony\Config\JmsSerializer\InstancesConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Visitors'.\DIRECTORY_SEPARATOR.'JsonSerializationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Visitors'.\DIRECTORY_SEPARATOR.'JsonDeserializationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Visitors'.\DIRECTORY_SEPARATOR.'XmlSerializationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Visitors'.\DIRECTORY_SEPARATOR.'XmlDeserializationConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class VisitorsConfig 
{
    private $jsonSerialization;
    private $jsonDeserialization;
    private $xmlSerialization;
    private $xmlDeserialization;
    private $_usedProperties = [];

    public function jsonSerialization(array $value = []): \Symfony\Config\JmsSerializer\InstancesConfig\Visitors\JsonSerializationConfig
    {
        if (null === $this->jsonSerialization) {
            $this->_usedProperties['jsonSerialization'] = true;
            $this->jsonSerialization = new \Symfony\Config\JmsSerializer\InstancesConfig\Visitors\JsonSerializationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "jsonSerialization()" has already been initialized. You cannot pass values the second time you call jsonSerialization().');
        }

        return $this->jsonSerialization;
    }

    public function jsonDeserialization(array $value = []): \Symfony\Config\JmsSerializer\InstancesConfig\Visitors\JsonDeserializationConfig
    {
        if (null === $this->jsonDeserialization) {
            $this->_usedProperties['jsonDeserialization'] = true;
            $this->jsonDeserialization = new \Symfony\Config\JmsSerializer\InstancesConfig\Visitors\JsonDeserializationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "jsonDeserialization()" has already been initialized. You cannot pass values the second time you call jsonDeserialization().');
        }

        return $this->jsonDeserialization;
    }

    public function xmlSerialization(array $value = []): \Symfony\Config\JmsSerializer\InstancesConfig\Visitors\XmlSerializationConfig
    {
        if (null === $this->xmlSerialization) {
            $this->_usedProperties['xmlSerialization'] = true;
            $this->xmlSerialization = new \Symfony\Config\JmsSerializer\InstancesConfig\Visitors\XmlSerializationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "xmlSerialization()" has already been initialized. You cannot pass values the second time you call xmlSerialization().');
        }

        return $this->xmlSerialization;
    }

    public function xmlDeserialization(array $value = []): \Symfony\Config\JmsSerializer\InstancesConfig\Visitors\XmlDeserializationConfig
    {
        if (null === $this->xmlDeserialization) {
            $this->_usedProperties['xmlDeserialization'] = true;
            $this->xmlDeserialization = new \Symfony\Config\JmsSerializer\InstancesConfig\Visitors\XmlDeserializationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "xmlDeserialization()" has already been initialized. You cannot pass values the second time you call xmlDeserialization().');
        }

        return $this->xmlDeserialization;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('json_serialization', $value)) {
            $this->_usedProperties['jsonSerialization'] = true;
            $this->jsonSerialization = new \Symfony\Config\JmsSerializer\InstancesConfig\Visitors\JsonSerializationConfig($value['json_serialization']);
            unset($value['json_serialization']);
        }

        if (array_key_exists('json_deserialization', $value)) {
            $this->_usedProperties['jsonDeserialization'] = true;
            $this->jsonDeserialization = new \Symfony\Config\JmsSerializer\InstancesConfig\Visitors\JsonDeserializationConfig($value['json_deserialization']);
            unset($value['json_deserialization']);
        }

        if (array_key_exists('xml_serialization', $value)) {
            $this->_usedProperties['xmlSerialization'] = true;
            $this->xmlSerialization = new \Symfony\Config\JmsSerializer\InstancesConfig\Visitors\XmlSerializationConfig($value['xml_serialization']);
            unset($value['xml_serialization']);
        }

        if (array_key_exists('xml_deserialization', $value)) {
            $this->_usedProperties['xmlDeserialization'] = true;
            $this->xmlDeserialization = new \Symfony\Config\JmsSerializer\InstancesConfig\Visitors\XmlDeserializationConfig($value['xml_deserialization']);
            unset($value['xml_deserialization']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['jsonSerialization'])) {
            $output['json_serialization'] = $this->jsonSerialization->toArray();
        }
        if (isset($this->_usedProperties['jsonDeserialization'])) {
            $output['json_deserialization'] = $this->jsonDeserialization->toArray();
        }
        if (isset($this->_usedProperties['xmlSerialization'])) {
            $output['xml_serialization'] = $this->xmlSerialization->toArray();
        }
        if (isset($this->_usedProperties['xmlDeserialization'])) {
            $output['xml_deserialization'] = $this->xmlDeserialization->toArray();
        }

        return $output;
    }

}
