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

class NetworkAttachmentConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\NetworkAttachmentConfig' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\NetworkAttachmentConfig' === $data::class;
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
        $object = new \Docker\API\Model\NetworkAttachmentConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Target', $data) && null !== $data['Target']) {
            $object->setTarget($data['Target']);
        } elseif (\array_key_exists('Target', $data) && null === $data['Target']) {
            $object->setTarget(null);
        }
        if (\array_key_exists('Aliases', $data) && null !== $data['Aliases']) {
            $values = [];
            foreach ($data['Aliases'] as $value) {
                $values[] = $value;
            }
            $object->setAliases($values);
        } elseif (\array_key_exists('Aliases', $data) && null === $data['Aliases']) {
            $object->setAliases(null);
        }
        if (\array_key_exists('DriverOpts', $data) && null !== $data['DriverOpts']) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['DriverOpts'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setDriverOpts($values_1);
        } elseif (\array_key_exists('DriverOpts', $data) && null === $data['DriverOpts']) {
            $object->setDriverOpts(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getTarget()) {
            $data['Target'] = $object->getTarget();
        }
        if (null !== $object->getAliases()) {
            $values = [];
            foreach ($object->getAliases() as $value) {
                $values[] = $value;
            }
            $data['Aliases'] = $values;
        }
        if (null !== $object->getDriverOpts()) {
            $values_1 = [];
            foreach ($object->getDriverOpts() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['DriverOpts'] = $values_1;
        }

        return $data;
    }
}
