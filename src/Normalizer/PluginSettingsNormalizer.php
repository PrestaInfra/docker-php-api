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

class PluginSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\PluginSettings' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\PluginSettings' === $data::class;
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
        $object = new \Docker\API\Model\PluginSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Mounts', $data) && null !== $data['Mounts']) {
            $values = [];
            foreach ($data['Mounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\PluginMount', 'json', $context);
            }
            $object->setMounts($values);
        } elseif (\array_key_exists('Mounts', $data) && null === $data['Mounts']) {
            $object->setMounts(null);
        }
        if (\array_key_exists('Env', $data) && null !== $data['Env']) {
            $values_1 = [];
            foreach ($data['Env'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEnv($values_1);
        } elseif (\array_key_exists('Env', $data) && null === $data['Env']) {
            $object->setEnv(null);
        }
        if (\array_key_exists('Args', $data) && null !== $data['Args']) {
            $values_2 = [];
            foreach ($data['Args'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setArgs($values_2);
        } elseif (\array_key_exists('Args', $data) && null === $data['Args']) {
            $object->setArgs(null);
        }
        if (\array_key_exists('Devices', $data) && null !== $data['Devices']) {
            $values_3 = [];
            foreach ($data['Devices'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\API\\Model\\PluginDevice', 'json', $context);
            }
            $object->setDevices($values_3);
        } elseif (\array_key_exists('Devices', $data) && null === $data['Devices']) {
            $object->setDevices(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $values = [];
        foreach ($object->getMounts() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['Mounts'] = $values;
        $values_1 = [];
        foreach ($object->getEnv() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['Env'] = $values_1;
        $values_2 = [];
        foreach ($object->getArgs() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['Args'] = $values_2;
        $values_3 = [];
        foreach ($object->getDevices() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $data['Devices'] = $values_3;

        return $data;
    }
}
