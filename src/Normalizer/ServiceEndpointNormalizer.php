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

class ServiceEndpointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ServiceEndpoint' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ServiceEndpoint' === $data::class;
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
        $object = new \Docker\API\Model\ServiceEndpoint();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Spec', $data) && null !== $data['Spec']) {
            $object->setSpec($this->denormalizer->denormalize($data['Spec'], 'Docker\\API\\Model\\EndpointSpec', 'json', $context));
        } elseif (\array_key_exists('Spec', $data) && null === $data['Spec']) {
            $object->setSpec(null);
        }
        if (\array_key_exists('Ports', $data) && null !== $data['Ports']) {
            $values = [];
            foreach ($data['Ports'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\EndpointPortConfig', 'json', $context);
            }
            $object->setPorts($values);
        } elseif (\array_key_exists('Ports', $data) && null === $data['Ports']) {
            $object->setPorts(null);
        }
        if (\array_key_exists('VirtualIPs', $data) && null !== $data['VirtualIPs']) {
            $values_1 = [];
            foreach ($data['VirtualIPs'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\Model\\ServiceEndpointVirtualIPsItem', 'json', $context);
            }
            $object->setVirtualIPs($values_1);
        } elseif (\array_key_exists('VirtualIPs', $data) && null === $data['VirtualIPs']) {
            $object->setVirtualIPs(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getSpec()) {
            $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
        }
        if (null !== $object->getPorts()) {
            $values = [];
            foreach ($object->getPorts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Ports'] = $values;
        }
        if (null !== $object->getVirtualIPs()) {
            $values_1 = [];
            foreach ($object->getVirtualIPs() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['VirtualIPs'] = $values_1;
        }

        return $data;
    }
}
