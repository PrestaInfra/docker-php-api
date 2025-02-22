<?php

declare(strict_types=1);

namespace Docker\API\Normalizer;

use Docker\API\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DeviceRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\DeviceRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\DeviceRequest' === $data::class;
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\DeviceRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Driver', $data) && null !== $data['Driver']) {
            $object->setDriver($data['Driver']);
        } elseif (\array_key_exists('Driver', $data) && null === $data['Driver']) {
            $object->setDriver(null);
        }
        if (\array_key_exists('Count', $data) && null !== $data['Count']) {
            $object->setCount($data['Count']);
        } elseif (\array_key_exists('Count', $data) && null === $data['Count']) {
            $object->setCount(null);
        }
        if (\array_key_exists('DeviceIDs', $data) && null !== $data['DeviceIDs']) {
            $values = [];
            foreach ($data['DeviceIDs'] as $value) {
                $values[] = $value;
            }
            $object->setDeviceIDs($values);
        } elseif (\array_key_exists('DeviceIDs', $data) && null === $data['DeviceIDs']) {
            $object->setDeviceIDs(null);
        }
        if (\array_key_exists('Capabilities', $data) && null !== $data['Capabilities']) {
            $values_1 = [];
            foreach ($data['Capabilities'] as $value_1) {
                $values_2 = [];
                foreach ($value_1 as $value_2) {
                    $values_2[] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $object->setCapabilities($values_1);
        } elseif (\array_key_exists('Capabilities', $data) && null === $data['Capabilities']) {
            $object->setCapabilities(null);
        }
        if (\array_key_exists('Options', $data) && null !== $data['Options']) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Options'] as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $object->setOptions($values_3);
        } elseif (\array_key_exists('Options', $data) && null === $data['Options']) {
            $object->setOptions(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDriver()) {
            $data['Driver'] = $object->getDriver();
        }
        if (null !== $object->getCount()) {
            $data['Count'] = $object->getCount();
        }
        if (null !== $object->getDeviceIDs()) {
            $values = [];
            foreach ($object->getDeviceIDs() as $value) {
                $values[] = $value;
            }
            $data['DeviceIDs'] = $values;
        }
        if (null !== $object->getCapabilities()) {
            $values_1 = [];
            foreach ($object->getCapabilities() as $value_1) {
                $values_2 = [];
                foreach ($value_1 as $value_2) {
                    $values_2[] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $data['Capabilities'] = $values_1;
        }
        if (null !== $object->getOptions()) {
            $values_3 = [];
            foreach ($object->getOptions() as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $data['Options'] = $values_3;
        }

        return $data;
    }
}
