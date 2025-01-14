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

class PluginsInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\PluginsInfo' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\PluginsInfo' === $data::class;
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
        $object = new \Docker\API\Model\PluginsInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Volume', $data) && null !== $data['Volume']) {
            $values = [];
            foreach ($data['Volume'] as $value) {
                $values[] = $value;
            }
            $object->setVolume($values);
        } elseif (\array_key_exists('Volume', $data) && null === $data['Volume']) {
            $object->setVolume(null);
        }
        if (\array_key_exists('Network', $data) && null !== $data['Network']) {
            $values_1 = [];
            foreach ($data['Network'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setNetwork($values_1);
        } elseif (\array_key_exists('Network', $data) && null === $data['Network']) {
            $object->setNetwork(null);
        }
        if (\array_key_exists('Authorization', $data) && null !== $data['Authorization']) {
            $values_2 = [];
            foreach ($data['Authorization'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setAuthorization($values_2);
        } elseif (\array_key_exists('Authorization', $data) && null === $data['Authorization']) {
            $object->setAuthorization(null);
        }
        if (\array_key_exists('Log', $data) && null !== $data['Log']) {
            $values_3 = [];
            foreach ($data['Log'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setLog($values_3);
        } elseif (\array_key_exists('Log', $data) && null === $data['Log']) {
            $object->setLog(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getVolume()) {
            $values = [];
            foreach ($object->getVolume() as $value) {
                $values[] = $value;
            }
            $data['Volume'] = $values;
        }
        if (null !== $object->getNetwork()) {
            $values_1 = [];
            foreach ($object->getNetwork() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['Network'] = $values_1;
        }
        if (null !== $object->getAuthorization()) {
            $values_2 = [];
            foreach ($object->getAuthorization() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['Authorization'] = $values_2;
        }
        if (null !== $object->getLog()) {
            $values_3 = [];
            foreach ($object->getLog() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['Log'] = $values_3;
        }

        return $data;
    }
}
